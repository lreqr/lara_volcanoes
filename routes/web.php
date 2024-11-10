<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VolcanoesController;

Route::get('/', [VolcanoesController::class, 'index']);
Route::get('/store', [VolcanoesController::class, 'store']);
Route::get('/volcanoes/{volcano}', [VolcanoesController::class, 'show'])->name('volcanoes.show');

