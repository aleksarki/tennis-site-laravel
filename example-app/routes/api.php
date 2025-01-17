<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RacketController;
use App\Http\Controllers\Api\CommentController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

// PUT = POST + ?_method=PUT

Route::middleware('auth:api')->get('/rackets', [RacketController::class, 'index']);
Route::middleware('auth:api')->get('/rackets/{id}', [RacketController::class, 'show']);
Route::middleware('auth:api')->post('/rackets', [RacketController::class, 'store']);
Route::middleware('auth:api')->put('/rackets/{id}', [RacketController::class, 'update']);
Route::middleware('auth:api')->delete('/rackets/{id}', [RacketController::class, 'destroy']);

Route::middleware('auth:api')->get('/comments', [CommentController::class, 'index']);
Route::middleware('auth:api')->get('/comments/racket/{id}', [CommentController::class, 'index_for']);
Route::middleware('auth:api')->get('/comments/{id}', [CommentController::class, 'show']);
Route::middleware('auth:api')->post('/comments/{id}', [CommentController::class, 'store']);
Route::middleware('auth:api')->put('/comments/{id}', [CommentController::class, 'update']);
