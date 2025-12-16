<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Administrator;
use App\Services\AdministratorService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdministratorController extends Controller
{
    public function __construct(private AdministratorService $administratorService) {}

    /**
     * List
     * 
     * Display a listing of the resource.
     * 
     * @group Administrator
     * @response scenario = success {
     *     "data": [
     *         {
     *             "id": 1,
     *             "nombre_completo": "Juanita la huerfanita x2",
     *             "src_foto": null,
     *             "user_id": 2,
     *             "email": "juanita@lahuerfanita.com"
     *         }
     *     ],
     *     "links": {
     *         "first": "http://api.indrive.local/api/v1/administradores?page=1",
     *         "last": "http://api.indrive.local/api/v1/administradores?page=1",
     *         "prev": null,
     *         "next": null
     *     },
     *     "meta": {
     *         "current_page": 1,
     *         "from": 1,
     *         "last_page": 1,
     *         "links": [
     *             {
     *                 "url": null,
     *                 "label": "pagination.previous",
     *                 "active": false
     *             },
     *             {
     *                 "url": "http://api.indrive.local/api/v1/administradores?page=1",
     *                 "label": "1",
     *                 "active": true
     *             },
     *             {
     *                 "url": null,
     *                 "label": "pagination.next",
     *                 "active": false
     *             }
     *         ],
     *         "path": "http://api.indrive.local/api/v1/administradores",
     *         "per_page": 5,
     *         "to": 1,
     *         "total": 1
     *     }
     * }
     */
    public function index(Request $request)
    {
        $rules = [
            'page' => 'nullable|integer',
            'perPage' => 'nullable|integer'
        ];
        $this->validatorMake($request->all(), $rules);

        $data = $this->administratorService->list($request->all(), intval($request->perPage));

        return response()->json(
            $data->response()->getData(true),
            200
        );
    }

    /**
     * Create
     * 
     * Store a newly created resource in storage.
     * @group Administrator
     * @authenticated
     * 
     * @bodyParam nombre_completo string
     * @bodyParam email email
     * @bodyParam celular string required
     * @bodyParam player_id string
     * @bodyParam src_foto string
     * @bodyParam latitude string
     * @bodyParam longitude string
     * @bodyParam. Example: {
     *      "nombre_completo": "Juanita la huerfanita",
     *      "email": "juanita@lahuerfanita.com",
     *      "password": "12345678"
     * }
     * @response 201 {
     *     "id": 1,
     *     "nombre_completo": "Juanita la huerfanita",
     *     "user_id": 2,
     *     "updated_at": "2023-12-07T20:09:57.000000Z",
     *     "created_at": "2023-12-07T20:09:57.000000Z",
     * }
     * @response 422 {
     *     "message": "El campo nombre_completo es obligatorio."
     * }
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $rules = [
                'nombre_completo' => ['required', 'max:50'],
                'email' => ['required', 'max:50', 'email', 'unique:users,deleted_at,NULL'],
                'password' => ['required'],
            ];
            $this->validatorMake($request->all(), $rules);

            $admininistrator = $this->administratorService
                ->create(
                    $request->except('src_foto'),
                    $request->src_foto
                );

            DB::commit();
            return response()->json($admininistrator, 201);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['message' => $th->getMessage()], 422);
        }
    }

    /**
     * Show
     * 
     * Display the specified resource.
     * @group Administrator
     * @authenticated
     * 
     * @urlParam id int required
     * @response 200 {
     *     "id": 1,
     *     "nombre_completo": "Juanita la huerfanita",
     *     "src_foto": null,
     *     "user_id": 2,
     *     "email": "juanita@lahuerfanita.com"
     * }
     * @response 404 {
     *     message": "No query results for model [App\\Models\\Administrator] 22",
     * }
     */
    public function show($id)
    {
        return $this->administratorService->find($id);
    }

    /**
     * Update
     * 
     * Update the specified resource in storage.
     * @group Administrator
     * @authenticated
     * 
     * @urlParam id int required
     * @bodyParam nombre_completo string
     * @bodyParam email email
     * @bodyParam. Example: {
     *     "nombre_completo": "Juanita la huerfanita x2",
     *     "email": "juanita@lahuerfanita.com"
     * }
     * @response 200 {
     *     "id": 1,
     *     "nombre_completo": "Juanita la huerfanita x2",
     *     "src_foto": null,
     *     "user_id": 2,
     *     "created_at": "2023-12-07T20:09:57.000000Z",
     *     "updated_at": "2023-12-07T20:21:04.000000Z",
     *     "deleted_at": null
     * }
     * @response 422 {
     *     "message": "El campo nombre_completo es obligatorio."
     * }
     */
    public function update(Request $request, $id)
    {
        try {
            $administrador = Administrator::findOrFail($id);
            $rules = [
                'nombre_completo' => ['required', 'max:50'],
                'src_foto' => ['nullable'],
                'email' => ['required', 'max:50', 'email', 'unique:users,deleted_at,NULL,email,id,' . $administrador->user->id],
            ];

            $this->validatorMake($request->all(), $rules);

            $administrator = $this->administratorService
                ->update(
                    $id,
                    $request->except('src_foto'),
                    $request->src_foto
                );

            return response()->json($administrator, 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], 422);
        }
    }

    /**
     * Delete
     * 
     * Remove the specified resource from storage.
     * @group Administrator
     * @authenticated
     * 
     * @urlParam id int required
     * @response 200 {
     *     "message": "Eliminado",
     * }
     * @response 404 {
     *     message": "No query results for model [App\\Models\\Administrator] 22",
     * }
     */
    public function destroy($id)
    {
        try {
            $this->administratorService->delete($id);
            return response()->json([
                'message' => 'Eliminado'
            ], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => $th->getMessage()], 422);
        }
    }

    /**
     * Restore
     * 
     * Restore the specified resource from storage.
     * @group Administrator
     * @authenticated
     * 
     * @urlParam id int required
     * @response 200 {
     *     "message": "Restaurado",
     * }
     * @response 404 {
     *     message": "No query results for model [App\\Models\\Administrator] 22",
     * }
     */
    public function restore($id)
    {
        $this->administratorService->restore($id);
        return response()->json([
            'message' => 'Restaurado'
        ], 200);
    }

    /**
     * Change password
     * 
     * Change password the specified resource
     * @group Administrator
     * @authenticated
     * 
     * @urlParam id int required
     * @bodyParam password string
     * @bodyParam. Example: {
     *     "password": "*******"
     * }
     * @response 200 {
     *     "id": 1,
     *     "nombre_completo": "Juanita la huerfanita x2",
     *     "src_foto": null,
     *     "user_id": 2,
     *     "created_at": "2023-12-07T20:09:57.000000Z",
     *     "updated_at": "2023-12-07T20:21:04.000000Z",
     *     "deleted_at": null
     * }
     * @response 422 {
     *     "message": "El campo nombre_completo es obligatorio."
     * }
     */
    public function changePassword(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $rules = [
                'password' => ['required', 'max:50']
            ];

            $this->validatorMake($request->all(), $rules);

            $administrator = $this->administratorService
                ->changePassword(
                    $id,
                    $request->password
                );

            DB::commit();
            return response()->json($administrator, 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json(['message' => $th->getMessage()], 422);
        }
    }

    /**
     * Ban user
     * 
     * Ban the specified resource from storage.
     * @group Administrator
     * @authenticated
     * 
     * @urlParam id int required
     * @response 200 {
     *     "message": "Restaurado",
     * }
     * @response 404 {
     *     message": "No query results for model [App\\Models\\Administrator] 22",
     * }
     */
    public function ban($id)
    {
        $this->administratorService->bloquedHandler($id, true);
        return response()->json([
            'message' => 'Bloqueado'
        ], 200);
    }
   
    /**
     * Unban user
     * 
     * Ban the specified resource from storage.
     * @group Administrator
     * @authenticated
     * 
     * @urlParam id int required
     * @response 200 {
     *     "message": "Restaurado",
     * }
     * @response 404 {
     *     message": "No query results for model [App\\Models\\Administrator] 22",
     * }
     */
    public function unBan($id)
    {
        $this->administratorService->bloquedHandler($id, false);
        return response()->json([
            'message' => 'Desbloqueado'
        ], 200);
    }
}
