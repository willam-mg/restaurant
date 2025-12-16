<?php
namespace App\Services;

use App\Http\Resources\AdministratorResource;
use App\Models\Administrator;
use App\Models\User;
use App\Services\Helpers\SmsService;
use App\Services\Helpers\SocketioService;
use App\Services\UserService;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthService
{
    public function __construct(
        private UserService $userService,
        private SocketioService $socketioService,
        private SmsService $smsService,
    ) {}

    // public function sendCodeVerification($celular)
    // {
    //     try {
    //         $isTesterUser = $celular == CodeVerification::PHONE_TESTER_USER;
    //         $codeVerification = CodeVerification::create([
    //             'codigo' => $isTesterUser ? '1234': rand(1000, 9999),
    //             'celular' => $celular
    //         ]);
    //         DB::commit();
    //         if (!$isTesterUser) {
    //             $this->smsService->sendSMS($codeVerification->celular, $codeVerification->codigo);
    //         }
    //         return $codeVerification;
    //     } catch (ValidationException $th) {
    //         throw $th;
    //     }
    // }

    // public function signInRider($code, $playerId)
    // {
    //     try {
    //         $codeVerification = $this->userService->findCodeVerification($code);

    //         if (!$codeVerification || $codeVerification->verificado) {
    //             throw ValidationException::withMessages([
    //                 'code' => ['El código es inválido o ya fue usado.'],
    //             ]);
    //         }

    //         $celular = $codeVerification->celular;

    //         $cliente = Cliente::where('celular', $celular)->first();
    //         if (!$cliente) {
    //             $user = $this->userService->findUserByCelular($celular);
    //             if (!$user) {
    //                 throw ValidationException::withMessages([
    //                     'user' => ['No se encontró el usuario.'],
    //                 ]);
    //             }

    //             $cliente = Cliente::create([
    //                 'celular'=> $celular,
    //                 'user_id'=> $user->id,
    //                 'player_id'=> $playerId,
    //             ]);
    //         } else {
    //             $user = $cliente->user;
    //         }

    //         if (!$user) {
    //             throw ValidationException::withMessages([
    //                 'user' => ['Usuario inválido.'],
    //             ]);
    //         }

    //         $codeVerification->verificado = true;
    //         $codeVerification->save();

    //         $cliente->player_id = $playerId;
    //         $cliente->save();

    //         $token = $user->createToken('auth_token')->plainTextToken;

    //         return [
    //             'rider' => new ClienteResource($cliente),
    //             'access_token' => $token,
    //             'token_type' => 'Bearer',
    //         ];
    //     } catch (ValidationException $th) {
    //         throw $th;
    //     }
    // }
    
    // public function signInDriver($code, $playerId)
    // {
    //     try {
    //         $codeVerification = $this->userService->findCodeVerification($code);
    //         $celular = $codeVerification->celular;

    //         $taxi = Taxi::where('celular', $celular)->first();

    //         if (!$taxi) {
    //             $user = $this->userService->findUserByCelular($celular);

    //             $taxi = Taxi::create([
    //                 'celular' => $celular,
    //                 'user_id' => $user->id,
    //                 'player_id'=> $playerId,
    //             ]);
    //         }

    //         $user = $taxi ? $taxi->user : null;

    //         // if (!$user || !Hash::check($user->name, $user->password)) {
    //         //     throw ValidationException::withMessages([
    //         //         'email' => ['Credenciales incorrectas.'],
    //         //     ]);
    //         // }

    //         $codeVerification->verificado = true;
    //         $codeVerification->save();

    //         $taxi->player_id = $playerId;
    //         $taxi->save();

    //         $accessToken = $user->createToken('auth_token')->plainTextToken;
            
    //         $driverReource = new TaxiResource($taxi);

    //         $this->socketioService->emmitToAdministrator(ChannelModuleEnum::TAXIS->value, $taxi->toArray());
            
    //         $this->firebaseService->updateNode(
    //             "taxis/{$taxi->id}",
    //             (new TaxiResource($taxi))->toArray(request())
    //         );

    //         return [
    //             'driver' => $driverReource,
    //             'access_token' => $accessToken
    //         ];
    //     } catch (ValidationException $th) {
    //         throw $th;
    //     }
    // }

    public function signInAdmin($email, $password)
    {
        try {
            $user = User::where('email', $email)
                ->where('deleted_at', null)
                ->where('baned', false)
                ->first();

            if (!$user || !Hash::check($password, $user->password)) {
                throw ValidationException::withMessages([
                    'email' => ['Credenciales incorrectas.'],
                ]);
            }
            
            $admin = Administrator::where('user_id', $user->id)->first();
            if (!$admin) {
                throw new \Exception('El email o contraseña son incorrectos');
            }
            $accessToken = $user->createToken('api_token')->plainTextToken;
            return [
                'administrator' => new AdministratorResource($admin),
                'access_token' => $accessToken
            ];
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
