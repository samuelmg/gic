<?php

use Illuminate\Http\Request;
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
})->name('inicio');

Route::get('/contacto/{tipo_persona?}', function (string $tipo_persona = null) {
    if (!is_null($tipo_persona)) {
        $tipo_persona = ucwords(str_replace('-', ' ', $tipo_persona));
    }
    return view('contacto', compact('tipo_persona'));
})->name('contacto');

Route::post('/contacto', function (Request $request) {
    // Recibir datos
    $correo = $request->correo;

    // Validación de datos
    // Validación de que $correo es un correo

    // Inserción a DB
    // Insert into tabla (correo) value ('$correo')

    // Redireccionamiento
    return redirect()->route('inicio');
})->name('contacto.post');
