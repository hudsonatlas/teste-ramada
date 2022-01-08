<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicsController;

Route::resource('/comics', ComicsController::class)->middleware(['auth']);
Route::any('/comics/search', [ComicsController::class, 'search'])->name('comics.search')->middleware(['auth']);

require __DIR__.'/auth.php';