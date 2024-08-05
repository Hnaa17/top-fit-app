<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthMemberController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\AuthAdminController;
use App\Http\Controllers\AdminController;
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

Route::middleware(['guest'])->group(function() {
    Route::get('/', [AuthMemberController::class, 'landing']);

    Route::get('/member', [AuthMemberController::class, 'loginForm']);
    Route::post('/member-login-post', [AuthMemberController::class, 'loginPost']);

    Route::get('/register-page', [AuthMemberController::class, 'showForm']);
    Route::post('/register-post', [AuthMemberController::class, 'submitForm']);

    Route::get('/admin', [AuthAdminController::class, 'loginForm']);
    Route::post('/adm-login-post', [AuthAdminController::class, 'loginPost']);
});

Route::middleware(['checkauth'])->group(function(){
    Route::get('/home', [MemberController::class, 'home']);
    Route::get('/adm-home', [AdminController::class, 'home']);

    Route::get('/logout', [AuthMemberController::class, 'logout']);
});


