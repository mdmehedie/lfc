<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\SpacialProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', [SpacialProductController::class , "index"])->name("home");
Route::get('/menu', [ProductController::class , "menu"])->name("menu");
