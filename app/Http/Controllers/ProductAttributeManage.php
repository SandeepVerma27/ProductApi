<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductAttributeManage extends Controller
{
    /**
     * Display a listing of all product attributes.
     *
     * @method GET
     * @return \Illuminate\Http\Response
     */
    public function showAllProductAttributes()
    {
        // Logic to show all product attributes
    }
    

    /**
     * Store a newly created product attribute in storage.
     *
     * @method POST
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function storeProductAttribute(Request $request)
    {
        // Logic to store a new product attribute
    }

    /**
     * Display the specified product attribute by ID.
     *
     * @method GET
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function showProductAttributeById($id)
    {
        // Logic to show a product attribute by ID
    }

    /**
     * Update the specified product attribute in storage.
     *
     * @method PUT
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function updateProductAttribute(Request $request, $id)
    {
        // Logic to update a product attribute by ID
    }

    /**
     * Remove the specified product attribute from storage.
     *
     * @method DELETE
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroyProductAttribute($id)
    {
        // Logic to delete a product attribute by ID
    }
    /**
     * Display a listing of all product attribute values.
     *
     * @method GET
     * @return \Illuminate\Http\Response
     */
    public function showAllProductAttributeValues()
    {
        // Logic to show all product attribute values
    }
    /**
     * Store a newly created product attribute value in storage.
     *
     * @method POST
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function storeProductAttributeValue(Request $request)
    {
        // Logic to store a new product attribute value
    }
    /**
     * Display the specified product attribute value by ID.
     *
     * @method GET
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function showProductAttributeValueById($id)
    {
        // Logic to show a product attribute value by ID
    }
    /**
     * Update the specified product attribute value in storage.
     *
     * @method PUT
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function updateProductAttributeValue(Request $request, $id)
    {
        // Logic to update a product attribute value by ID
    }
    /**
     * Remove the specified product attribute value from storage.
     *
     * @method DELETE
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroyProductAttributeValue($id)
    {
        // Logic to delete a product attribute value by ID
    }
}
