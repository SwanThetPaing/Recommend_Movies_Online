<?php

use App\Models\Movie;
use App\Models\User;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminMovieController;
use App\Http\Controllers\AdminHotlinesController;
// use App\Http\Controllers\ResetPasswordController;
// use App\Http\Controllers\ForgotPasswordController;
// use App\Http\Controllers\LoginController;
// use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\SeatController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

Route::get('/', [MovieController::class, 'index']);
// Route::get('/movies/{movie:slug}', [UserProfileController::class, 'detail']);
// Route::get('/movies/{movie:slug}/pic', [MovieController::class, 'pic']);
Route::get('/movies/{movie:slug}', [MovieController::class, 'show']);

Route::get('/seats', [SeatController::class, 'index']);
Route::get('/seats/{seat:id}', [SeatController::class, 'show']);

Route::get('/register', [AuthController::class, 'create'])->middleware('guest');
Route::post('/register', [AuthController::class, 'store'])->middleware('guest');
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth');

Route::get('/login', [AuthController::class, 'login'])->middleware('guest');
Route::post('/login', [AuthController::class, 'post_login'])->middleware('guest');

Route::delete('/admin/movies/{comment:id}/delete', [CommentController::class, 'destory']);
Route::post('/movies/{movie:slug}/comments', [CommentController::class, 'store']);

// Route::get('/movies/{user:id}/edit', [UserController::class, 'edit']);
// Route::patch('/movies/{user:id}/update', [UserController::class, 'update']);

Route::post('/movies/{movie:slug}/like', [MovieController::class, 'like']);
// Route::post('/seats/{movie:id}/{seat:id}/book', [SeatController::class, 'book']);

//users profile 
// Route::get('/user/main', [UserProfileController::class, 'index']);
Route::get('/components/{user:id}/profile', [UserProfileController::class, 'show']);
// Route::get('/components/menu', [UserProfileController::class, 'index']);
Route::get('/user/profile/{user:id}/edit', [UserProfileController::class, 'edit']);
Route::patch('/user/edit_profile/{user:id}/update', [UserProfileController::class, 'update']);


Route::middleware('can:admin')->group(function ()
{

Route::get('/admin/movies', [AdminMovieController::class, 'index']);
Route::get('/admin/movies/user_control', [AdminUserController::class, 'index']);
Route::get('/admin/movies/create', [AdminMovieController::class, 'create']);
Route::post('/admin/movies/store', [AdminMovieController::class, 'store']);
Route::get('/admin/movies/create2', [AdminHotlinesController::class, 'create']);
Route::post('/admin/movies/store_hotlines', [AdminHotlinesController::class, 'store']);
Route::get('/admin/movies/{movie:slug}/edit', [AdminMovieController::class, 'edit']);
Route::patch('/admin/movies/{movie:slug}/update', [AdminMovieController::class, 'update']);
Route::delete('/admin/movies/{movie:slug}/delete', [AdminMovieController::class, 'destory']);
Route::delete('/admin/users/{user:id}/delete', [AdminUserController::class, 'destory']);

});


Route::get('/welcome', function () {
    return view('welcome');
});