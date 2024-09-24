<?php

use App\Http\Controllers\LaraJobController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//show all jobs in index page
Route::get('/', [LaraJobController::class,'index']);

Route::get('/larajobs/create', [LaraJobController::class,'create']);

//store new job
Route::post('/larajobs', [LaraJobController::class,'store']);

//show view edit single job by filter by id
Route::get('/larajobs/{larajob}/edit', [LaraJobController::class,'edit']);

//edit single job by filter by id
Route::put('/larajobs/{larajob}', [LaraJobController::class,'update']);

//delete single job by filter by id
Route::delete('/larajobs/{larajob}', [LaraJobController::class,'destroy']);

//show single job by filter by id
Route::get('/larajobs/{larajob}', [LaraJobController::class,'show']);

//create: show create new user view
Route::get('/register', [UserController::class,'create']);

//store: store new user
Route::post('/users', [UserController::class,'store']);

//login: user
Route::get('/login', [UserController::class,'login']);

//login: user
Route::post('/users/authenticate', [UserController::class,'authenticate']);

//logout: user
Route::post('/logout', [UserController::class,'logout']);
