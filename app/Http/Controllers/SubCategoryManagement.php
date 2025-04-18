<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubCategoryManagement extends Controller
{
    /**
     * Display a listing of all subcategories.
     *
     * @method GET
     * @return \Illuminate\Http\Response
     */
    public function showAllSubcategories()
    {
        // Logic to show all subcategories
    }

    /**
     * Store a newly created or updated subcategory in storage.
     *
     * @method POST
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */

    public function storeSubcategory(Request $request)
    {
        // Logic to store a new subcategory
    }

    /**
     * Display the specified subcategory by ID.
     *
     * @method GET
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function showSubcategoryById($id)
    {
        // Logic to show a subcategory by ID
    }



    /**
     * destroy the specified product in storage.
     * @method DELETE
     * @param int $id
     * @return \Illuminate\Http\Response
     */

    public function destroySubcategory($id)
    {
        // Logic to delete a subcategory by ID
    }
}
