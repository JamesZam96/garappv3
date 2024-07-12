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
Route::get('/GestionPago', function(){
    return view('InicioUsuario.GestionPago');
});
Route::get('/CompraServicio', function(){
    return view('InicioUsuario.CompraServicio');
});

Route::get('/PedidoConfirmado', function(){
    return view('InicioUsuario.PedidoConfirmado');
});