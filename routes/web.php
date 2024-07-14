<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Route::get('/admin', function () {
    if (!Auth::user()->roles->contains('name', 'company')) {
        return redirect()->route('login.form.company');
    }
    return view('company.home');
})->name('home.company')->middleware('company.auth');


require __DIR__ . '/vehicles.php';
require __DIR__ . '/orders.php';
require __DIR__ . '/categories.php';
require __DIR__ . '/products.php';
require __DIR__ . '/services.php';
require __DIR__ . '/auth.php';
require __DIR__ . '/inicio.php';
require __DIR__ . '/inicio_usuario.php';

Route::middleware(['customer.auth', 'role.customer'])->group(function(){
    Route::post('/confirmorder',[OrderController::class,'confirmOrder'])->name('confirm.order');
});






