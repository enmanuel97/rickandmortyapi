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
Route::post('/sign-in', [\App\Http\Controllers\AuthController::class, 'login']);
Route::get('/character', [\App\Http\Controllers\CharacterController::class, 'index']);
Route::get('/character/{character}', [\App\Http\Controllers\CharacterController::class, 'show'])->name('character.show');
Route::get('/episode', [\App\Http\Controllers\EpisodeController::class, 'index']);
Route::get('/episode/{episode}', [\App\Http\Controllers\EpisodeController::class, 'show'])->name('episode.show');
Route::get('/location', [\App\Http\Controllers\LocationController::class, 'index']);
Route::get('/location/{location}', [\App\Http\Controllers\LocationController::class, 'show'])->name('location.show');

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::apiResource('/character', \App\Http\Controllers\CharacterController::class)->except(['index', 'show']);
    Route::apiResource('/episode', \App\Http\Controllers\EpisodeController::class)->except(['index', 'show']);
    Route::apiResource('/location', \App\Http\Controllers\LocationController::class)->except(['index', 'show']);
});
