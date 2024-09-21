<?php

use App\Http\Controllers\LaraJobController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LaraJobController::class,'index']);

Route::get('/larajobs/{larajob}', [LaraJobController::class,'show']);
