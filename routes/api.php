<?php

use App\Api\V1\Controllers\AuthController;
use Illuminate\Http\Request;
use App\Api\V1\Controllers\HeroController;
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

Route::get('/login', [AuthController::class, 'login']);

Route::middleware('check.admin')->get('/register', [AuthController::class, 'register']);

Route::middleware('auth:sanctum')->get('/heroes', [HeroController::class, 'getHeroesFromDB']);

Route::fallback(static function() {
    return response()->json(['error' => 'There\'s no such place']);
});
