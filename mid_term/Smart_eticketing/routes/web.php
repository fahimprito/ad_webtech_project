<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;

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

//opening page
Route::get('/', function () {return view('eticketing');});
Route::get('/vendor-dashboard', function () {return view('vendor.dashboard');});


//home
Route::get('/home',[PagesController::class,"home"])->name("home")->middleware('alreadyLoggedin');
//login, registration, logout
Route::get('/login',[UserController::class,"login"])->name("login")->middleware('alreadyLoggedin');
Route::post('/login',[UserController::class,"loginSubmitted"])->name("login");
Route::get('/registration',[UserController::class,"registration"])->name("registration")->middleware('alreadyLoggedin');
Route::post('/registration',[UserController::class,"registrationSubmitted"])->name("registration");
Route::get('/logout', [UserController::class,'logout'])->name('logout');



//admin
Route::get('/adminhome',[PagesController::class,"adminhome"])->name("adminhome")->middleware('validadmin');



//vendor
Route::get('/vendorhome',[PagesController::class,"vendorhome"])->name("vendorhome")->middleware('validvendor');
Route::get('/addtransport',[VendorController::class,"addtransport"])->name("addtransport")->middleware('validvendor');
Route::post('/addtransport',[VendorController::class,"transportSubmitted"])->name("addtransport")->middleware('validvendor');
Route::get('/transport_list',[VendorController::class,"transport_list"])->name("transport_list")->middleware('validvendor');





//customer
Route::get('/customerhome',[PagesController::class,"customerhome"])->name("customerhome")->middleware('validcustomer');

