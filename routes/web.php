<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Admin\AdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SiteController::class, 'index'])->name('site.index');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard.index');
Route::get('admin/dashboard/users', [AdminController::class, 'users'])->name('admin.dashboard.users');
Route::get('admin/dashboard/providers', [AdminController::class, 'providers'])->name('admin.dashboard.providers');

