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

// <<<<<<< HEAD>>>
Route::get('/project', [App\Http\Controllers\ProjectController::class, 'index'])->name('project');

// =======>>

Route::get('/client',[ClientController::class,'index'])->name('client.index');
// >>>>>>> c70fd6bf283ba456acc0045866763d9cf6da8789
