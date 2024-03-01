<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ForgetController;


use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\WinnersController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BookinginfoController;
use App\Http\Controllers\BookingformController;
use App\Http\Controllers\BookingpkgController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PhotosContestController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
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



Route::get('forget', [ForgetController::class,'forget'])->name('forget');;

Route::get('reset', [ResetController::class,'reset'])->name('reset');;

Route::get('bookinginfo', [BookinginfoController::class,'bookinginfo'])->name('bookinginfo');

Route::get('bookingform', [BookingformController::class,'bookingform'])->name('Bookingform');

Route::get('bookingpkg', [BookingpkgController::class,'bookingpkg'])->name('bookingpkg');

Route::get('payment', [PaymentController::class,'payment'])->name('payment');

Route::get('winners', [WinnersController::class,'winners'])->name('winners');

Route::get('/',[MainController::class,'main'])->name('main');

Route::get('/photographer-profile/{id}', [ProfileController::class, 'show'])->name('photographerprofile.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth'])->group(function () {

    // Your existing routes...
    Route::get('/profile', [ProfileController::class, 'profile'])->name('Frontend.profile');
    Route::get('/profile.edit', [ProfileController::class, 'edit_profile'])->name('profile.edit');
    Route::post('/profile-update', [ProfileController::class, 'update_profile'])->name('profileupdate');
    Route::get('/joinphotographer', [ProfileController::class, 'joinphotographer'])->name('joinphotographer');
    Route::post('/joinphotographer', [ProfileController::class, 'becomePhotographer'])->name('joinphotographer.submit');
    Route::get('/detail.edit', [ProfileController::class, 'detail_edit'])->name('detailedit');
    Route::post('/detail-updatee', [ProfileController::class, 'detail_updatee'])->name('profileupdatee');
});



Route::get('/contest', [CategoryController::class, 'views'])->name('explorephotocontest');

//Route::get('/contestdetail', [PhotosContestController::class, 'view'])->name('explorecontest');

Route::group(['prefix' => 'photoscontest'], function () {
    Route::get('/', [PhotosContestController::class, 'index'])->name('photoscontest.index');
    Route::get('/create', [PhotosContestController::class, 'create'])->name('photoscontest.create');
    Route::post('/store', [PhotosContestController::class, 'store'])->name('photoscontest.store');
    Route::get('/edit/{id}', [PhotosContestController::class, 'edit'])->name('photoscontest.edit');
    Route::post('/update/{id}', [PhotosContestController::class, 'update'])->name('photoscontest.update');
    Route::get('/delete/{id}', [PhotosContestController::class, 'delete'])->name('photoscontest.delete');
});

Route::get('/contestform', [PhotosContestController::class, 'create'])->name('contestform.create');
Route::post('/contestformstore', [PhotosContestController::class, 'store'])->name('contestform.store');


//Route::get('/contestdetail', [PhotosContestController::class,'view'])->name('contestdetail');
Route::get('/contestdetail/{categoryId}', [PhotosContestController::class,'view'])->name('contestdetail');


