<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ViewPagesController;
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
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/register', [LoginController::class, 'register']);
Route::get('/register', [LoginController::class, 'registerForm'])->name('register.form');
Route::get('/', function () {
    return view('components/landingpages/home');
})->name('landingpage');

Route::get('/view',[ViewPagesController::class, 'viewPages'])->name('viewpages');
// Route::get('/homepages', [HomePagesController::class, 'index'])->name('homepages');LoginConttrol
