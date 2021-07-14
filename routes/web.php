<?php

use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);

Route::get('/article/{id}', [ArticleController::class, 'show']);

Route::get('/category', [CategoryController::class, 'show']);
//Route::get('/categories/{id}', [CategoryController::class, 'show']);

Route::get('/tag', [TagController::class, 'show']);

Route::get('/checkout', function(){
    return view('checkout');
});

Auth::routes();

Route::get('/contact', function(){
    return view('contact');
});

Route::post('/contact', [ContactFormController::class, '__invoke']);

Route::post('/reservations', [ReservationController::class, 'sendOrder']);


