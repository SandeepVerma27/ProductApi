<?php

use App\Http\Controllers\CategoryManagement;
use App\Http\Controllers\ProductAttributeManage;
use App\Http\Controllers\ProductManagement;
use App\Http\Controllers\SubCategoryManagement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

/* PRODUCT CATEGORY MANAGEMENT*/
Route::get('/all-categories', [CategoryManagement::class, 'showAllCategories']);
Route::get('/all', [CategoryManagement::class, 'chekc']);
Route::post('/store-category', [CategoryManagement::class, 'storeCategory']);
Route::get('/category/{id}', [CategoryManagement::class, 'showCategoryById']);
Route::put('/category/{id}', [CategoryManagement::class, 'updateCategory']);
Route::delete('/category/{id}', [CategoryManagement::class, 'destroyCategory']);

/* PRODUCT SUBCATEGORY MANAGEMENT*/
Route::get('/all-subcategories', [SubCategoryManagement::class, 'showAllSubcategories']);
Route::get('/store-subcategory', [SubCategoryManagement::class, 'storeSubcategory']);
Route::get('/subcategory/{id}', [SubCategoryManagement::class, 'showSubcategoryById']);
Route::put('/subcategory/{id}', [SubCategoryManagement::class, 'updateSubcategory']);
Route::delete('/subcategory/{id}', [SubCategoryManagement::class, 'destroySubcategory']);


/* PRODUCT MANAGE */
Route::get('/products', [ProductManagement::class, 'showAllProducts']);
Route::post('/products', [ProductManagement::class, 'storeProduct']);
Route::get('/product/{id}', [ProductManagement::class, 'showProductById']);
Route::put('/product/{id}', [ProductManagement::class, 'updateProduct']);
Route::delete('/product/{id}', [ProductManagement::class, 'destroyProduct']);


/* PROUDUCT ATTRIBUTE LABELS */
Route::get('/all-lables', [ProductAttributeManage::class, 'showAllProductAttributes']);
Route::post('/store-label', [ProductAttributeManage::class, 'storeProductAttribute']);
Route::get('/label/{id}', [ProductAttributeManage::class, 'showProductAttributeById']);
Route::put('/label/{id}', [ProductAttributeManage::class, 'updateProductAttribute']);
Route::delete('/label/{id}', [ProductAttributeManage::class, 'destroyProductAttribute']);

/* PRODUCT ATTRIBUTES VALUES */
Route::get('/all-attribute-values', [ProductAttributeManage::class, 'showAllProductAttributeValues']);
Route::post('/store-attribute-value', [ProductAttributeManage::class, 'storeProductAttributeValue']);
Route::get('/attribute-value/{id}', [ProductAttributeManage::class, 'showProductAttributeValueById']);
Route::put('/attribute-value/{id}', [ProductAttributeManage::class, 'updateProductAttributeValue']);
Route::delete('/attribute-value/{id}', [ProductAttributeManage::class, 'destroyProductAttributeValue']);
