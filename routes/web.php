<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/client',[ClientController::class,'create'])->name('client.index');
Route::post('/client/insert',[ClientController::class,'store'])->name('client.store');
Route::get('/client/view',[ClientController::class,'index'])->name('client.view');
Route::get('/client/show/{id}',[ClientController::class,'show']);
Route::get('/client/edit/{id}',[ClientController::class,'edit']);
