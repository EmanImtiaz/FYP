<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ForgetController;

use App\Http\Controllers\SigninController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\WinnersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanelController;
use App\Http\Controllers\BookinginfoController;
use App\Http\Controllers\BookingformController;
use App\Http\Controllers\BookingpkgController;
use App\Http\Controllers\JoinphotographerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Profiler\Profile;

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
//Route::get('joinphotographer', [JoinphotographerController::class,'joinphotographer'])->name('joinphotographer');;
// Route::get('profile', [ProfileController::class,'profile'])->name('profile');;

//Route::get('profile', [ProfileController::class, 'profile'])->middleware('auth')->name('profile');
//Route::get('profile/upload', [ProfileController::class, 'show'])->middleware('auth')->name('profile.upload'); // Display the upload form
//Route::post('profile/upload', [ProfileController::class, 'upload'])->middleware('auth'); // Handle the file upload

Route::get('booking', [BookingController::class,'booking'])->name('booking');;

Route::get('bookinginfo', [BookinginfoController::class,'bookinginfo'])->name('bookinginfo');;

Route::get('bookingform', [BookingformController::class,'bookingform'])->name('bookingform');;

Route::get('bookingpkg', [BookingpkgController::class,'bookingpkg'])->name('bookingpkg');

Route::get('payment', [PaymentController::class,'payment'])->name('payment');

Route::get('winners', [WinnersController::class,'winners'])->name('winners');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [ProfileController::class, 'profile'])->name('Frontend.profile');
Route::get('/profile.edit', [ProfileController::class, 'edit_profile'])->name('profile.edit');
Route::post('/profile-update', [ProfileController::class, 'update_profile'])->name('profileupdate');

Route::get('/joinphotographer', [ProfileController::class, 'joinphotographer'])->name('joinphotographer');

Route::post('/joinphotographer', [ProfileController::class, 'becomePhotographer'])->name('joinphotographer.submit');

Route::get('/detail.edit', [ProfileController::class, 'detail_edit'])->name('detailedit');
Route::post('/detail-updatee', [ProfileController::class, 'detail_updatee'])->name('profileupdatee');

Route::middleware(['auth'])->group(function () {
    // Your existing routes...

    Route::get('/profile/photographer', [ProfileController::class, 'showProfile'])->name('user.profile');
});
