<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\NavigatorController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view('screens.landingpage');
})->name('landing');
Route::get('/register',[RegisterController::class,'index'])->name('register')->middleware('guest');
Route::post('/register',[RegisterController::class,'store']);
Route::get('/agrovet',[NavigatorController::class,'agrovet'])->name('agrovet')->middleware('auth');;
Route::get('/forums',[NavigatorController::class,'forums'])->name('forums')->middleware('auth');;
Route::get('/loans',[NavigatorController::class,'loans'])->name('loans')->middleware('auth');;
Route::get('/sales',[NavigatorController::class,'sales'])->name('sales')->middleware('auth');;
Route::get('/goods',[NavigatorController::class,'goods'])->name('goods')->middleware('auth');;
Route::get('/farming',[NavigatorController::class,'farming'])->name('farming')->middleware('auth');;
Route::get('/investment',[NavigatorController::class,'investment'])->name('investment')->middleware('auth');;
Route::get('/operations',[NavigatorController::class,'operations'])->name('operations')->middleware('auth');;
Route::get('/reports',[NavigatorController::class,'reports'])->name('reports')->middleware('auth');;
Route::get('/manage',[NavigatorController::class,'manage'])->name('manage')->middleware('auth');;
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/logout',[LogoutController::class,'index'])->name('logout');
Route::post('/login',[LoginController::class,'login']);
Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard')->middleware('auth');
Route::get('/profile',[ProfileController::class,'index'])->name('profile')->middleware('auth');;

