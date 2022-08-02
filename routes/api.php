<?php

use App\Http\Controllers\Api\V1\Admin\BusApiController;
use App\Http\Controllers\Api\V1\Admin\BusParkApiController;
use App\Http\Controllers\Api\V1\Admin\CountryApiController;
use App\Http\Controllers\Api\V1\Admin\EntryTicketApiController;
use App\Http\Controllers\Api\V1\Admin\FourniseurApiController;
use App\Http\Controllers\Api\V1\Admin\OilApiController;
use App\Http\Controllers\Api\V1\Admin\ProdouitApiController;
use App\Http\Controllers\Api\V1\Admin\ProvenanceApiController;
use App\Http\Controllers\Api\V1\Admin\RouteApiController;
use App\Http\Controllers\Api\V1\Admin\StockWarehouseApiController;
use App\Http\Controllers\Api\V1\Admin\UserAlertApiController;
use App\Http\Controllers\Api\V1\Admin\VidangeControleApiController;

Route::group(['prefix' => 'v1', 'as' => 'api.', 'middleware' => ['auth:sanctum']], function () {
    // Prodouit
    Route::apiResource('prodouits', ProdouitApiController::class);

    // Fourniseur
    Route::apiResource('fourniseurs', FourniseurApiController::class);

    // Bus
    Route::apiResource('buses', BusApiController::class);

    // Oil
    Route::apiResource('oils', OilApiController::class);

    // Provenance
    Route::apiResource('provenances', ProvenanceApiController::class);

    // Routes
    Route::apiResource('routes', RouteApiController::class);

    // Vidange Controle
    Route::apiResource('vidange-controles', VidangeControleApiController::class);

    // Entry Ticket
    Route::apiResource('entry-tickets', EntryTicketApiController::class);

    // Country
    Route::apiResource('countries', CountryApiController::class);

    // Stock Warehouse
    Route::apiResource('stock-warehouses', StockWarehouseApiController::class);

    // Bus Park
    Route::apiResource('bus-parks', BusParkApiController::class);

    // User Alert
    Route::apiResource('user-alerts', UserAlertApiController::class);
});
