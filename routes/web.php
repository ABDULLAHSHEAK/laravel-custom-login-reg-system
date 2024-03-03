<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;

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
    return view('fontend.pages.home');
});

// auth view routes
Route::get('/user-login',[LoginController::class,'Login'])->name('login.view');
Route::get('/user-register',[RegisterController::class,'Register'])->name('register.view');
Route::get('/user-profile',[LoginController::class,'UserProfile'])->name('user.profile')->middleware('auth');
Route::get('/dashbaord',[LoginController::class,'Dashbaord'])->name('dashbaord.view')->middleware('auth');

// auth route
Route::post('/user-register',[RegisterController::class,'store']);
Route::post('/user-login',[LoginController::class,'UserLogin']);
Route::post('/user-logout',[LoginController::class,'UserLogOut'])->name('logout');


    // {{-- //development by md abdullah shake (mas it academy) --}}
