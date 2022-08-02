<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::get('/character', [\App\Http\Controllers\CharacterController::class, 'index']);
Route::get('/character/{character}', [\App\Http\Controllers\CharacterController::class, 'show']);
Route::get('/episode', [\App\Http\Controllers\EpisodeController::class, 'index']);
Route::get('/episode/{episode}', [\App\Http\Controllers\EpisodeController::class, 'show']);
Route::get('/location', [\App\Http\Controllers\LocationController::class, 'index']);
Route::get('/location/{location}', [\App\Http\Controllers\LocationController::class, 'show']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::apiResource('/character', 'CharacterController')->except(['index', 'show']);
    Route::apiResource('/episode', 'EpisodeController')->except(['index', 'show']);
    Route::apiResource('/location', 'LocationController')->except(['index', 'show']);
});
