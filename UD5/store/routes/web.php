<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::get('/bands/filter',[BandController::class, 'filter']);
Route::resource('bands', BandController::class);
Route::resource('records',RecordController::class);
Route::resource('users',UserController::class);
Auth::routes();

Route::resource('records',RecordController::class);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');