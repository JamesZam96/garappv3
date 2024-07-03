<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/auths', [AuthController::class, 'index'])->name('auths.index');
// Route::get('/register', [AuthController::class, 'create'])->name('auths.create');
// Route::post('/register', [AuthController::class , 'register'])->name('auths.store');
Route::match(['get', 'post'], '/register', [AuthController::class, 'register'])->name('auths.register');
Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('auths.login');
Route::post('/logout', [AuthController::class, 'logout'])->name('auths.logout')->middleware('auth');

// Registro de clientes
Route::get('/register/customer', [RegisterController::class, 'showRegistrationFormCustomer'])->name('register.customer');
Route::post('/register/customer', [RegisterController::class, 'createCustomer'])->name('register.customer.submit');

// Registro de empresas
Route::get('/register/company', [RegisterController::class, 'showRegistrationFormCompany'])->name('register.company');
Route::post('/register/company', [RegisterController::class, 'createCompany'])->name('register.company.submit');

// Registro de domiciliarios
Route::get('/register/delivery', [RegisterController::class, 'showRegistrationFormDelivery'])->name('register.delivery');
Route::post('/register/delivery', [RegisterController::class, 'createDelivery'])->name('register.delivery.submit');
