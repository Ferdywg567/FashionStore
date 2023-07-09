<?php

use App\Http\Controllers\AuthHandlerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\BuyerController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\StaffController;

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
Route::middleware(['admin', 'staff'])->prefix('admin')->group(function () {//admin routes will goes here
    Route::resource('/product', ProductController::class);
    Route::resource('/producttype', ProductTypeController::class);
    Route::resource('/category', CategoryController::class);
    Route::resource('/brand', BrandController::class);
    Route::resource('/staff', StaffController::class)->except(['show', 'create', 'edit']);
    Route::resource('/buyer', BuyerController::class);
    Route::resource('/transaction', TransactionController::class)->except(['edit', 'update', 'create', 'store']);
    
    // Route::post('/staff/{staff}', [StaffController::class, 'update'])->name('staff.update');
    Route::post('/register', [AuthHandlerController::class, 'registerByRole']);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin-dashboard');
    

    
    // Route::get('/dashboard', function () {
    //     return view('admin.dashboard');
    // })->name('admin-dashboard');
});

Route::middleware(['user'])->group(function () {
    Route::get('/', function () {
        return view('user.home');
    });
});


//user route
Route::get('/', [HomePageController::class,'index'])->name('home');
Route::get('/login', function () {
    return view('user.auth.login');
})->name('login');

Route::post('/login', [AuthHandlerController::class, 'loginByRole']);

Route::get('/register', function () {
    return view('user.auth.register');
});
Route::post('/register', [AuthHandlerController::class, 'registerByRole']);
Route::resource('/buyer/productlist', HomePageController::class);
Route::get('/product/{id}', [ProductController::class,'show']);


//admin route
Route::get('/admin/login', function () {
    return view('admin.auth.login');
});

Route::post('/admin/login', [AuthHandlerController::class, 'loginByRole']);

Route::get('/logout', [AuthHandlerController::class, 'signOut']);

