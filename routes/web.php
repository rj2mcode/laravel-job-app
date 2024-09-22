<?php

use App\Http\Controllers\LaraJobController;
use Illuminate\Support\Facades\Route;

//show all jobs in index page
Route::get('/', [LaraJobController::class,'index']);

//show create job view
Route::get('/larajobs/create', [LaraJobController::class,'create']);

//store new job
Route::post('/larajobs', [LaraJobController::class,'store']);

//show view edit single job by filter by id
Route::get('/larajobs/{larajob}/edit', [LaraJobController::class,'edit']);

//edit single job by filter by id
Route::put('/larajobs/{larajob}', [LaraJobController::class,'update']);

//show single job by filter by id
Route::get('/larajobs/{larajob}', [LaraJobController::class,'show']);
