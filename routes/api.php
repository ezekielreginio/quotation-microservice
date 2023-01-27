<?php

use App\Http\Controllers\QuotationController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/store', [QuotationController::class, 'store']);
Route::get('/all', 'QuotationController@index');
Route::get('/{id}', 'QuotationController@show');
Route::patch('/{id}', 'QuotationController@update');
Route::delete('/{id}', 'QuotationController@destroy');
