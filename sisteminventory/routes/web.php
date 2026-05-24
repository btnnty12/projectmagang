<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\BillboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('areas', AreaController::class);
Route::resource('vendors', VendorController::class);
Route::resource('billboards', BillboardController::class);