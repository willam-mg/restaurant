<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * List
     *
     * Display a listing of the resource.
     *
     * @group Orders
     */
    public function index(Request $request)
    {
        $rules = [
            'page' => 'nullable|integer',
            'perPage' => 'nullable|integer',
            'table_id' => 'nullable|exists:tables,id',
            'user_id' => 'nullable|exists:users,id',
            'customer_id' => 'nullable|exists:customers,id',
            'status' => 'nullable|string|max:20',
        ];

        $this->validatorMake($request->all(), $rules);

        $query = Order::query();

        if ($request->filled('table_id')) {
            $query->where('table_id', $request->table_id);
        }

        if ($request->filled('user_id')) {
            $query->where('user_id', $request->user_id);
        }

        if ($request->filled('customer_id')) {
            $query->where('customer_id', $request->customer_id);
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
     * Store a newly created resource in storage.
     *
     * @group Orders
     * @authenticated
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $rules = [
                'table_id' => ['required', 'exists:tables,id'],
                'user_id' => ['required', 'exists:users,id'],
                'customer_id' => ['nullable', 'exists:customers,id'],
                'status' => ['required', 'max:20'],
                'total' => ['required', 'numeric', 'min:0'],
            ];

            $this->validatorMake($request->all(), $rules);

            $order = Order::create([
                'table_id' => $request->table_id,
                'user_id' => $request->user_id,
                'customer_id' => $request->customer_id,
                'status' => $request->status,
                'total' => $request->total,
            ]);

            DB::commit();

            return response()->json($order, 201);
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
     * @group Orders
     * @authenticated
     */
    public function show($id)
    {
        return Order::findOrFail($id);
    }

    /**
     * Update
     *
     * Update the specified resource in storage.
     *
     * @group Orders
     * @authenticated
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $order = Order::findOrFail($id);

            $rules = [
                'status' => ['required', 'max:20'],
                'total' => ['required', 'numeric', 'min:0'],
            ];

            $this->validatorMake($request->all(), $rules);

            $order->update(
                $request->only([
                    'status',
                    'total',
                ])
            );

            DB::commit();

            return response()->json($order, 200);
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
     * @group Orders
     * @authenticated
     */
    public function destroy($id)
    {
        try {
            $order = Order::findOrFail($id);
            $order->delete();

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
     * @group Orders
     * @authenticated
     */
    public function restore($id)
    {
        $order = Order::withTrashed()->findOrFail($id);
        $order->restore();

        return response()->json([
            'message' => 'Restaurado'
        ], 200);
    }
}
