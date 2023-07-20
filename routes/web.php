<?php

use App\Http\Controllers\CheckoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\Kategori_DestinasiController;
use App\Http\Controllers\MultiUser;
use App\Http\Controllers\Riwayat_DestinasiController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [MultiUser::class, 'index'])->name('/');
Route::get('/home', [DestinasiController::class, 'index'])->name('homePage');
Route::get('/Destinasi/{id}', [DestinasiController::class, 'show'])->name('detailList');
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

