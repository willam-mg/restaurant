<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * List
     *
     * Display a listing of the resource.
     *
     * @group Categories
     */
    public function index(Request $request)
    {
        $rules = [
            'page' => 'nullable|integer',
            'perPage' => 'nullable|integer',
        ];

        $this->validatorMake($request->all(), $rules);

        $perPage = $request->perPage ?? 10;

        return response()->json(
            Category::paginate($perPage),
            200
        );
    }

    /**
     * Store
     *
     * Store a newly created resource in storage.
     *
     * @group Categories
     * @authenticated
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $rules = [
                'name' => ['required', 'max:50', 'unique:categories,name,deleted_at,NULL'],
            ];

            $this->validatorMake($request->all(), $rules);

            $category = Category::create([
                'name' => $request->name,
            ]);

            DB::commit();

            return response()->json($category, 201);
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
     * @group Categories
     * @authenticated
     */
    public function show($id)
    {
        return Category::findOrFail($id);
    }

    /**
     * Update
     *
     * Update the specified resource in storage.
     *
     * @group Categories
     * @authenticated
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $category = Category::findOrFail($id);

            $rules = [
                'name' => [
                    'required',
                    'max:50',
                    'unique:categories,name,' . $category->id . ',id,deleted_at,NULL'
                ],
            ];

            $this->validatorMake($request->all(), $rules);

            $category->update([
                'name' => $request->name,
            ]);

            DB::commit();

            return response()->json($category, 200);
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
     * @group Categories
     * @authenticated
     */
    public function destroy($id)
    {
        try {
            $category = Category::findOrFail($id);
            $category->delete();

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
     * @group Categories
     * @authenticated
     */
    public function restore($id)
    {
        $category = Category::withTrashed()->findOrFail($id);
        $category->restore();

        return response()->json([
            'message' => 'Restaurado'
        ], 200);
    }
}
