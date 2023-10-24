<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/inicio', function () {
    return view('landing')
        ->with([
            'nombre' => 'Samuel',
            'apellido' => 'Mercado'
        ]);
});

Route::get('/contacto', function () {
    $tipo = 'Persona Moral';
    $rfc = 'ASDF123456';
    return view('contacto', compact('tipo', 'rfc'));
});
