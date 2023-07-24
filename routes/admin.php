<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AirOrderController;
use App\Http\Controllers\AirPaymentController;
use App\Http\Controllers\BusOrderController;
use App\Http\Controllers\BusPaymentController;
use App\Http\Controllers\MovieOrderController;
use App\Http\Controllers\MoviePaymentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//auth
Route::get('/login',[AdminAuthController::class, 'login'])->middleware('adminLoggedIn');
Route::post('/check',[AdminAuthController::class, 'check'])->name('admin.check');
Route::get('/logout',[AdminAuthController::class, 'logout'])->name('admin.logout');
Route::get('/',[AdminAuthController::class, 'dashboard'])->middleware('isLoggedInAdmin');

//Service
Route::resource('services', ServiceController::class);

//AirOrder
Route::resource('airorders', AirOrderController::class);

//AirPayment
Route::resource('airpayments', AirPaymentController::class);

//BusOrder
Route::resource('busorders', BusOrderController::class);

//BusPayment
Route::resource('buspayments', BusPaymentController::class);

//MovieOrder
Route::resource('movieorders', MovieOrderController::class);

//MoviePayment
Route::resource('moviepayments', MoviePaymentController::class);

//Contact
Route::resource('contacts', ContactController::class);

//users
Route::resource('users', UserController::class);