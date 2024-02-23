<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
    return view('welcome');
});

Route::get('/product', [ProductController::class, 'index'])->name('product.index');

// create route
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');

// route for submiting the form
// we use the method post
Route::post('/product', [ProductController::class, 'store'])->name('product.store');

// modify the data
Route::get('/product{product}/edit', [ProductController::class, 'edit'])->name('product.edit');


// update the data
Route::put('/product{product}/update', [ProductController::class, 'update'])->name('product.update');


// delete items
Route::delete('/product{product}/delete', [ProductController::class, 'delete'])->name('product.delete');
