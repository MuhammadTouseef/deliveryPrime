<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main.index');
});

Route::get('/products/{city}/{category}', [\App\Http\Controllers\BusinessController::class, 'search']);
Route::get('/products/{city}', [\App\Http\Controllers\BusinessController::class, 'searchCity']);

Route::get('/register', [\App\Http\Controllers\UserController::class, 'customerregiter']);
Route::post('/register', [\App\Http\Controllers\UserController::class, 'customerstore']);


Route::get('/login', [\App\Http\Controllers\UserController::class, 'Login'])->name('login');
Route::post('/login', [\App\Http\Controllers\UserController::class, 'authenticate']);
Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout']);

Route::get('/restaurant/{business}', [\App\Http\Controllers\BusinessController::class, 'singlebusiness']);


Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');




// Admin Routes
Route::group(['middleware' => ['auth','roleVerify:Admin']], function () {
    Route::get('/admin/home', [\App\Http\Controllers\UserController::class, 'adminHome']);
    Route::get('/admin/manageadmins', [\App\Http\Controllers\UserController::class, 'manageAdmins']);
    Route::get('/admin/categories', [\App\Http\Controllers\CategoriesController::class, 'index']);
    Route::get('/admin/addcategory', [\App\Http\Controllers\CategoriesController::class, 'add']);
    Route::post('/admin/categories', [\App\Http\Controllers\CategoriesController::class, 'store']);

});



// Business Routes

Route::group(['middleware' => ['auth','roleVerify:Business']], function () {
    Route::get('/business/home', [\App\Http\Controllers\UserController::class, 'businessHome']);
    Route::get('business/managedishes', [\App\Http\Controllers\UserController::class, 'businessDishes']);
    Route::get('business/dishes', [\App\Http\Controllers\DishesController::class, 'addDish']);
    Route::post('business/dishes', [\App\Http\Controllers\DishesController::class, 'storeDish']);
});

Route::get('business', [\App\Http\Controllers\UserController::class, 'businessRegister']);
Route::post('/business', [\App\Http\Controllers\UserController::class, 'businessStore']);



// Customer Routes


Route::group(['middleware' => ['auth','roleVerify:Customer']], function () {
    Route::get('/customer/home', [\App\Http\Controllers\UserController::class, 'customerHome']);
});
