<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
use App\Http\Controllers\Admin\AdminLoginController;

// Route cho trang đăng nhập admin
Route::get('/adminlogin', [AdminLoginController::class, 'showLoginForm'])->name('admin.login');
Route::post('/adminlogin', [AdminLoginController::class, 'login'])->name('admin.login.submit');

// Route cho trang chính của admin
Route::get('/adminhome', [AdminLoginController::class, 'adminHome'])->name('admin.home');