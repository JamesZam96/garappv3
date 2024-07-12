<?php
namespace App\Http\Controllers;

use App\Models\ProductModel;
use App\Models\ServiceModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/InicioUsuario', function(){
    if (!Auth::user()->roles->contains('name', 'customer')) {
        return redirect()->route('login.form.customer');
    }
    
    return view('InicioUsuario.InicioUsuario');
})->name('home.customer');

Route::get('/TallerUsuario', function(){
    return view('InicioUsuario.TallerUsuario');
});
Route::get('/AlmacenSession', function(){
    return view('InicioUsuario.AlmacenSession');
});
Route::get('/ProductoServicioSession', function(){
    $products = ProductModel::all();
    $services = ServiceModel::all();
    return view('InicioUsuario.ProductoServicioSession', compact('products','services'));
});

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