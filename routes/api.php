<?php

use App\Http\Controllers\Api\CategoriesController;
use App\Http\Controllers\Api\MessageController;
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

//Messages
Route::get('/showMessage', [MessageController::class, 'showMessage']);
Route::post('/messages', [MessageController::class, 'store']);

//Categories
Route::get('/categories', [CategoriesController::class, 'index']);
