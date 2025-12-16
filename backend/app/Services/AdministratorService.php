<?php
namespace App\Services;

use App\Enums\ChannelModuleEnum;
use App\Http\Resources\AdministratorResource;
use App\Models\Administrator;
use App\Models\User;
use App\Services\Helpers\FileUploadService;
use App\Services\Helpers\SocketioService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdministratorService
{
    public function __construct(
        private FileUploadService $fileUploadService,
        // private SocketioService $socketioService
    ) {}

    public function list(array $dataRequest, int $perPage = 10): AnonymousResourceCollection
    {
        $dataResult = Administrator::select('administrators.*')
            ->join('users', 'administrators.user_id', '=', 'users.id')
            ->when(data_get($dataRequest, 'fieldSearch'), function ($query) use ($dataRequest) {
                $query->where(function ($q) use ($dataRequest) {
                    $q->where('administrators.nombre_completo', 'LIKE', '%' . data_get($dataRequest, 'fieldSearch') . '%')
                        ->orWhere('users.email', 'LIKE', '%' . data_get($dataRequest, 'fieldSearch') . '%');
                });
            })
            ->when(data_get($dataRequest, 'nombre_completo'), function ($query) use ($dataRequest) {
                $query->where('administrators.nombre_completo', 'LIKE', '%' . data_get($dataRequest, 'nombre_completo') . '%');
            })
            ->when(data_get($dataRequest, 'email'), function ($query) use ($dataRequest) {
                $query->where('users.email', 'LIKE', '%' . data_get($dataRequest, 'email') . '%');
            })
            ->orderBy('administrators.id', 'DESC')
            ->paginate($perPage);
    
        return AdministratorResource::collection($dataResult);
    }

    public function find(int $id): ?AdministratorResource
    {
        return new AdministratorResource(Administrator::findOrFail($id));
    }

    public function create(Array $dataRequest, $photo = null): AdministratorResource
    {
        try {
            DB::beginTransaction();
            $dataUser = [
                'name' => $dataRequest['nombre_completo'],
                'email' => $dataRequest['email'],
                'password' => bcrypt($dataRequest['password'])
            ];

            $user = User::where('email', $dataUser['email'])->withTrashed()->first();

            if ($user) {
                if ($user->trashed()) {
                    $user->restore();
                }
            } else {
                $user = User::create($dataUser);
            }

            $dataRequest['user_id'] = $user->id;
            $administrador = Administrator::create($dataRequest);

            if ($photo) {
                $administrador->src_foto = $this->fileUploadService->saveImage($photo, $administrador->id, 'administrator');
                $administrador->save();
            }

            DB::commit();
            // $this->socketioService->emmitToAdministrator(ChannelModuleEnum::DASHBOARD->value, $administrador->toArray());
            return new AdministratorResource($administrador);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function update(int $id, Array $dataRequest, $photo = null): AdministratorResource
    {
        try {
            $administrator = Administrator::findOrFail($id);
            $user = $administrator->user;

            DB::beginTransaction();
            $administrator->update($dataRequest);
            $user->update([
                'email' => $dataRequest['email']
            ]);
            
            if ($photo) {
                $administrator->src_foto = $this->fileUploadService
                    ->saveImage(
                        $photo, 
                        $administrator->id, 
                        'administrator', 
                        $administrator->src_foto
                    );

                $administrator->save();
            }
            DB::commit();
            return new AdministratorResource($administrator);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function changePassword(int $id, string $password): AdministratorResource
    {
        try {
            $administrator = Administrator::findOrFail($id);
            $user = $administrator->user;
            DB::beginTransaction();

            $user->password = Hash::make($password);
            $user->save();
            
            DB::commit();
            return new AdministratorResource($administrator);
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function delete(int $id): void
    {
        try {
            $administrador = Administrator::findOrFail($id);
            DB::beginTransaction();
            $administrador->user->delete();
            $administrador->delete();
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function ban(int $id): void
    {
        try {
            $administrador = Administrator::findOrFail($id);
            DB::beginTransaction();
            $administrador->user->bloqued = true;
            $administrador->user->save();
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }

    public function restore(int $id): void
    {
        try {
            $branchOffice = Administrator::withTrashed()->findOrfail($id);        
            DB::beginTransaction();
            $branchOffice->restore();
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            throw $th;
        }
    }
}
