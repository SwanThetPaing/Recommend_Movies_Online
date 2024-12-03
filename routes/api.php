<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/



Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);

Route::post('/resend/email/token', [RegisterController::class, 'resendPin']);
Route::middleware('auth:sanctum')->group(function () {
    Route::post('email/verify',[RegisterController::class, 'verifyEmail']);
    Route::middleware('verify.api')->group(function () {
        Route::post('/logout', [LoginController::class, 'logout']);
    });
});

Route::post('/forgot-password', [ForgotPasswordController::class, 'forgotPassword']);
Route::post('/verify/pin', [ForgotPasswordController::class, 'verifyPin']);
Route::post('/reset-password', [ResetPasswordController::class, 'resetPassword']);