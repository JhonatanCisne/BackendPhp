<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\categoryController;
use App\Http\Controllers\Api\ProductController;

Route::apiResource('categories', CategoryController::class);
Route::apiResource('products', ProductController::class);
