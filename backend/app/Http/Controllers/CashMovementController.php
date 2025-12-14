<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CashMovement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CashMovementController extends Controller
{
    /**
     * List
     *
     * Display a listing of the resource.
     *
     * @group Cash Movements
     */
    public function index(Request $request)
    {
        $rules = [
            'page' => 'nullable|integer',
            'perPage' => 'nullable|integer',
            'cash_register_id' => 'nullable|integer|exists:cash_registers,id',
            'type' => 'nullable|in:income,expense',
        ];

        $this->validatorMake($request->all(), $rules);

        $query = CashMovement::query();

        if ($request->filled('cash_register_id')) {
            $query->where('cash_register_id', $request->cash_register_id);
        }

        if ($request->filled('type')) {
            $query->where('type', $request->type);
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
     * Store a newly created resource in storage.
     *
     * @group Cash Movements
     * @authenticated
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $rules = [
                'cash_register_id' => ['required', 'exists:cash_registers,id'],
                'type' => ['required', 'in:income,expense'],
                'description' => ['nullable', 'max:255'],
                'amount' => ['required', 'numeric', 'min:0.01'],
            ];

            $this->validatorMake($request->all(), $rules);

            $movement = CashMovement::create([
                'cash_register_id' => $request->cash_register_id,
                'type' => $request->type,
                'description' => $request->description,
                'amount' => $request->amount,
            ]);

            DB::commit();

            return response()->json($movement, 201);
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
     * @group Cash Movements
     * @authenticated
     */
    public function show($id)
    {
        return CashMovement::findOrFail($id);
    }

    /**
     * Update
     *
     * Update the specified resource in storage.
     *
     * @group Cash Movements
     * @authenticated
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $movement = CashMovement::findOrFail($id);

            $rules = [
                'type' => ['required', 'in:income,expense'],
                'description' => ['nullable', 'max:255'],
                'amount' => ['required', 'numeric', 'min:0.01'],
            ];

            $this->validatorMake($request->all(), $rules);

            $movement->update(
                $request->only([
                    'type',
                    'description',
                    'amount',
                ])
            );

            DB::commit();

            return response()->json($movement, 200);
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
     * Remove the specified resource from storage.
     *
     * @group Cash Movements
     * @authenticated
     */
    public function destroy($id)
    {
        try {
            $movement = CashMovement::findOrFail($id);
            $movement->delete();

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
     * @group Cash Movements
     * @authenticated
     */
    public function restore($id)
    {
        $movement = CashMovement::withTrashed()->findOrFail($id);
        $movement->restore();

        return response()->json([
            'message' => 'Restaurado'
        ], 200);
    }
}
