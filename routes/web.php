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

Route::get('/', [\App\Http\Controllers\Home\IndexController::class, 'index'])->name('home');
Route::get('/product/{slug}',[\App\Http\Controllers\Home\ProductController::class,'index'])->name('product.index');
Route::get('/category/{slug}',[\App\Http\Controllers\Home\ProductController::class,'productCategory'])->name('product.category');
Route::get('/products',[\App\Http\Controllers\Home\ProductController::class,'products'])->name('product.all');
Route::get('/about-us',[\App\Http\Controllers\Home\IndexController::class, 'aboutUs'])->name('about.us');
Route::get('/contact-us',[\App\Http\Controllers\Home\IndexController::class, 'contactUs'])->name('contact.us');
Route::get('/catalogs',[\App\Http\Controllers\Home\IndexController::class, 'catalogs'])->name('catalogs');
Route::get('/articles',[\App\Http\Controllers\Home\IndexController::class, 'articles'])->name('articles');
Route::get('/article/{slug}',[\App\Http\Controllers\Home\IndexController::class, 'article'])->name('article.show');
