<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SubjectController;
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
    return view('welcome');
});

Route::get('/studies/filter',[StudyController::class, 'filter']);//filter se pone ariba del todo
Route::resource('studies',StudyController::class);
Route::resource('subjects',SubjectController::class);
Route::resource('users',UserController::class);
Route::resource('roles',RoleController::class);


Route::resource('studies',StudyController::class)->middleware('auth');
Route::get('roles', function(){
    return "Has accedido a la ruta";
})->middleware('role');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
