<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudyController;

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

Route::get('/', function () {
    return "hola mundo";
});

Route::get('prueba2', [PruebaController::class, 'hola']);
Route::get('prueba2/{name}',[PruebaController::class, 'saludoCompleto']);

Route::resource('studies', StudyController::class);