<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\AuthService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function __construct(
        private AuthService $authService
    ) {}

    /**
     * Send code verification
     * 
     * @group Auth
     * @bodyParam. Example: {
     *     "celular":"75977665"
     * }
     * @response scenario=success {
     *     "codigo": 93008,
     *     "celular": "75977665",
     *     "updated_at": "2023-12-04T12:19:23.000000Z",
     *     "created_at": "2023-12-04T12:19:23.000000Z",
     *     "id": 2
     * }
     */
    // public function sendCodeVerification(Request $request) {
    //     DB::beginTransaction();
    //     try {
    //         $rules = ['celular' => 'required'];
    //         $this->validatorMake($request->all(), $rules);
            
    //         $codeVerification = $this->authService->sendCodeVerification($request->celular);

    //         return response()->json($codeVerification, 201);
    //     } catch (\Throwable $th) {
    //         DB::rollBack();
    //         return response()->json(['message' => $th->getMessage()], 422);
    //     }
    // }

    /**
     * Login cliente
     * 
     * @group Auth
     * @bodyParam. Example: {
     *     "codigo":"9300",
     *     "player_id":"23424-432432-432432-432432-432432"
     * }
     * @response scenario=success {
     *     "cliente": {
     *         "id": 1,
     *         "nombre_completo": null,
     *         "email": null,
     *         "celular": "75977665",
     *         "player_id": null,
     *         "src_foto": null,
     *         "latitude": null,
     *         "longitude": null
     *     },
     *     "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMWMyMGZjNTkwNGQzMDFmY2Y5MzFkY2NkNzc3NmFkNGU0MWEzMDU5M2M1MWVjMmEwODcyMGZjOTNmYzllNTBkMjc1NWEzNjBkY2U2MDc3MjciLCJpYXQiOjE3MDE2OTI1MjEuNjUzNzAxLCJuYmYiOjE3MDE2OTI1MjEuNjUzNzIyLCJleHAiOjE3MTc1MDM3MjEuNjE4NDI5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.bLEYpb7BiaHdc07z2Bg7EpMVm4EtL9wf_Hsmomhw5VkQmu6Qs31hfaVM4_3wExsh8d8aaOTWY15jCtcsUHzQzDmw5GGZ3c3K8W6sjvjoMYbIAmYq3qU_OU9FQvG16dMG7d-lnXOQ8e2vjPfcRth5KZxJHgYnW2aPl75DDmm1DlbX1lINraR68eBVW5OEqDZ5oo-4swQX_LlN0KIj10ub2aMKYkAbc9EZhc5yIR7OLJdaUmfZ0v3_etXrSLmXXFf_hkc7DqYS_EexGL10Ege3O3A6zdMWwwthUlM45eTZidSeGKQZ2MiH3yBV2BMJaEyHDsxe4mmoEW-vuar64bLll0TGD1cpZYGpYyeUnhz80JZRENrRihEwaJLPFCFsVvEmuzv-cFS6nbCfQo07WZo6qjZSWK-G87Hi0Y6oS3NCY5GjLNpZVweHYUj-P8j2UMPQniJLdHYVOQvilXBJJvAgeEzbNl3jgnK_RpvW0oRriYh6kMG9cuh3gvEorpM6zbStLxBDVo2T6XcyoNDaPb0lubJxz3MoGQ4wkaFc_RC6poMBc6nwjePJen0U3Bawyv2UdwxalAOnOFFcFoFd4pjfLUz7OmNvz_BYD9UwX3GHkzcj4LlchaSYdt30mlbcm7m36aWxixyiHXpU_SwZh2KBa32gXXoVpCsLF4x33dB0e6A"
     * }
     */
    // public function signInRider(Request $request)
    // {
    //     $rules = ['codigo' => 'required'];
    //     $this->validatorMake($request->all(), $rules);

    //     $authVerified = $this->authService->signInRider($request->codigo, $request->player_id);

    //     return response([
    //         'cliente' => $authVerified['rider'],
    //         'access_token' => $authVerified['access_token'], 
    //     ], 200);
    // }

    /**
     * Login taxi
     * 
     * @group Auth
     * @bodyParam. Example: {
     *     "codigo":"2016"
     *     "player_id":"23424-432432-432432-432432-432432"
     * }
     * @response scenario=success {
     *     "taxi": {
     *         "id": 1,
     *         "nombre": null,
     *         "apellido": null,
     *         "celular": "75977665",
     *         "email": null,
     *         "fecha_nacimiento": null,
     *         "src_foto": null,
     *         "credito_disponible": null,
     *         "calificacion": null,
     *         "player_id": null,
     *         "latitude": null,
     *         "longitude": null,
     *         "numero_licencia": null,
     *         "modelo_auto": null,
     *         "numero_placa": null,
     *         "tipo_vehiculo": null,
     *         "src_licencia_amberso": null,
     *         "src_licencia_reverso": null,
     *         "src_soat": null,
     *         "src_foto_vehiculo": null,
     *         "src_ruat": null
     *     },
     *     "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiZTYyNDA0MGVlMTRmYWRhOTVmZWVhYjc2Y2JmMTkzZDliYjVlNTdkNjBjNjYwN2ZiMDhkOTQwODQ4OTQ4NzRjYjNhZGFlNjU0OTMwODg5YTYiLCJpYXQiOjE3MDE5NzE3MzMuODkyNTMsIm5iZiI6MTcwMTk3MTczMy44OTI1NDIsImV4cCI6MTcxNzc4MjkzMy44Nzg2ODQsInN1YiI6IjIiLCJzY29wZXMiOltdfQ.ibSRb-rVEJu_Ukm256BawRt_TdS6WbmnDnL9atZ9k326wIMNuABOk0ak1qF3NfOCoDXkwKiJfG1_kPNLgbbbimwMDjuM6oKMkBTFs7Rd3bC7ntkJOuCO6WasdXOVYFzlBAtSJcxzaqc_EK-Tskey6Zepab5lg4jqQHQlSniU633ZE-Ym_FLiWC1MUqMXr9AlzRo9gG1EZ9hDMR2JEnAtjmicH35MDd6Jy8ybf4TSPnwF1r2LD2edf51wElQ0J8ZzG_wTIjz4y_BiPMLroK_VhZNEJb2TSFjt1ZhbhtemKojFnoWjKInFZJ7i6_i8X-WcFXKg_2dT9ZuWSVqg5WDJBM2eHtraNjhOtXuXRZgDWzsyQM2wzC2TFFHqHpVM5n_OZ064Yccegb6QE4-5OSZZbiC6woJN81KbnhQS8cZvQKPa5MmiExLqj8Mya7zP9YDaNHR6rR-BNR33h3BaoX1zKPph64VytJKJelPgOBeToWV8hG0VOmBa77M9FXjbchjLXVB5ouViEH2x6I2hLLk7p9H8cxeqmo9j5I8o9arh8Xt9RYoEyi8m51StyDA9FA8K4x0VpbaLHKovtkthmRP-DHuMxca7e9BPnMM6pfjuU6_2sEk8H77geaaU5UOnNLitLF5ugVo7OJPKkY_Ov-2_3rfAFc1C6EqqBytHQcwHxy8"
     * }
     */
    // public function singInDriver(Request $request) {
    //     // $rules = ['codigo' => 'required'];
    //     // $this->validatorMake($request->all(), $rules);

    //     // $authValidation = $this->authService->signInDriver($request->codigo, $request->player_id);

    //     // return response([
    //     //     'taxi' => $authValidation['driver'],
    //     //     'access_token' => $authValidation['access_token'],
    //     // ], 200);
    // }

    /**
     * Login administrador
     * 
     * @group Auth
     * @bodyParam. Example: {
     *     "email":"juanita@lahuerfanita.com",
     *     "password":"12345678"
     * }
     * @response scenario=success {
     * {
     *     "administrador": {
     *         "id": 1,
     *         "nombre_completo": "Juanita la huerfanita x2",
     *         "src_foto": null,
     *         "user_id": 2,
     *         "email": "juanita@lahuerfanita.com"
     *     },
     *     "access_token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiODcyZGZlNzg0MmVkNWM3MjJhYTU3YmEwMTc3MTA3MDY3Zjc1MzkzNDllNzE0MGMzY2E0NzEwMDZhZmExMzBmNDJhY2EyZTIzNWI1YWU3ZGQiLCJpYXQiOjE3MDE5ODE4NzEuMjkyNDUxLCJuYmYiOjE3MDE5ODE4NzEuMjkyNDYyLCJleHAiOjE3MTc3OTMwNzEuMjc4NzUyLCJzdWIiOiIyIiwic2NvcGVzIjpbXX0.gy0_ecnmNcaZmTZupLWS_sGmg6LVtNlYgVimCovy1DgCsFT8BeC6K0kzqMyDgMlZrzMRhtzVhezs_qpiGgJZAbVbC1nncfd88aWW6UX19OQyKqfft7XWFD2BE1uvAHyq6hh2hN2TtZdxLkxZIuYDB6LHhloTnK6Vb303Q7SVsnIlIU6B5BWEumjAsq3zE3nDNOBay2_LyE8wzCoZGk8uYV9FVxbW6OuYIPhBpXDhQ0ZUZf0_ZAStAQc8hkyrIEbuoFT94A6HyHRS74SLgFmXHUCxhPEqjJFDJ8QaIyX4ypwqhEiiwZvT46mLPp4-1gsePAxCFTWxsf4EjOA7yZEWzgm4Xrd-OIGXYYdRxhLYcJK3aIy9m-D0T4AO9hfh46fvQOUtH-xKa9Naoi6dod1wChLJ5HjDoaZC_i4yRGpynoFbnBIdO8js4RGuXlyK7NJL_GvDJyL2pz3tCDORi6mBXHSN2qYvYcx_DdXHGNR7vgEBg6OP5tjmYIgmbq7Nn9ShSS9rYDuRzqs3Ox4tE1DrEckI2HzJ00CKVzIe2jy_3Ng0T2KtTh32z7tbJObWvzYHlnwTg0uLsUnsjsuQeI6P8-5cRx0YRCGBkpRyudtXK18wfFp3e5aC1X9BZXbrtlx4OI93ZekPP1zSlrMVTFGErPFvEJIZMeYMLsl8QfvyiQA"
     * }
     */
    public function signInAdmin(Request $request) {
        try {
            $rules = [
                'email' => 'required|email',
                'password' => 'required',
                'recaptchaToken' => 'required',
            ];
            $this->validatorMake($request->all(), $rules);

            $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                'secret' => config('recaptcha.secret_key'),
                'response' => $request->recaptchaToken,
                'remoteip' => $request->ip(),
            ]);
        
            $result = $response->json();
        
            if (!($result['success'] ?? false) || ($result['score'] ?? 0) < 0.5) {
                return response()->json(['error' => 'reCAPTCHA inválido'], 422);
            }

            $authValidation = $this->authService->signInAdmin($request->email, $request->password, $request->recaptchaToken);

            return response([
                'administrador' => $authValidation['admin'],
                'access_token' => $authValidation['access_token']
            ], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], 422);
        }
    }
}
