<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * List
     *
     * Display a listing of the resource.
     *
     * @group Products
     */
    public function index(Request $request)
    {
        $rules = [
            'page' => 'nullable|integer',
            'perPage' => 'nullable|integer',
            'category_id' => 'nullable|exists:categories,id',
            'active' => 'nullable|boolean',
            'search' => 'nullable|string|max:100',
        ];

        $this->validatorMake($request->all(), $rules);

        $query = Product::query();

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->category_id);
        }

        if ($request->filled('active')) {
            $query->where('active', $request->boolean('active'));
        }

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
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
     * @group Products
     * @authenticated
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $rules = [
                'category_id' => ['required', 'exists:categories,id'],
                'name' => ['required', 'max:100'],
                'price' => ['required', 'numeric', 'min:0'],
                'image' => ['nullable', 'string'],
                'active' => ['nullable', 'boolean'],
            ];

            $this->validatorMake($request->all(), $rules);

            $product = Product::create([
                'category_id' => $request->category_id,
                'name' => $request->name,
                'price' => $request->price,
                'image' => $request->image,
                'active' => $request->active ?? true,
            ]);

            DB::commit();

            return response()->json($product, 201);
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
     * @group Products
     * @authenticated
     */
    public function show($id)
    {
        return Product::findOrFail($id);
    }

    /**
     * Update
     *
     * Update the specified resource in storage.
     *
     * @group Products
     * @authenticated
     */
    public function update(Request $request, $id)
    {
        DB::beginTransaction();
        try {
            $product = Product::findOrFail($id);

            $rules = [
                'category_id' => ['required', 'exists:categories,id'],
                'name' => ['required', 'max:100'],
                'price' => ['required', 'numeric', 'min:0'],
                'image' => ['nullable', 'string'],
                'active' => ['nullable', 'boolean'],
            ];

            $this->validatorMake($request->all(), $rules);

            $product->update(
                $request->only([
                    'category_id',
                    'name',
                    'price',
                    'image',
                    'active',
                ])
            );

            DB::commit();

            return response()->json($product, 200);
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
     * @group Products
     * @authenticated
     */
    public function destroy($id)
    {
        try {
            $product = Product::findOrFail($id);
            $product->delete();

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
     * @group Products
     * @authenticated
     */
    public function restore($id)
    {
        $product = Product::withTrashed()->findOrFail($id);
        $product->restore();

        return response()->json([
            'message' => 'Restaurado'
        ], 200);
    }
}
