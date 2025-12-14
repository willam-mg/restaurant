<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * List
     *
     * Display a listing of the resource.
     *
     * @group Customers
     */
    public function index(Request $request)
    {
        $rules = [
            'page' => 'nullable|integer',
            'perPage' => 'nullable|integer',
            'type_document' => 'nullable|string|max:20',
            'document_number' => 'nullable|string|max:30',
        ];

        $this->validatorMake($request->all(), $rules);

        $query = Customer::query();

        if ($request->filled('type_document')) {
            $query->where('type_document', $request->type_document);
        }

        if ($request->filled('document_number')) {
            $query->where('document_number', 'like', '%' . $request->document_number . '%');
        }

        $perPage = $request->perPage ?? 10;

        return response()->json(
            $query->orderBy('name')->paginate($perPage),
            200
        );
    }

    /**
     * Store
     *
     * Store a newly created resource in storage.
     *
     * @group Customers
     * @authenticated
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $rules = [
                'name' => ['required', 'max:100'],
                'type_document' => ['required', 'max:20'],
                'document_number' => ['required', 'max:30'],
                'phone' => ['nullable', 'max:20'],
            ];

            $this->validatorMake($request->all(), $rules);

            $customer = Customer::create([
                'name' => $request->name,
                'type_document' => $request->type_document,
                'document_number' => $request->document_number,
                'phone' => $request->phone,
            ]);

            DB::commit();

            return response()->json($customer, 201);
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
     * @group Customers
     * @authenticated
     */
    public function show($id)
    {
        return Customer::findOrFail($id);
    }

    /**
     * Update
     *
     * Update the specified resource in storage.
     *
     * @group Customers
     * @authenticated
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $customer = Customer::findOrFail($id);

            $rules = [
                'name' => ['required', 'max:100'],
                'type_document' => ['required', 'max:20'],
                'document_number' => ['required', 'max:30'],
                'phone' => ['nullable', 'max:20'],
            ];

            $this->validatorMake($request->all(), $rules);

            $customer->update(
                $request->only([
                    'name',
                    'type_document',
                    'document_number',
                    'phone',
                ])
            );

            DB::commit();

            return response()->json($customer, 200);
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
     * @group Customers
     * @authenticated
     */
    public function destroy($id)
    {
        try {
            $customer = Customer::findOrFail($id);
            $customer->delete();

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
     * @group Customers
     * @authenticated
     */
    public function restore($id)
    {
        $customer = Customer::withTrashed()->findOrFail($id);
        $customer->restore();

        return response()->json([
            'message' => 'Restaurado'
        ], 200);
    }
}
