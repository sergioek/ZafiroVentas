<?php

use App\Http\Controllers\BoxController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CuestomerController;
use App\Http\Controllers\DenominationController;
use App\Http\Controllers\MarkController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SaleDetailsController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Categories;
use App\Http\Livewire\ShowCategory;
use App\Models\Product;

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


Route::view('/', 'auth.login');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::middleware(['auth:sanctum', 'verified'])->get('/user-profile', function () {
    return view('profile.profile');
})->name('user.profile');

Route::resource('categories', CategoryController::class)->middleware(['auth:sanctum', 'verified']);

Route::resource('marks', MarkController::class)->middleware(['auth:sanctum', 'verified']);

Route::resource('cuestomers', CuestomerController::class)->middleware(['auth:sanctum', 'verified']);


Route::resource('products', ProductController::class)->middleware(['auth:sanctum', 'verified']);

Route::get('/alert/products',[ProductController::class,'alert'])->name('products.alert')->middleware(['auth:sanctum', 'verified']);

Route::resource('denominations', DenominationController::class)->middleware(['auth:sanctum', 'verified']);

Route::resource('carts', CartController::class)->middleware(['auth:sanctum', 'verified','box']);

Route::resource('sales', SaleController::class)->middleware(['auth:sanctum', 'verified']);

Route::get('sale', [SaleController::class,'cart'])->middleware(['auth:sanctum', 'verified','sale_continue'])->name('sales.cart');


Route::post('sale/{sale}', [SaleController::class,'cancel'])->middleware(['auth:sanctum', 'verified'])->name('sales.cancel');


Route::get('salescuestomer', [SaleController::class,'cuestomer'])->middleware(['auth:sanctum', 'verified'])->name('sales.cuestomer');


Route::resource('detailsale', SaleDetailsController::class)->middleware(['auth:sanctum', 'verified']);


Route::resource('boxes', BoxController::class)->middleware(['auth:sanctum', 'verified']);

Route::resource('reports', ReportController::class)->middleware(['auth:sanctum', 'verified']);







