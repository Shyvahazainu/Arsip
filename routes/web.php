<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataController;

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

// Change the route definition for displaying the login form
Route::view('/profil', 'home.profil')->name('profil');
Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/home/cari', [HomeController::class, 'cari'])->name('cariHome');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');


Route::get('/penyidikan', [DataController::class, 'showDataPenyidikan'])->name('penyidikan');

Route::get('/penuntutan', [DataController::class, 'showDataPenuntutan'])->name('penuntutan');

Route::get('upload', [DataController::class, 'upload'])->name('upload');
Route::post('uploading', [DataController::class, 'uploading'])->name('uploading');
