<?php

use App\Http\Controllers\Data_UserController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\KerusakanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SolusiController;

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

Route::get('/dashboard', function () {
    return view('dashboard.index', [
        "tittle" => "Dashboard",
        "active" => "dashboard"
    ]);
})->middleware('auth');

Route::resource('/dashboard/gejala', GejalaController::class);
Route::resource('/dashboard/solusi', SolusiController::class);
Route::resource('/dashboard/kerusakan', KerusakanController::class);
Route::resource('/dashboard/users', Data_UserController::class);


Route::get('/datauser', function () {
    return view('admin.datauser', [
        "tittle" => "Datauser",
        "active" => "datauser"
    ]);
});



Route::get('/riwayat', function () {
    return view('admin.riwayat', [
        "tittle" => "Riwayat",
        "active" => "riwayat"
    ]);
});


