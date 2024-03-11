<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OutputProductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::controller(CategoryController::class)->prefix('category')->as('categories.')->group(function () {
    Route::get('/category', 'index')->name('index');
    Route::get('/category/create', 'create')->name('create');
    Route::post('/category', 'store')->name('store');
    Route::get('/{category}/edit', 'edit')->name('edit');
    Route::put('/category/{category}', 'update')->name('update');
    Route::delete('/category/{category}', 'destroy')->name('delete');

});

Route::controller(ProductController::class)->prefix('product')->as('products.')->group(function () {
    Route::get('/product', 'index')->name('index');
    Route::get('/product/create', 'create')->name('create');
    Route::post('/product', 'store')->name('store');
    Route::get('/{product}/edit', 'edit')->name('edit');
    Route::put('/product/{product}', 'update')->name('update');
    Route::delete('/product/{product}', 'destroy')->name('delete');
});
Route::controller(OutputProductController::class)->prefix('output')->as('outputs.')->group(function () {
    Route::get('/output', 'index')->name('index');
    Route::get('/output/create', 'create')->name('create');
    Route::post('/output', 'store')->name('store');
    Route::get('/{output}/edit', 'edit')->name('edit');
    Route::put('/output/{output}', 'update')->name('update');
    Route::delete('/output/{output}', 'destroy')->name('delete');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
