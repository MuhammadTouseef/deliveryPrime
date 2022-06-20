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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/business/categories', [\App\Http\Controllers\CategoriesController::class, 'getall']);

// Admin Routes
Route::group(['middleware' => ['auth','roleVerify:Admin']], function () {
    Route::delete('/admin/admindelete/{users}', [\App\Http\Controllers\UserController::class, 'adminDelete']);

});


// Business Routes

Route::group(['middleware' => ['auth','roleVerify:Business']], function () {

    Route::delete('business/dishes/{dish}', [\App\Http\Controllers\DishesController::class, 'deleteDish']);

});
