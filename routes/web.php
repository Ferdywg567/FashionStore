<?php

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

//user route
Route::get('/', function () {
    return view('user.layouts.app');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//admin route
Route::get('/admin/login',function (){
   return view('admin.auth.login');
});

Route::get('/admin',function (){
   return view('admin.dashboard');
});

Route::resource('/admin/product', ProductController::class);
Route::resource('/admin/producttype', ProductTypeController::class);
Route::resource('/admin/category', CategoryController::class);
Route::resource('/admin/brand', BrandController::class);
Route::resource('/buyer/productlist', ProductPageController::class);

