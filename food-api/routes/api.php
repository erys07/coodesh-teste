<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SystemController;
use App\Http\Controllers\ProductController;

Route::get('/', [SystemController::class, 'status']);

Route::apiResource('products', ProductController::class)->except(['store']);
Route::put('/products/{code}', [ProductController::class, 'update']);
Route::delete('/products/{code}', [ProductController::class, 'destroy']);