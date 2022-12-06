<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::delete('users/{id}', [App\Http\Controllers\HomeController::class, 'delete'])->name('delete');
Route::post('/add', [App\Http\Controllers\HomeController::class, 'create'])->name('create');
Route::patch('/update/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('update');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'user'])->name('profile');
Route::patch('/profile/{id}', [App\Http\Controllers\ProfileController::class, 'update'])->name('updateProfile');

Route::get('/changepassword', [App\Http\Controllers\PasswordController::class, 'password'])->name('changepassword');