<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\TagController;


Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth'])->group(function () {
    Route::prefix('rooms')->group(function() {
        Route::get('list', [RoomController::class, 'index'])->name('rooms.list');
        Route::get('create', [RoomController::class, 'create'])->name('rooms.create');
        Route::post('store', [RoomController::class, 'store'])->name('rooms.store');
        Route::get('edit/{room_id}', [RoomController::class, 'edit'])->name('rooms.edit');
        Route::post('update/{id}', [RoomController::class, 'update'])->name('rooms.update');
        Route::delete('destroy/{id}', [RoomController::class, 'destroy'])->name('rooms.destroy');
        Route::get('show/{room_id}', [RoomController::class, 'show'])->name('rooms.show');
    });

    Route::prefix('products')->group(function () {
        Route::get('list', [ProductController::class, 'index'])->name('products.list');
        Route::get('create', [ProductController::class, 'create'])->name('products.create');
        Route::post('store', [ProductController::class, 'store'])->name('products.store');
        Route::get('edit/{product_id}', [ProductController::class, 'edit'])->name('products.edit');
        Route::post('update/{id}', [ProductController::class, 'update'])->name('products.update');
        Route::delete('destroy/{id}', [ProductController::class, 'destroy'])->name('products.destroy');
        Route::get('show/{product_id}', [ProductController::class, 'show'])->name('products.show');
    });

    Route::prefix('clients')->group(function () {
        Route::get('list', [ClientController::class, 'index'])->name('clients.list');
        Route::get('create', [ClientController::class, 'create'])->name('clients.create');
        Route::post('store', [ClientController::class, 'store'])->name('clients.store');
        Route::get('edit/{client_id}', [ClientController::class, 'edit'])->name('clients.edit');
        Route::post('update', [ClientController::class, 'update'])->name('clients.update');
        Route::delete('destroy/{id}', [ClientController::class, 'destroy'])->name('clients.destroy');
        Route::get('show/{client_id}', [ClientController::class, 'show'])->name('clients.show');
    });

    Route::prefix('bookings')->group(function () {
        Route::get('list', [BookingController::class, 'index'])->name('bookings.list');
        Route::get('create', [BookingController::class, 'create'])->name('bookings.create');
        Route::post('store', [BookingController::class, 'store'])->name('bookings.store');
        Route::get('edit/{booking_id}', [BookingController::class, 'edit'])->name('bookings.edit');
        Route::post('update/{id}', [BookingController::class, 'update'])->name('bookings.update');
        Route::delete('destroy/{id}', [BookingController::class, 'destroy'])->name('bookings.destroy');
        Route::get('show/{booking_id}', [BookingController::class, 'show'])->name('bookings.show');
    });

    Route::prefix('orders')->group(function () {
        Route::get('list', [OrderController::class, 'index'])->name('orders.list');
        Route::get('create', [OrderController::class, 'create'])->name('orders.create');
        Route::post('store', [OrderController::class, 'store'])->name('orders.store');
        Route::get('edit/{id}', [OrderController::class, 'edit'])->name('orders.edit');
        Route::post('update/{id}', [OrderController::class, 'update'])->name('orders.update');
        Route::delete('destroy/{id}', [OrderController::class, 'destroy'])->name('orders.destroy');
        Route::get('show/{booking_id}', [OrderController::class, 'show'])->name('orders.show');
    });

    Route::prefix('tags')->group(function () {
        Route::get('list', [TagController::class, 'index'])->name('tags.list');
        Route::get('create', [TagController::class, 'create'])->name('tags.create');
        Route::post('store', [TagController::class, 'store'])->name('tags.store');
        Route::get('edit/{id}', [TagController::class, 'edit'])->name('tags.edit');
        Route::post('update/{id}', [TagController::class, 'update'])->name('tags.update');
        Route::delete('destroy/{id}', [TagController::class, 'destroy'])->name('tags.destroy');
        Route::get('show/{id}', [TagController::class, 'show'])->name('tags.show');
    });


});

