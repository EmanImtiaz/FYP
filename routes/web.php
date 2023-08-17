<?php

use App\Http\Controllers\ForgetController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SigninController;
use App\Http\Controllers\ResetController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ShopController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('signin', [SigninController::class,'signin'])->name('signin');;

Route::get('signup', [SignupController::class,'signup'])->name('signup');;

Route::get('forget', [ForgetController::class,'forget'])->name('forget');;

Route::get('reset', [ResetController::class,'reset'])->name('reset');;

Route::get('form', [FormController::class,'form'])->name('billform');;

Route::get('shop', [ShopController::class,'shop'])->name('shop');;



