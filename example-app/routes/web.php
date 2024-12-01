<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\RacketController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AppController::class, 'index']);

Route::get('/rackets', [RacketController::class, 'index']);
Route::get('/rackets/create', [RacketController::class,'create']);
Route::post('/rackets', [RacketController::class, 'store']);
Route::get('/rackets/{racket}', [RacketController::class, 'show']);
Route::get('/rackets/{racket}/edit', [RacketController::class, 'edit']);
Route::put('/rackets/{racket}', [RacketController::class, 'update']);
Route::delete('/rackets/{racket}', [RacketController::class, 'destroy']);
