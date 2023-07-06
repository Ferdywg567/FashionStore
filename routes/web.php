<?php

use App\Http\Controllers\AuthHandlerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductPageController;


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

//middleware group
Route::middleware(['admin', 'staff'])->group(function () {//admin routes will goes here
    Route::resource('/admin/product', ProductController::class);
    Route::resource('/admin/producttype', ProductTypeController::class);
    Route::resource('/admin/category', CategoryController::class);
    Route::resource('/admin/brand', BrandController::class);
    Route::post('/admin/register', [AuthHandlerController::class, 'registerByRole']);
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin-dashboard');
});

Route::middleware(['user'])->group(function () {
    Route::get('/', function () {
        return view('user.home');
    });
});


//user route
Route::get('/', function () {
    return view('user.home');
})->name('home');
Route::get('/login', function () {
    return view('user.auth.login');
})->name('login');

Route::post('/login', [AuthHandlerController::class, 'loginByRole']);

Route::get('/register', function () {
    return view('user.auth.register');
});
Route::post('/register', [AuthHandlerController::class, 'registerByRole']);
Route::resource('/buyer/productlist', ProductPageController::class);


//admin route
Route::get('/admin/login', function () {
    return view('admin.auth.login');
});

Route::post('/admin/login', [AuthHandlerController::class, 'loginByRole']);

Route::get('/logout', [AuthHandlerController::class, 'signOut']);

