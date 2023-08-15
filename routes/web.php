<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/')->group(base_path('/routes/resources/general.php'));
Route::prefix('/products')->group(base_path('/routes/resources/products.php'));
Route::prefix('/posts')->group(base_path('/routes/resources/posts.php'));
