<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OutletAPIController;

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



Route::get('/outlet', [OutletAPIController::class,'outlet']);
Route::post('/addOutlet/add', [OutletAPIController::class,'addOutlet']);
Route::post('/addOutlet/update/{id}', [OutletAPIController::class,'update']);
Route::post('/addOutlet/delete/{id}', [OutletAPIController::class,'delete']);


