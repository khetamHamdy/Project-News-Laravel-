<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\dashboard\CategoryController;
use App\Http\Controllers\dashboard\dashboardController;
use App\Http\Controllers\dashboard\PostController;
use App\Http\Controllers\dashboard\UserController;
use App\Http\Controllers\FrontEnd\AllFrontController;
use App\Http\Controllers\FrontEnd\AuthorController;
use App\Http\Controllers\FrontEnd\BusinessController;
use App\Http\Controllers\FrontEnd\EntertainmentController;
use App\Http\Controllers\FrontEnd\PliticsController;
use App\Http\Controllers\FrontEnd\SearchController;
use App\Http\Controllers\FrontEnd\sidebarController;
use App\Http\Controllers\FrontEnd\SingleController;
use App\Http\Controllers\FrontEnd\SportController;
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
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('authenticate', [AuthController::class, 'authenticate_login'])->name('authenticate_login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('registr' , [AuthController::class , 'Registration'])->name('registr');
Route::post('registr' , [AuthController::class , 'RegistrationSave'])->name('registrSave');

Route::prefix('admin')->middleware('auth')->group(
    function () {
        Route::get('/', [dashboardController::class, 'index']);
        Route::resource('users', UserController::class);
        Route::resource('post', PostController::class);
        Route::resource('category', CategoryController::class);
    }
);
Route::get('author.html',[AllFrontController::class , 'index_author'])->name('author');
Route::get('business.html',[AllFrontController::class , 'index_Business'])->name('business');
Route::get('entertainment.html',[AllFrontController::class , 'index_Entertainment'])->name('entertainment');
Route::get('politics.html',[AllFrontController::class , 'index_Politics'])->name('politics');
Route::get('search.html',[SearchController::class, 'index'])->name('search');
Route::get('single.html/{id}',[AllFrontController::class, 'index_single'])->name('single');
Route::get('sport.html',[AllFrontController::class , 'index_Sports'])->name('sport');
Route::get('sidebar.html',[sidebarController::class , 'index'])->name('sidebar');

