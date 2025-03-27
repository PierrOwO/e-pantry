<?php
use App\Http\Controllers\Api\CategoriesController;
use App\Http\Controllers\Api\PantriesController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Support\Facades\Route;

Route::apiResource('categories', controller: CategoriesController::class);
Route::apiResource('products', ProductController::class);
Route::apiResource('pantries', controller: PantriesController::class);
