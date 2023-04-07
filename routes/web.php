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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/index', \App\Http\Livewire\Admin\Index\Index::class)->name('index');

    Route::prefix('users')->name('users.')->group(function () {
        Route::get('/index', \App\Http\Livewire\Admin\User\Index::class)->name('index');
    });


    Route::prefix('products')->name('products.')->group(function () {
        Route::get('/index', \App\Http\Livewire\Admin\Product\Index::class)->name('index');
    });

    Route::get('/environments', \App\Http\Livewire\Admin\Environment\Index::class)->name('environments');
    Route::get('/categories', \App\Http\Livewire\Admin\Category\Index::class)->name('categories');
    Route::get('/orders', \App\Http\Livewire\Admin\Orders\Index::class)->name('orders');
});
