<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginApiController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ServiceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Prueba
Route::get('/student', function () {
    return 'students';
})->middleware('auth:sanctum');

// Registro company y customer
Route::post('/register/customer', [RegisterController::class, 'createCustomer']);
Route::post('/register/company', [RegisterController::class, 'createCompany']);

// Login company y customer
Route::post('/login/customer', [LoginApiController::class, 'loginCustomer']);
Route::post('/login/company', [LoginApiController::class, 'loginCompany']);


Route::middleware(['company.auth', 'role.company','auth:sanctum'])->group(function(){
    //Logout company
    Route::post('/logout/company', [LoginApiController::class, 'logoutCompany']);

    //Rutas categories
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index.api');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store.api');
    Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit.api');
    Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show.api');
    Route::patch('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update.api');
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy.api');

    //Rutas products
    Route::get('/products', [ProductController::class, 'index'])->name('products.index.api');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store.api');
    Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show.api');
    Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->name('products.edit.api');
    Route::patch('/products/{product}', [ProductController::class, 'update'])->name('products.update.api');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy.api');
    
    //Rutas services
    Route::get('/services', [ServiceController::class, 'index'])->name('services.index.api');
    Route::post('/services', [ServiceController::class, 'store'])->name('services.store.api');
    Route::get('/services/{id}', [ServiceController::class, 'show'])->name('services.show.api');
    Route::get('/services/{service}/edit', [ServiceController::class, 'edit'])->name('services.edit.api');
    Route::patch('/services/{service}', [ServiceController::class, 'update'])->name('services.update.api');
    Route::delete('/services/{id}', [ServiceController::class, 'destroy'])->name('services.destroy.api');
});


