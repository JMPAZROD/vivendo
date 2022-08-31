<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\InterestedController;
use App\Http\Controllers\ProjectController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function (){
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::post('/infoUser', [AuthController::class, 'infoUser']);
    Route::get('project', [ProjectController::class, 'index']);
    Route::get('projectList', [ProjectController::class, 'projectList']);
    Route::get('projectCity', [ProjectController::class, 'projectCity']);
    Route::get('projectCategory', [ProjectController::class, 'projectCategory']);
    Route::get('projectDeparment', [ProjectController::class, 'projectDeparment']);
    Route::get('interestedList', [InterestedController::class, 'interestedList']);
    Route::post('interestedStore', [InterestedController::class, 'store']);
});
