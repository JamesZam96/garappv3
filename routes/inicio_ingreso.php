<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/Inicio_ingreso', function () {
    return view('Inicio.Inicio_ingreso');
});

Route::get('/ProductoServicioIngreso', function(){
    return view('Inicio.ProductoServicioIngreso');
});
Route::get('/AlmacenIngreso', function(){
    return view('Inicio.AlmacenIngreso');
});
Route::get('/TallerIngreso', function(){
    return view('Inicio.TallerIngreso');
});