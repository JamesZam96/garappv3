<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/InicioUsuario', function(){
    return view('InicioUsuario.InicioUsuario');
});
Route::get('/TallerUsuario', function(){
    return view('InicioUsuario.TallerUsuario');
});
Route::get('/AlmacenSession', function(){
    return view('InicioUsuario.AlmacenSession');
});
Route::get('/ProductoServicioSession', function(){
    return view('InicioUsuario.ProductoServicioSession');
});