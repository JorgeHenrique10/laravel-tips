<?php

use App\Http\Controllers\Login\LoginController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SessionController;
use App\Jobs\EnviarEmail as JobsEnviarEmail;
use App\Mail\EnviarEmail;
use Illuminate\Support\Facades\Mail;
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

Route::resource('produtos', ProdutoController::class);
Route::resource('site/login', LoginController::class);

Route::get('envio-email', function () {
    $user = new stdClass();
    $user->nome = 'Jorge Henrique';
    $user->email = "jorgejds@mailinator.com";
    // dd(env('MAIL_PASSWORD'));
    // Mail::send(new EnviarEmail($user)); - envio sem fila
    JobsEnviarEmail::dispatch($user)->delay(now()->addSeconds('20'));
});

Route::get('session-teste', [SessionController::class, 'session']);

require __DIR__ . '/auth.php';
