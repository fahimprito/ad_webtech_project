<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api_Controller;
use App\Http\Controllers\Api_AdminController;
use App\Http\Controllers\Api_VendorController;
use App\Http\Controllers\Api_CustomerController;

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

//login registration
Route::post('/registration',[Api_Controller::class,'registration']);
Route::post('/login',[Api_Controller::class,'login']);

//vendor
Route::get('/vendor/transportList',[Api_VendorController::class,'transport_list']);
