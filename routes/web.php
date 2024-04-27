<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
Route::get('/', function () {
    return view('welcome');
});
Route::get('/prueba', function(){
    return view('Inicio');
});
Route::view('/sesion','sesion');
Route::view('/signup','signup');
Route::view('/signup2','signup2');
Route::view('/conferencias','conferencias');
Route::view('/talleres','talleres');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
