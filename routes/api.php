<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\DrinkController;
use App\Http\Controllers\api\PackageController;
use App\Http\Controllers\api\TypeController;

// Italok
Route::get( "/drinks", [ DrinkController::class, "getDrinks" ]);
Route::get( "/drinks/{drink}", [ DrinkController::class, "getDrink" ]);
Route::post( "/drinks", [ DrinkController::class, "createDrink" ]);

// Kiszerelések
Route::get( "/packages", [ PackageController::class, "getPackages" ]);

// Típusok
Route::get( "/types", [ TypeController::class, "getTypes" ]);