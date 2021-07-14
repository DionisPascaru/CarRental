<?php

use App\Http\Controllers\ReservationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::post('api/reservations', [ReservationController::class, 'sendOrder']);

//Route::middleware('auth:api')->get('/articles', function (Request $request) {
//    return $request->articles();
//});

//Route::middleware('auth:api')->get('/category', function (Request $request) {
//    return $request->show();
//});

//Route::get('api/categories/{id}', [CategoriesApiController::class, 'delete']);
