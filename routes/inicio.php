<?php
namespace App\Http\Controllers;

use App\Models\CompanyModel;
use App\Models\ProductModel;
use App\Models\ServiceModel;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $companies = CompanyModel::all();
    return view('Inicio.Inicio_ingreso', compact('companies'));
})->name('home.customer');

Route::get('/ProductosyServicios', function(){
    $products = ProductModel::all();
    $services = ServiceModel::all();
    return view('Inicio.ProductoServicioIngreso', compact('products','services'));
});
Route::get('/Talleresyalmacenes', function(){
    $companies = CompanyModel::all();
    return view('Inicio.AlmacenIngreso', compact('companies'));
});

// Route::get('/TallerIngreso', function(){
//     return view('Inicio.TallerIngreso');
// });

