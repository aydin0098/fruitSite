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

Route::get('/',[\App\Http\Controllers\Admin\DashboardController::class,'index'])->name('admin.dashboard');
//Slider
Route::resource('/sliders',\App\Http\Controllers\Admin\SliderController::class)->except('show');
//Products
Route::prefix('/products')->group(function(){

    Route::resource('/categories',\App\Http\Controllers\Admin\CategoryController::class);


});
