<?php
use App\Http\Controllers\Api\CategoriesController;
use App\Http\Controllers\Api\ProductController;
use Illuminate\Support\Facades\Route;

Route::apiResource('categories', CategoriesController::class);
Route::apiResource('products', ProductController::class);
