<?php

use App\Http\Controllers\AuthController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('admin/dashboard', [AuthController::class, 'dashboard'])->name('admin');
Route::get('admin/login', [AuthController::class, 'login'])->name('admin.login');
Route::post('admin/loginIn', [AuthController::class, 'loginIn'])->name('admin.loginIn');
Route::get('admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::get('site/home', function () {
    return view('site.home');
})->name('site.home');
Route::get('site/contact', function () {
    return view('site.contact');
})->name('site.contact');
Route::get('site/courses', function () {
    return view('site.courses');
})->name('site.courses');

require __DIR__ . '/auth.php';
