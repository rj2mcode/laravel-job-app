<?php

use App\Http\Controllers\LaraJobController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

//show all jobs in index page
Route::get('/', [LaraJobController::class,'index']);

Route::get('/larajobs/create', [LaraJobController::class,'create'])->middleware('auth');

//store new job
Route::post('/larajobs', [LaraJobController::class,'store'])->middleware('auth');

//show view edit single job by filter by id
Route::get('/larajobs/{larajob}/edit', [LaraJobController::class,'edit'])->middleware('auth');

//edit single job by filter by id
Route::put('/larajobs/{larajob}', [LaraJobController::class,'update'])->middleware('auth');

//delete single job by filter by id
Route::delete('/larajobs/{larajob}', [LaraJobController::class,'destroy'])->middleware('auth');

//show manage job posts
Route::get('/larajobs/management', [LaraJobController::class,'management'])->middleware('auth');

//show single job by filter by id
Route::get('/larajobs/{larajob}', [LaraJobController::class,'show']);

//create: show create new user view
Route::get('/register', [UserController::class,'create'])->middleware('guest');

//store: store new user
Route::post('/users', [UserController::class,'store'])->middleware('guest');

//login: user
Route::get('/login', [UserController::class,'login'])->name('login')->middleware('guest');

//login: user
Route::post('/users/authenticate', [UserController::class,'authenticate'])->middleware('guest');

//logout: user
Route::post('/logout', [UserController::class,'logout'])->middleware('auth');



