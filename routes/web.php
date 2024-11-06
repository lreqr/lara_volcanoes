<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VolcanoesController;

Route::get('/', [VolcanoesController::class, 'index']);
Route::get('/store', [VolcanoesController::class, 'store']);

