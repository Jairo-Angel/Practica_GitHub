<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



/*
Route::get('/', function () {
    return view('formulario');
});

Route::get('/tabla', function () {
    return view('tabla');
});
*/

Route::get('/', [ControladorVistas::class,'showfor'])->name('apfor');

Route::get('/tabla', [ControladorVistas::class,'showtab'])->name('aptab');

Route::post('GuardarRegistro', [ControladorVistas::class,'procesarllenado'])->name('SaveMem');