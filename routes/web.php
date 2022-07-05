<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;

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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/page/{link}', [AppController::class, 'page'])->name('page');

Route::middleware('auth')
    ->group(function () {
        Route::get('/', [AppController::class, 'index'])->name('index');
        Route::get('/dashboard', [AppController::class, 'dashboard'])->name('dashboard');
        Route::get('/pages', [AppController::class, 'pages'])->name('pages');
        Route::get('/products', [AppController::class, 'products'])->name('products');

    });



//require __DIR__.'/auth.php';

