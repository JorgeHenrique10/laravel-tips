<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Foms\TestController;
use App\Http\Controllers\Form\Test2Controller;

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

//GET
Route::get('/', function () {
    return view('welcome');
});

Route::get('/listagem-usuario', [UserController::class, 'listUser']);
Route::get('/usuarios', [TestController::class, 'listAllUsers'])->name('users.allUsers');
Route::get('/usuarios/novo', [TestController::class, 'addUser'])->name('users.addUser');
Route::get('/usuarios/editar/{user}', [TestController::class, 'editUser'])->name("users.editUser");
Route::get('/usuarios/{user}', [TestController::class, 'listUser'])->name("users.listUser");


//POST
Route::post('/usuarios/store', [TestController::class, 'storeUser'])->name("users.store");


//PUT
Route::put('/usuarios/edit/{user}', [TestController::class, 'edit'])->name("users.edit");

//DELETE
Route::delete('/usuarios/delete/{user}', [TestController::class, 'destroy'])->name("users.destroy");


//Usando as Rotas do Artisan
Route::resource('api/usuarios', Test2Controller::class)->names('users')->parameters(['usuarios' => 'user']);
