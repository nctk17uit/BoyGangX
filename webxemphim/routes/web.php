<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\AdminController;
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
Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admincp'])->name('admincp');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\IndexController::class, 'profile'])->name('profile');
Route::get('/phimle', [App\Http\Controllers\IndexController::class, 'phimle'])->name('phimle');

Route::get('/phimle/123', [App\Http\Controllers\IndexController::class, 'phimle'])->name('phimle');
Route::get('/phimle/456', [App\Http\Controllers\IndexController::class, 'phimle'])->name('phimle');

Route::get('/phimbo', [App\Http\Controllers\IndexController::class, 'phimbo'])->name('phimbo');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('');
Route::resource('category', CategoryController::class);
Route::resource('movie', MovieController::class);
Route::resource('useradmin', UserAdminController::class);
Route::get('/homeuser', [UserController::class, 'homeUser']);