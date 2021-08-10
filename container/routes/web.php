<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('auth.login');
});

Route::prefix('rooms')->middleware('auth')->group(function() {
    Route::get('list', [RoomController::class, 'index'])->name('rooms.list');
    Route::get('create', [RoomController::class, 'create'])->name('rooms.create');
    Route::post('store', [RoomController::class, 'store'])->name('rooms.store');
    Route::get('edit', [RoomController::class, 'create'])->name('rooms.edit');
    Route::put('update', [RoomController::class, 'create'])->name('rooms.update');
    Route::delete('destroy', [RoomController::class, 'create'])->name('rooms.destroy');
});

Route::prefix('products')->middleware('auth')->group(function () {
    Route::get('list', [ProductController::class, 'index'])->name('products.list');
    Route::get('create', [ProductController::class, 'create'])->name('products.create');
    Route::post('store', [ProductController::class, 'store'])->name('products.store');
    Route::get('edit', [ProductController::class, 'create'])->name('products.edit');
    Route::put('update', [ProductController::class, 'create'])->name('products.update');
    Route::delete('destroy', [ProductController::class, 'create'])->name('products.destroy');
});

Route::prefix('clientes')->middleware('auth')->group(function () {
    Route::get('list', [ClienteController::class, 'index'])->name('clientes.list');
    Route::get('create', [ClienteController::class, 'create'])->name('clientes.create');
    Route::post('store', [ClienteController::class, 'store'])->name('clientes.store');
    Route::get('edit', [ClienteController::class, 'create'])->name('clientes.edit');
    Route::put('update', [ClienteController::class, 'create'])->name('clientes.update');
    Route::delete('destroy', [ClienteController::class, 'create'])->name('clientes.destroy');
});

Route::prefix('booking')->middleware('auth')->group(function () {
    Route::get('list', [BookingController::class, 'index'])->name('booking.list');
    Route::get('create', [BookingController::class, 'create'])->name('booking.create');
    Route::post('store', [BookingController::class, 'store'])->name('booking.store');
    Route::get('edit', [BookingController::class, 'create'])->name('booking.edit');
    Route::put('update', [BookingController::class, 'create'])->name('booking.update');
    Route::delete('destroy', [BookingController::class, 'create'])->name('booking.destroy');
});

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');