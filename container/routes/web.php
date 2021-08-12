<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth'])->group(function () {
    Route::prefix('rooms')->group(function() {
        Route::get('list', [RoomController::class, 'index'])->name('rooms.list');
        Route::get('create', [RoomController::class, 'create'])->name('rooms.create');
        Route::post('store', [RoomController::class, 'store'])->name('rooms.store');
        Route::get('edit/{room_id}', [RoomController::class, 'edit'])->name('rooms.edit');
        Route::put('update', [RoomController::class, 'update'])->name('rooms.update');
        Route::delete('destroy', [RoomController::class, 'destroy'])->name('rooms.destroy');
        Route::get('show/{room_id}', [RoomController::class, 'show'])->name('rooms.show');
    });

    Route::prefix('products')->group(function () {
        Route::get('list', [ProductController::class, 'index'])->name('products.list');
        Route::get('create', [ProductController::class, 'create'])->name('products.create');
        Route::post('store', [ProductController::class, 'store'])->name('products.store');
        Route::get('edit/{product_id}', [ProductController::class, 'edit'])->name('products.edit');
        Route::put('update', [ProductController::class, 'update'])->name('products.update');
        Route::delete('destroy', [ProductController::class, 'destroy'])->name('products.destroy');
        Route::get('show/{product_id}', [ProductController::class, 'show'])->name('products.show');
    });

    Route::prefix('clients')->group(function () {
        Route::get('list', [ClientController::class, 'index'])->name('clients.list');
        Route::get('create', [ClientController::class, 'create'])->name('clients.create');
        Route::post('store', [ClientController::class, 'store'])->name('clients.store');
        Route::get('edit/{client_id}', [ClientController::class, 'edit'])->name('clients.edit');
        Route::put('update', [ClientController::class, 'update'])->name('clients.update');
        Route::delete('destroy', [ClientController::class, 'destroy'])->name('clients.destroy');
        Route::get('show/{client_id}', [ClientController::class, 'show'])->name('client.show');
    });

    Route::prefix('booking')->group(function () {
        Route::get('list', [BookingController::class, 'index'])->name('booking.list');
        Route::get('create', [BookingController::class, 'create'])->name('booking.create');
        Route::post('store', [BookingController::class, 'store'])->name('booking.store');
        Route::get('edit/{booking_id}', [BookingController::class, 'edit'])->name('booking.edit');
        Route::put('update', [BookingController::class, 'update'])->name('booking.update');
        Route::delete('destroy', [BookingController::class, 'destroy'])->name('booking.destroy');
        Route::get('show/{booking_id}', [BookingController::class, 'show'])->name('booking.show');
    });
});



Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');