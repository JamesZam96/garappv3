<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Inicio_ingreso');
});

Route::get('/admin', function () {
    return view('company.home');
});

require __DIR__ . '/profile.php';
require __DIR__ . '/vehicles.php';
require __DIR__ . '/orders.php';
require __DIR__ . '/deliveries.php';
require __DIR__ . '/customers.php';
require __DIR__ . '/warehouses.php';
require __DIR__ . '/categories.php';
require __DIR__ . '/products.php';
require __DIR__ . '/services.php';
require __DIR__ . '/bills.php';
require __DIR__ . '/auth.php';
require __DIR__ . '/workshop.php';






