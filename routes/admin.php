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

Route::resource('/catalogs',\App\Http\Controllers\Admin\CatalogController::class)->except('show');
//Products
Route::resource('/products',\App\Http\Controllers\Admin\ProductController::class)->except('show');

Route::prefix('/products')->group(function(){

    Route::resource('/categories',\App\Http\Controllers\Admin\CategoryController::class);
});
Route::prefix('settings')->group(function(){
   Route::get('/',[\App\Http\Controllers\Admin\SettingController::class,'index'])->name('admin.settings');
   Route::post('/update',[\App\Http\Controllers\Admin\SettingController::class,'update'])->name('admin.settings.update');
});
