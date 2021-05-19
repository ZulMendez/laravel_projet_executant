<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\UserController;
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

Route::get('/', [AllController::class, 'home'])->name('home');

Route::get('/admin/dashboard', [AllController::class, 'admin'])->middleware(['auth'])->name('dashboard');
Route::get('/admin/avatar', [AllController::class, 'avatar'])->middleware(['auth'])->name('avatar');

Route::get('/admin/user', [UserController::class, 'index'])->middleware(['auth', 'admin'])->name('user.index');
Route::delete('/admin/user/{id}/delete', [UserController::class, 'destroy'])->name('user.destroy');
Route::get('/admin/user/{id}', [UserController::class, 'show'])->name('user.show');
Route::get('/admin/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/admin/user/{id}/update', [UserController::class, 'update'])->name('user.update');

require __DIR__.'/auth.php';
