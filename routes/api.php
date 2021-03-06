<?php

use Illuminate\Http\Request;
use App\Http\Controllers\api\contactController;
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

Route::post('contact',[contactController::class,'sendContact']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
