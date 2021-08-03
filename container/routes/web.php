<?php

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
    return view('auth.login');
});


Route::prefix('rooms')->middleware('auth')->group(function(){
    Route::get('list', [App\Http\Controllers\RoomController::class, 'index'])->name('rooms');
    Route::get('create', [App\Http\Controllers\RoomController::class, 'create'])->name('rooms.create');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
