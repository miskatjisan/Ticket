<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\UserAuthController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AirOrderController;
use App\Http\Controllers\AirPaymentController;
use App\Http\Controllers\BusOrderController;
use App\Http\Controllers\BusPaymentController;
use App\Http\Controllers\MovieOrderController;
use App\Http\Controllers\MoviePaymentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserProfileController;


/*
|--------------------------------------------------------------------------
| User Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('login', [UserAuthController::class, 'login'])->name('login');
Route::post('post-login', [UserAuthController::class, 'postLogin'])->name('login.post'); 
Route::get('registration', [UserAuthController::class, 'registration'])->name('register');
Route::post('post-registration', [UserAuthController::class, 'postRegistration'])->name('register.post'); 
Route::get('', [UserAuthController::class, 'index']); 
Route::get('logout', [UserAuthController::class, 'logout'])->name('logout');

// Booking routes
Route::get('/booking', [ServiceController::class, 'booking'])->name('booking');

// service routes
Route::get('/service', [ServiceController::class, 'service'])->name('service');

//AirOrder
Route::get('air/order', [AirOrderController::class,'Create'])->name('airorder.create'); 
Route::post('airorder/add/successfull', [AirOrderController::class,'Store'])->name('airorder.store');

//AirPayment
Route::get('air/payment', [AirPaymentController::class,'Create'])->name('airpayment.create'); 
Route::post('air/payment/add/successfull', [AirPaymentController::class,'Store'])->name('airpayment.store');

//BusOrder
Route::get('bus/order', [BusOrderController::class,'Create'])->name('busorder.create'); 
Route::post('bus/order/add/successfull', [BusOrderController::class,'Store'])->name('busorder.store');

//BusPayment
Route::get('bus/payment', [BusPaymentController::class,'Create'])->name('buspayment.create'); 
Route::post('bus/payment/add/successfull', [BusPaymentController::class,'Store'])->name('buspayment.store');

//MovieOrder
Route::get('movie/order', [MovieOrderController::class,'Create'])->name('movieorder.create'); 
Route::post('movieorder/add/successfull', [MovieOrderController::class,'Store'])->name('movieorder.store');

//MoviePayment
Route::get('movie/payment', [MoviePaymentController::class,'Create'])->name('moviepayment.create'); 
Route::post('buspayment/add/successfull', [MoviePaymentController::class,'Store'])->name('moviepayment.store');

//Contact
Route::get('contact/us',  [ContactController::class,'Create'] )->name('contact.create'); 
Route::post('contact/add/successfull',  [ContactController::class,'Store'] )->name('contact.store');

//Update Profile
Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
Route::get('/profile/edit', [UserProfileController::class, 'edit'])->name('profile.edit');
Route::post('/profile/update/successfully', [UserProfileController::class, 'update'])->name('profile.update');