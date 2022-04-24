<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;

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
    return view ("welcome");
});

Route::get('prueba2', [PruebaController::class, 'hola']);
Route::get('prueba2/{name}',[PruebaController::class, 'saludoCompleto']);
Route::get('/studies/filter', [StudyController::class, 'filter']);
Route::resource('studies', StudyController::class);
Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);

Route::resource('studies', StudyController::class)->middleware('auth');
Route::get('prueba',function(){
    return "has accedido correctamente a esta ruta";
})->middleware('role');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
