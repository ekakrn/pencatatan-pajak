<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TaxController;
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

Route::get('/add-data', [TaxController::class, 'addData']);
Route::get('/add-page', [TaxController::class, 'addPage']);
Route::get('/', [TaxController::class, 'index']);
Route::get('/signout', [AuthController::class, 'signOut']);
Route::post('/login-auth', [AuthController::class, 'loginAuth'])->name('login.auth');
Route::get('/login', [LoginController::class, 'index']);
