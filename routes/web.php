<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookController;

// Admin CRUD
Route::prefix('admin')->group(function () {
    Route::resource('books', BookController::class);
});

// Public View
Route::get('/buku', [BookController::class, 'publicIndex'])->name('buku.index');

