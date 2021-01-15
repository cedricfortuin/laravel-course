<?php

use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RegisterController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('user.pages.index');
})->name('index');

Route::get('/admin', [PagesController::class, 'showAdminIndex'])->name('admin.index');

Route::get('/login', [LoginController::class, 'showLogin'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login_button');

Route::get('/register', [RegisterController::class, 'showRegister'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'register'])->name('register_button');

Route::post('/post', [PostController::class, 'post'])->name('post_button');
Route::get('/delete/{id}', [PostController::class, 'delete']);
