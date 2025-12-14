<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CashRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CashRegisterController extends Controller
{
    /**
     * List
     *
     * Display a listing of the resource.
     *
     * @group Cash Registers
     */
    public function index(Request $request)
    {
        $rules = [
            'page' => 'nullable|integer',
            'perPage' => 'nullable|integer',
            'user_id' => 'nullable|exists:users,id',
            'status' => 'nullable|string|max:20',
        ];

        $this->validatorMake($request->all(), $rules);

        $query = CashRegister::query();

        if ($request->filled('user_id')) {
            $query->where('user_id', $request->user_id);
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $perPage = $request->perPage ?? 10;

        return response()->json(
            $query->orderByDesc('id')->paginate($perPage),
            200
        );
    }

    /**
     * Store
     *
     * Open cash register
     *
     * @group Cash Registers
     * @authenticated
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $rules = [
                'user_id' => ['required', 'exists:users,id'],
                'opening_amount' => ['required', 'numeric', 'min:0'],
                'status' => ['required', 'max:20'],
            ];

            $this->validatorMake($request->all(), $rules);

            // Validar que el usuario no tenga una caja abierta
            $existsOpen = CashRegister::where('user_id', $request->user_id)
                ->where('status', 'open')
                ->exists();

            if ($existsOpen) {
                throw new \Exception('El usuario ya tiene una caja abierta');
            }

            $cashRegister = CashRegister::create([
                'user_id' => $request->user_id,
                'opening_amount' => $request->opening_amount,
                'status' => $request->status,
            ]);

            DB::commit();

            return response()->json($cashRegister, 201);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                'message' => $th->getMessage()
            ], 422);
        }
    }

    /**
     * Show
     *
     * Display the specified resource.
     *
     * @group Cash Registers
     * @authenticated
     */
    public function show($id)
    {
        return CashRegister::findOrFail($id);
    }

    /**
     * Update
     *
     * Update the specified resource.
     *
     * @group Cash Registers
     * @authenticated
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $cashRegister = CashRegister::findOrFail($id);

            $rules = [
                'closing_amount' => ['required', 'numeric', 'min:0'],
                'status' => ['required', 'max:20'],
            ];

            $this->validatorMake($request->all(), $rules);

            $cashRegister->update([
                'closing_amount' => $request->closing_amount,
                'status' => $request->status,
            ]);

            DB::commit();

            return response()->json($cashRegister, 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            return response()->json([
                'message' => $th->getMessage()
            ], 422);
        }
    }

    /**
     * Delete
     *
     * Remove the specified resource.
     *
     * @group Cash Registers
     * @authenticated
     */
    public function destroy($id)
    {
        try {
            $cashRegister = CashRegister::findOrFail($id);
            $cashRegister->delete();

            return response()->json([
                'message' => 'Eliminado'
            ], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => $th->getMessage()
            ], 422);
        }
    }

    /**
     * Restore
     *
     * Restore the specified resource.
     *
     * @group Cash Registers
     * @authenticated
     */
    public function restore($id)
    {
        $cashRegister = CashRegister::withTrashed()->findOrFail($id);
        $cashRegister->restore();

        return response()->json([
            'message' => 'Restaurado'
        ], 200);
    }
}
