<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UsuarioController
};
use App\Models\Usuario;

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

/*Route::get('/', function () {
    return view('welcome');
});*/


Route::get('/', [UsuarioController::class,'viewIndex' ])->name('usuario.index');

Route::get('/cadastrar',[UsuarioController::class,'viewInsert'])->name('usuario.cadastrar');

Route::put('/atualizar/{id}',[UsuarioController::class,'viewEdit'])->name('usuario.atualizar');

Route::get('/listar',[UsuarioController::class,'viewList'])->name('usuario.listar');

Route::post('/usuario',[UsuarioController::class,'insert'])->name('usuario.insert');

Route::put('/usuario/{id}',[UsuarioController::class, 'update'])->name('usuario.update');

Route::get('/usuario/{id}',[UsuarioController::class,'details'])->name('usuario.details');

Route::delete('/usuario/{id}',[UsuarioController::class, 'delete'])->name('usuario.delete');


Route::post('/usuario/search', [UsuarioController::class, 'searchByNameOrDocumet'])->name('usuario.search');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
