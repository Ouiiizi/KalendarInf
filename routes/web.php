<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\PagesController::class,'login']);
Route::get('/home', [\App\Http\Controllers\PagesController::class,'home']);
Route::get('/static',[App\Http\Controllers\PagesController::class,'static']);
Route::get("login",[\App\Http\Controllers\PagesController::class,'login' ])->name('login');
Route::post("loginForm",[\App\Http\Controllers\PagesController::class,'loginForm' ]);
Route::post('/login',[\App\Http\Controllers\PagesController::class,'login']);
Route::get('/create',[\App\Http\Controllers\PagesController::class, 'create']);
Route::POST('/create',[\App\Http\Controllers\PagesController::class, 'store']);

