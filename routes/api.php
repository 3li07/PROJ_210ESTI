<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\L1Controller;
use App\Http\Controllers\L2Controller;
use App\Http\Controllers\L3Controller;
use App\Http\Controllers\M1Controller;
use App\Http\Controllers\M2Controller;
use App\Http\Controllers\CandidatsController;
use App\Http\Controllers\ConcoursController;
use App\Http\Controllers\DecisionController;
use App\Http\Controllers\PreparatoiresController;

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
Route::middleware(['cors'])->group(function (){
    Route::apiResource('preparatoires',PreparatoiresController::class);
    Route::apiResource('candidats',CandidatsController::class);
    Route::apiResource('L1',L1Controller::class);
    Route::apiResource('L2',L2Controller::class);
    Route::apiResource('L3',L3Controller::class);
    Route::apiResource('M1',M1Controller::class);
    Route::apiResource('M2',M2Controller::class);
    Route::put('candidats/concours/present/{id}',[ConcoursController::class,'autorise']);
    Route::put('candidats/concours/abscent/{id}',[ConcoursController::class,'refused']);
    Route::put('candidats/decision/{id}/validate',[DecisionController::class,'autorise']);
    Route::put('candidats/decision/{id}/refused',[DecisionController::class,'refused']);
});