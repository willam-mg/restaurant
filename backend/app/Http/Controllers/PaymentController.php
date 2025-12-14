<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    /**
     * List
     *
     * Display a listing of the resource.
     *
     * @group Payments
     */
    public function index(Request $request)
    {
        $rules = [
            'page' => 'nullable|integer',
            'perPage' => 'nullable|integer',
            'order_id' => 'nullable|exists:orders,id',
            'method' => 'nullable|string|max:30',
        ];

        $this->validatorMake($request->all(), $rules);

        $query = Payment::query();

        if ($request->filled('order_id')) {
            $query->where('order_id', $request->order_id);
        }

        if ($request->filled('method')) {
            $query->where('method', $request->method);
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
     * @group Payments
     * @authenticated
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $rules = [
                'order_id' => ['required', 'exists:orders,id'],
                'method' => ['required', 'max:30'],
                'amount' => ['required', 'numeric', 'min:0.01'],
            ];

            $this->validatorMake($request->all(), $rules);

            $payment = Payment::create([
                'order_id' => $request->order_id,
                'method' => $request->method,
                'amount' => $request->amount,
            ]);

            DB::commit();

            return response()->json($payment, 201);
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
     * @group Payments
     * @authenticated
     */
    public function show($id)
    {
        return Payment::findOrFail($id);
    }

    /**
     * Update
     *
     * Update the specified resource in storage.
     *
     * @group Payments
     * @authenticated
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $payment = Payment::findOrFail($id);

            $rules = [
                'method' => ['required', 'max:30'],
                'amount' => ['required', 'numeric', 'min:0.01'],
            ];

            $this->validatorMake($request->all(), $rules);

            $payment->update(
                $request->only([
                    'method',
                    'amount',
                ])
            );

            DB::commit();

            return response()->json($payment, 200);
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
     * @group Payments
     * @authenticated
     */
    public function destroy($id)
    {
        try {
            $payment = Payment::findOrFail($id);
            $payment->delete();

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
     * @group Payments
     * @authenticated
     */
    public function restore($id)
    {
        $payment = Payment::withTrashed()->findOrFail($id);
        $payment->restore();

        return response()->json([
            'message' => 'Restaurado'
        ], 200);
    }
}
