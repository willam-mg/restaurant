<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TableController extends Controller
{
    /**
     * List
     *
     * Display a listing of the resource.
     *
     * @group Tables
     */
    public function index(Request $request)
    {
        $rules = [
            'page' => 'nullable|integer',
            'perPage' => 'nullable|integer',
            'status' => 'nullable|in:free,occupied,reserved',
        ];

        $this->validatorMake($request->all(), $rules);

        $query = Table::query();

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $perPage = $request->perPage ?? 10;

        return response()->json(
            $query->paginate($perPage),
            200
        );
    }

    /**
     * Store
     *
     * Store a newly created resource in storage.
     *
     * @group Tables
     * @authenticated
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $rules = [
                'name' => ['required', 'max:50'],
                'status' => ['nullable', 'in:free,occupied,reserved'],
            ];

            $this->validatorMake($request->all(), $rules);

            $table = Table::create([
                'name' => $request->name,
                'status' => $request->status ?? 'free',
            ]);

            DB::commit();

            return response()->json($table, 201);
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
     * @group Tables
     * @authenticated
     */
    public function show($id)
    {
        return Table::findOrFail($id);
    }

    /**
     * Update
     *
     * Update the specified resource in storage.
     *
     * @group Tables
     * @authenticated
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $table = Table::findOrFail($id);

            $rules = [
                'name' => ['required', 'max:50'],
                'status' => ['required', 'in:free,occupied,reserved'],
            ];

            $this->validatorMake($request->all(), $rules);

            $table->update($request->only([
                'name',
                'status',
            ]));

            DB::commit();

            return response()->json($table, 200);
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
     * @group Tables
     * @authenticated
     */
    public function destroy($id)
    {
        try {
            $table = Table::findOrFail($id);
            $table->delete();

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
     * @group Tables
     * @authenticated
     */
    public function restore($id)
    {
        $table = Table::withTrashed()->findOrFail($id);
        $table->restore();

        return response()->json([
            'message' => 'Restaurado'
        ], 200);
    }
}
