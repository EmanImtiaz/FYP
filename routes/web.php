<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ForgetController;

use App\Http\Controllers\SigninController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\WinnersController;

use App\Http\Controllers\BookinginfoController;
use App\Http\Controllers\BookingformController;
use App\Http\Controllers\BookingpkgController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('welcome', function () {
    return view('welcome');
});
Route::get('signin', [SigninController::class,'signin'])->name('signin');;

Route::get('signup', [SignupController::class,'signup'])->name('signup');;

Route::get('forget', [ForgetController::class,'forget'])->name('forget');;

Route::get('reset', [ResetController::class,'reset'])->name('reset');;


Route::get('booking', [BookingController::class,'booking'])->name('booking');;

Route::get('bookinginfo', [BookinginfoController::class,'bookinginfo'])->name('bookinginfo');;

Route::get('bookingform', [BookingformController::class,'bookingform'])->name('bookingform');;

Route::get('bookingpkg', [BookingpkgController::class,'bookingpkg'])->name('bookingpkg');

Route::get('payment', [PaymentController::class,'payment'])->name('payment');

Route::get('winners', [WinnersController::class,'winners'])->name('winners');
