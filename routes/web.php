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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [App\Http\Controllers\Backend\UserController::class, 'index'])->name('user');
Route::get('/user/create', [App\Http\Controllers\Backend\UserController::class, 'create'])->name('user.create');
Route::post('/user/store', [App\Http\Controllers\Backend\UserController::class, 'store'])->name('user.store');
Route::get('/user/profile', [App\Http\Controllers\Backend\UserController::class, 'profile'])->name('user.profile');
Route::get('/user/edit/{id}', [App\Http\Controllers\Backend\UserController::class, 'edit'])->name('user.edit');
Route::post('/user/update', [App\Http\Controllers\Backend\UserController::class, 'update'])->name('user.update');
Route::delete('/user/destroy/{id}', [App\Http\Controllers\Backend\UserController::class, 'destroy'])->name('user.destroy');
