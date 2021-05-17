<?php

 use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
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

Route::get('/article/{id}', [ArticleController::class, 'show']);
//Route::get('/article', [ArticleController::class, 'show']);

//Route::get('/category/{id}', [CategoryController::class, 'show']);
Route::get('/category', [CategoryController::class, 'show']);

//Route::get('/tag/{id}', [TagController::class, 'show']);
Route::get('/tag', [TagController::class, 'show']);

Auth::routes();

//Route::get('/home', [HomeController::class, 'index'])->name('home');


// Route::get('mailContactUs', [ContactFormController::class, '__invoke']);
Route::get('/contact', function(){
    return view('contact');
});
Route::post('/contact', [ContactFormController::class, '__invoke']);
