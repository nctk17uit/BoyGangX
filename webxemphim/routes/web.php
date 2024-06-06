<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserAdminController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\CountryController;
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
Route::get('/admin', [App\Http\Controllers\IndexController::class, 'admincp'])->name('admincp');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('');
Route::get('/danh-muc/{slug}', [IndexController::class, 'category'])->name('category');
Route::get('the-loai/{slug}', [IndexController::class, 'genre'])->name('genre');
Route::get('/quoc-gia/{slug}', [IndexController::class, 'country'])->name('country');
Route::resource('category', CategoryController::class);
Route::resource('movie', MovieController::class);
Route::resource('genre', GenreController::class);
Route::resource('country', CountryController::class);
Route::resource('useradmin', UserAdminController::class);
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/phimle', [App\Http\Controllers\HomeController::class, 'phimle'])->name('phimle');
Route::get('/phimbo', [App\Http\Controllers\HomeController::class, 'phimbo'])->name('phimbo');
Route::get('/profile', [HomeController::class, 'show'])->name('profile.show')->middleware('auth');
Route::get('/trangphimchitiet', [HomeController::class,'home']);
Route::get('/{slug}', [HomeController::class, 'watching'])->name('movie.show');Route::resource('useradmin', UserAdminController::class);
Route::get('/phan-role/{id}', [UserAdminController::class,'phanrole']);
Route::post('/insert_role/{id}', [UserAdminController::class,'insert_role']);
