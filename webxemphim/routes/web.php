<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\EpisodeController;
use App\Http\Controllers\CountryController;
use Illuminate\Support\Facades\Auth; // Đảm bảo import facade Auth nếu bạn sử dụng nó trực tiếp

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

// Xóa tuyến đường này vì nó xung đột với tuyến đường dưới
 Route::get('/', function () {
     return view('layout');
 });

Route::get('/', [IndexController::class, 'home']);
Route::get('/danh-muc', [IndexController::class, 'category']);
Route::get('/the-loai', [IndexController::class, 'genre']);
Route::get('/quocgia', [IndexController::class, 'country']);
Route::get('/xem-phim', [IndexController::class, 'watch']);
Route::get('/episode', [IndexController::class, 'episode']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::resource('category', CategoryController::class);
Route::resource('genre', GenreController::class);
Route::resource('country', CountryController::class);
Route::resource('episode', EpisodeController::class);
Route::resource('movie', MovieController::class);
