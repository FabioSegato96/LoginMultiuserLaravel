<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/produtos', [App\Http\Controllers\ProdutoControlador::class, 'index'])->name('produtos');
Route::get('/departamentos', [App\Http\Controllers\DepartamentoControlador::class, 'index'])->name('departamentos');


// administrador view //
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin-home');

// administrador login //
Route::get('/admin/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'index'])->name('admin.login');
Route::post('/admin/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'login'])->name('admin.login.submit');