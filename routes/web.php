<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::controller(ProductController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('create/', 'create')->name('add');
    Route::post('store/', 'store')->name('store');
    Route::get('edit/{product}', 'edit')->name('edit');
    Route::post('update/{product}', 'update')->name('update');
    Route::get('delete/{product}', 'destroy')->name('delete');
});
