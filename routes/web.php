<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ViewPagesController;
use App\Http\Controllers\InformasiPemesananController;
use App\Http\Controllers\MyBookingController;
use App\Http\Controllers\PaymentWisataController;
use App\Http\Controllers\ProfileAccountController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WisataController;
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
Route::get('/login', [LoginController::class, 'index'])->name('login.form');
Route::post('/login', [LoginController::class, 'login'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/register', [LoginController::class, 'register'])->name('register');
Route::post('/register/check', [LoginController::class, 'checkUsername'])->name('register.check');
Route::get('/register', [LoginController::class, 'registerForm'])->name('register.form');
Route::get('/', function () {
    return view('components/landingpages/home');
})->name('landingpage');
Route::get('/informasi-pemesanan', [InformasiPemesananController::class, 'index'])->name('informasi.index');
Route::get('/pesanan-saya', [MyBookingController::class,'index'])->name('booking.index');
Route::get('/profile-saya',[ProfileAccountController::class,'index'])->name('profile.index');
Route::post('/profile-save',[ProfileAccountController::class,'save'])->name('profile.save');
Route::post('/pembayaran-tiket/{id}', [OrderTicketController::class, 'show'])->name('payment');

Route::get('/view',[ViewPagesController::class, 'viewPages'])->name('viewpages');
// Route::get('/homepages', [HomePagesController::class, 'index'])->name('homepages');LoginConttrol

//Google Login API
Route::get('/auth/redirect', [LoginController::class, 'redirectToProvider'])->name('loginGoogle');
Route::get('/auth/callback', [LoginController::class, 'handleProviderCallback']);

//Dashboard Route
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/wisata', [WisataController::class, 'index'])->name('admin.wisata');