<?php


use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\CountryController;

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
Route::get('/homeadmin', [IndexController::class, 'index'])->name('admin.home');
Route::get('/danh-muc', [IndexController::class, 'category']);
Route::get('/the-loai', [IndexController::class, 'genre']);
Route::get('/quocgia', [IndexController::class, 'country']);
Route::get('/xem-phim', [IndexController::class, 'watch']);
Route::get('/episode', [IndexController::class, 'episode']);



Route::resource('category', CategoryController::class);
Route::resource('genre', GenreController::class);
Route::resource('country', CountryController::class);
Route::resource('episode', EpisodeController::class);
Route::resource('movie', MovieController::class);