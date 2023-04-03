<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ActivityController;


/*
|--------------------------------------------------------------------------
| Web Routes`
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::post('/home', [HomeController::class, 'home'])->name('home');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('auth.login.form');
Route::get('/login', 'LoginController@showLoginForm')->name('login');
Route::post('/login', 'LoginController@login');
Route::post('/login', [LoginController::class, 'login'])->name('auth.login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('store.login');
Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');

Route::post('/activity', [ActivityController::class, 'store'])->name('activity.store');

Route::get('/register', [App\Http\Controllers\Auth\RegistrationController::class, 'showRegistrationForm'])->name('auth.register.form');
Route::post('/register', [App\Http\Controllers\Auth\RegistrationController::class, 'register'])->name('auth.register');
