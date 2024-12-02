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

/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');*/

require __DIR__.'/auth.php';

Route::get('/', [AppController::class, 'index']);
Route::get('/users', [AppController::class,'index_users'])->middleware('auth');

Route::get('/rackets', [RacketController::class, 'index'])->middleware('auth');
Route::get('/rackets/user/{user:name}', [RacketController::class, 'index_user'])->middleware('auth');
Route::get('/rackets/create', [RacketController::class,'create'])->middleware('auth');
Route::post('/rackets', [RacketController::class, 'store'])->middleware('auth');
Route::get('/rackets/{racket}', [RacketController::class, 'show'])->middleware('auth');
Route::get('/rackets/{racket}/edit', [RacketController::class, 'edit'])->middleware('auth');
Route::put('/rackets/{racket}', [RacketController::class, 'update'])->middleware('auth');
Route::delete('/rackets/{racket}', [RacketController::class, 'destroy'])->middleware('auth');
Route::put('/rackets/{racket}/restore', [RacketController::class, 'restore'])->middleware('auth');
Route::delete('/rackets/{racket}/force', [RacketController::class, 'force_delete'])->middleware('auth');
