<?php

use App\Http\Controllers\OrderController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['api']], function () {
    Route::get('get-orders', [OrderController::class, 'getOrders']);
});
