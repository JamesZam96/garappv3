<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/texto', function () {
    return 'texto';
});


Route::post('/register/customer', [RegisterController::class, 'createCustomer'])->name('register.customer.submit');
Route::post('login/customer', [LoginController::class, 'loginCustomer'])->name('login.customer');


Route::middleware(['company.auth', 'role.company'])->group(function(){
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
    Route::post('/categories', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categories/{category}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::get('/categories/{id}', [CategoryController::class, 'show'])->name('categories.show');
    Route::patch('/categories/{category}', [CategoryController::class, 'update'])->name('categories.update');
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');
});


