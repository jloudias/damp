<?php

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

// ACESSO LIVRE
/* Route::get('/', function () {
    return view('welcome');
}); */

// Desabilita auto-registro
Auth::routes(['register'=>false]);

// ACESSO AUTENTICADO
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('root');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Trocar senha (usuário)
Route::get('change-password', [App\Http\Controllers\UserController::class, 'editPassword'])->name('edit.password');
Route::post('change-password', [App\Http\Controllers\UserController::class, 'updatePassword'])->name('update.password');


// ACESSO ADMINISTRADORES
Route::prefix('admin')->middleware('auth','admin')->group(function(){
    Route::get('/', function () {
        return view('admin.index');
    });
    Route::resource('user', App\Http\Controllers\UserController::class);
    Route::resource('post', App\Http\Controllers\PostController::class);
});
