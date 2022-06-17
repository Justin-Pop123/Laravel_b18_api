<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::get('hello',function ($value='')
// {
// 	return 'Hello Function';
// });
// Item Management

Route::apiresource('brands','BrandController');
Route::apiresource('categories','CategoryController');
Route::apiresource('subcategories','SubcategoryController');
Route::apiresource('items','ItemController');

Route::apiresource('users','UserController');