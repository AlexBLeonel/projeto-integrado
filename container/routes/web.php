<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('auth.login');
});

Route::prefix('rooms')->middleware('auth')->group(function() {
    Route::get('list', [RoomController::class, 'index'])->name('rooms');
    Route::get('create', [RoomController::class, 'create'])->name('rooms.create');
    Route::post('store', [RoomController::class, 'store'])->name('rooms.store');
    Route::get('edit', [RoomController::class, 'create'])->name('rooms.edit');
    Route::put('update', [RoomController::class, 'create'])->name('rooms.update');
    Route::delete('destroy', [RoomController::class, 'create'])->name('rooms.destroy');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');