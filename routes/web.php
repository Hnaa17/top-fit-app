<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthMemberController;

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

Route::get('/', [AuthMemberController::class, 'landing']);
Route::get('/member', [AuthMemberController::class, 'loginForm']);
Route::post('/member-login-post', [AuthMemberController::class, 'loginPost']);

Route::get('/register-page', [AuthMemberController::class, 'showForm']);
Route::post('/register-page', [AuthMemberController::class, 'submitForm']);

Route::post('/register-post', [AuthMemberController::class, 'regisPost'])->name('member.register');

Route::get('/logout', [AuthMemberController::class, 'logout']);
