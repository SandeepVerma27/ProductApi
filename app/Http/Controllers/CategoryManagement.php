<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class CategoryManagement extends Controller
{


    /**
     * Display a listing of all categories.
     *
     * @method GET
     * @return \Illuminate\Http\Response
     */
    public function showAllCategories()
    {

        $categories = Category::all();

        if ($categories->isEmpty()) {
            return response()->json([
                'message' => 'No categories found',
            ], 404);
        }

        return response()->json([
            'message' => 'Categories retrive succesfully',
            'data' => $categories
        ], 200);
    }


    /**
     * Store a newly created  category in storage.
     *
     * @method POST
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function storeCategory(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'sort_order' => 'required|numeric|max:11'
        ]);

        if ($validator->fails()) {
            return response()->json(
                [
                    'message' => 'validation error',
                    'error' => $validator->errors(),
                ],
                422
            );
        }
        $product = [
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'sort_order' => $request->sort_order,
            'created_at' => now()
        ];

        if (Category::where('name', $product['name'])->exists()) {
            return response()->json(['message' => 'Category already exists'], 409);
        }

        $varify = Category::insertGetId($product);

        if ($varify) {
            return response()->json(
                [
                    'message' => 'Category created successfully',
                    'data' => $product,
                ],
                201
            );
        } else {
            return response()->json(
                [
                    'message' => 'Category creation failed',
                ],
                500
            );
        }
    }

    /**
     * Display the specified category by ID.
     *
     * @method GET
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function showCategoryById($id)
    {
        $validator = Validator::make(['id' => $id], [
            'id' => 'required|numeric|max:11'
        ]);

        if ($validator->fails()) {
            return response()->json(
                [
                    'message' => 'validation error',
                    'error' => $validator->errors(),
                ],
                422
            );
        }

        $categoryExistense = Category::where('id', $id)->exists();
        if (!$categoryExistense) {
            return response()->json([
                'message' => 'Please check category existense'
            ], 404);
        }

        $category = Category::find($id);
        if (!$category) {
            return response()->json([
                'message' => 'Category not found',
            ], 404);
        }

        return response()->json([
            'message' => 'Category retrive successfully',
            'data' => $category
        ], 200);
    }


    /**
     * Update the specified category in storage.
     *
     * @method PUT
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    // public function updateCategory(Request $request, $id)
    // {
    //     $validator = Validator::make($request->all(), [
    //         'name' => 'required|string|max:255',
    //         'sort_order' => 'required|numeric|max:11'
    //     ]);

    //     if ($validator->fails()) {
    //         return response()->json(
    //             [
    //                 'message' => 'Validation error',
    //                 'error' => $validator->errors()
    //             ]
    //         );
    //     }
    //     $categoryExistense = Category::where('id', $id)->exists();
    //     if (!$categoryExistense) {
    //         return response()->json([
    //             'message' => 'Please check the category existense!'
    //         ], 422);
    //     }

    //     $category = Category::find($id)->first();
    //     if (!$category) {
    //         return response()->json(
    //             [
    //                 'message' => 'Category not found',
    //             ],
    //             404
    //         );
    //     } else {
    //         $category->name = $request->name;
    //         $category->slug = Str::slug($request->slug);
    //         $category->updated_at = now();
    //     }

    //     if ($category->save()) {
    //         return response()->json(
    //             [
    //                 'message' => 'Product Update successfully',
    //                 'data' => $category


    //             ],
    //             200
    //         );
    //     }
    // }



    /**
     * destroy the specified product in storage.
     *
     * @method DELETE
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    // public function destroyCategory($id)
    // {
    //     // Logic to delete a category by ID
    // }
}
