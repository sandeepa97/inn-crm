<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

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

//Website routes
Route::get('/', [WebController::class, 'index']);
Route::get('/about-us', [WebController::class, 'about']);
Route::get('/services', [WebController::class, 'services']);
Route::get('/rooms', [WebController::class, 'rooms']);
Route::get('/booking', [WebController::class, 'booking']);
Route::get('/gallery', [WebController::class, 'gallery']);
Route::get('/contact', [WebController::class, 'contact']);

//User Authentication
Route::get('/user-login', [WebController::class, 'loginForm']);
Route::get('/user-forgot-password', [WebController::class, 'forgotPassword']);
Route::get('/user-recover-password', [WebController::class, 'recoverPassword']);
Route::post('/post-login', [AuthController::class, 'postLogin']);
Route::get('/logout', [AuthController::class, 'logout']);

//Admin Dashboard routes
Route::get('/system', [DashboardController::class, 'index']);