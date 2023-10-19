<?php

use App\Http\Controllers\NormaController;
use App\Http\Controllers\RequerimientoController;
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
Route::get('prueba', function() {
    return view('prueba');
});

// Route::middleware('auth')->group(function() {
    Route::resource('norma', NormaController::class);//->middleware('auth');
    Route::resource('req', RequerimientoController::class);
// });

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
