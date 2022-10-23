<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('/', function () {
    return view('home', [
        "tittle" => "Home",
        "active" => "home"
    ]);
});


Route::get('/articles', function () {
    return view('articles', [
        "tittle" => "Articles",
        "active" => "articles"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "active" => "about"
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'auth']);
Route::get('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index']);

Route::get('/user', function () {
    return view('user.user', [
        "tittle" => "Dashboard",
        "active" => "dashboard"
    ]);
});

Route::get('/admin', function () {
    return view('admin.admin', [
        "tittle" => "Dashboard",
        "active" => "dashboard"
    ]);
})->middleware('auth');

Route::get('/datauser', function () {
    return view('admin.datauser', [
        "tittle" => "Datauser",
        "active" => "datauser"
    ]);
});

Route::get('/gejala', function () {
    return view('admin.gejala', [
        "tittle" => "Gejala",
        "active" => "gejala"
    ]);
});

Route::get('/solusi', function () {
    return view('admin.solusi', [
        "tittle" => "Solusi",
        "active" => "solusi"
    ]);
});

Route::get('/riwayat', function () {
    return view('admin.riwayat', [
        "tittle" => "Riwayat",
        "active" => "riwayat"
    ]);
});


