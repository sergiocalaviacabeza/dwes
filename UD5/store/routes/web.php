<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BandController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\BasketController;

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

Route::get('/bands/filter2',[BandController::class, 'filter2']);
Route::get('/records/filter',[RecordController::class, 'filter']);
Route::resource('bands', BandController::class);
Route::resource('records',RecordController::class);
Route::resource('users',UserController::class);
Route::resource('orders',OrderController::class);
Route::resource('baskets',BasketController::class);

Route::resource('bands', BandController::class)->middleware('auth');
Route::resource('records', RecordController::class)->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
