<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductManagement extends Controller
{
    /**
     * Display a listing of all products.
     *
     * @method GET
     * @return \Illuminate\Http\Response
     */

    public function showAllProducts()
    {
        // Logic to show all products
    }


    /**
     * Store a newly created product in storage.
     *
     * @method POST
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function storeProduct(Request $request)
    {
        // Logic to store a new product
    }


    /**
     * Display the specified product by ID.
     *
     * @method GET
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function showProductById($id)
    {
        // Logic to show a product by ID
    }

    /**
     * Update the specified product in storage.
     *
     * @method PUT
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function updateProduct(Request $request, $id)
    {
        // Logic to update a product by ID
    }



    /**
     * destroy the specified product in storage.
     * @method DELETE
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function destroyProduct($id)
    {
        // Logic to delete a product by ID
    }
}
