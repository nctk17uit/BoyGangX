<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserAdminController;
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
Auth::routes();
Route::get('/admin', [App\Http\Controllers\MovieController::class, 'admincp'])->name('admincp');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('');
Route::resource('category', CategoryController::class);
Route::resource('movie', MovieController::class);
Route::resource('useradmin', UserAdminController::class);
Route::get('/homeuser', [UserController::class, 'homeUser']);
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/phimle', [App\Http\Controllers\HomeController::class, 'phimle'])->name('phimle');
Route::get('/phimbo', [App\Http\Controllers\HomeController::class, 'phimbo'])->name('phimbo');
Route::get('/profile', [HomeController::class, 'show'])->name('profile.show')->middleware('auth');