<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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



Route::get('/', function () {
    return view('welcome');
})->name('home');



Route::get('/login',[UserAuthController::class, 'index'])->name('login');
Route::post('/login',[UserAuthController::class, 'proses_login'])->name('proses_login');
// Route::get('/logout',[UserAuthController::class, 'logout'])->name('logout');
Route::get('/registrasi',[RegistrasiController::class, 'index'])->name('registrasi');
Route::post('/registrasi',[RegistrasiController::class, 'authenticate'])->name('register.authenticate');
Route::get('/artikel',[ArtikelController::class, 'index'])->name('artikel');
Route::get('/layanan',[LayananController::class, 'index'])->name('layanan');
Route::get('/admin',[AdminController::class, 'index']);
// Route::get('/logout',[UserAuthController::class, 'logout'])->name('logout');
// Route::get('/index',[CustomerController::class, 'index'])->name('index')->middleware('cekUser:customer');


Route::middleware(['auth'])->group(function(){
    Route::get('/admin',[AdminController::class, 'index'])->middleware('cekUser:admin');
    Route::get('/logout',[UserAuthController::class, 'logout'])->name('logout');
});

// Route::group(['middleware' => ['auth']], function () {
//     Route::group(['middleware' => ['cekUser:admin']], function () {
//         Route::resource('admin', AdminController::class);
//     });
//     Route::group(['middleware' => ['cekUser:customer']], function () {
//         Route::resource('customer', CustomerController::class,);
//     });
// });
