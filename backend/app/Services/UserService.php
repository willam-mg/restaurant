<?php
namespace App\Services;

use App\Enums\RiderStatusEnum;
use App\Models\Cliente;
use App\Models\CodeVerification;
use App\Models\Taxi;
use App\Models\User;
use App\Services\Helpers\FileUploadService;
use Illuminate\Support\Facades\DB;

class UserService
{
    public function __construct(private FileUploadService $fileUploadService) {}

    /**
     * Find or create a User by celular
     * @param integer | string $celular
     * @return User
     */
    public function findUserByCelular($celular): User {
        $dataUser = [
            'name' => $celular,
            'email' => $celular . '@' . $celular,
            'password' => bcrypt($celular)
        ];
        $user = User::where('email', $dataUser['email'])->withTrashed()->first();
        if ($user) {
            if ($user->trashed()) {
                $user->restore();
            }
        } else {
            $user = User::create($dataUser);
        }
        return $user;
    }

    /**
     * Find code verification by codigo
     * @param string | integer $codigo
     * @return CodeVerification
     */
    public function findCodeVerification($codigo): CodeVerification {
        $codeVerification = CodeVerification::where('codigo', $codigo)
            ->where('verificado', false)
            ->orderBy('id', 'DESC')
            ->first();
        if (!$codeVerification) {
            throw new \Exception("El codigo no es correcto");
        }
        return $codeVerification;
    }

    public function deleteAccountRider(int $id): bool
    {
        try {
            $rider = Cliente::findOrFail($id);
            DB::beginTransaction();

            $rider->update([
                'email' => 'deleted_' . $rider->id . '@example.com',
                'celular' => '0',
                'nombre_completo'  => 'Usuario eliminado',
                'status' => RiderStatusEnum::DELETED->value,
            ]);

            $user = $rider->user;

            $rider->delete();
            // $user->tokens()->delete();
            
            $existsAsDriver = Taxi::where('user_id', $user->id)->exists();
            if (!$existsAsDriver) {
                $user->update([
                    'email' => 'deleted_' . $rider->id . '@example.com',
                    'name'  => 'Usuario eliminado',
                ]);
                $user->delete();
            }

            DB::commit();

            return true;
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
    
    public function deleteAccountDriver(int $id): bool
    {
        try {
            $driver = Taxi::findOrFail($id);
            DB::beginTransaction();

            $driver->update([
                'email' => 'deleted_' . $driver->id . '@example.com',
                'celular' => '0',
                'nombre'  => 'Usuario eliminado',
                'estado' => Taxi::STATUS_DELETED,
            ]);

            $user = $driver->user;

            $driver->delete();
            // $user->tokens()->delete();

            $existsAsRider = Cliente::where('user_id', $user->id)->exists();
            if (!$existsAsRider) {
                $user->update([
                    'email' => 'deleted_' . $driver->id . '@example.com',
                    'name'  => 'Usuario eliminado',
                ]);
                
                $user->delete();
            }

            DB::commit();

            return true;
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
