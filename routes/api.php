<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API_OuvrageController;
use App\Http\Controllers\API_TypeController;
use App\Http\Controllers\API_InterventionController;
use App\Http\Controllers\API_IntervenantController;
use App\Http\Controllers\API_SalleController;
use App\Http\Controllers\API_ClimatiseurController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


/**** ROUTES API****/


Route::apiResource('ouvrages',API_OuvrageController::class)->names([
'index'=> 'api.ouvrages.index',
'store'=> 'api.ouvrages.store',
'show'=> 'api.ouvrages.show',
'update'=>'api.ouvrages.update',
'destroy'=> 'api.ouvrages.destroy']);

Route::apiResource('types/{type}/ouvrages', API_TypeController::class)->only(['index']);


Route::apiResource('interventions', API_InterventionController::class);
Route::apiResource('intervenants', API_IntervenantController::class);
Route::apiResource('salles', API_SalleController::class);
Route::apiResource('climatiseurs', API_ClimatiseurController::class);
