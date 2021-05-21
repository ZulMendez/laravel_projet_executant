<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\AvatarController;
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

// user
Route::get('/admin/user', [UserController::class, 'index'])->middleware(['auth', 'admin'])->name('user.index');
Route::delete('/admin/user/{id}/delete', [UserController::class, 'destroy'])->name('user.destroy');
Route::get('/admin/user/{id}', [UserController::class, 'show'])->name('user.show');
Route::get('/admin/user/{id}/edit', [UserController::class, 'edit'])->name('user.edit');
Route::put('/admin/user/{id}/update', [UserController::class, 'update'])->name('user.update');

// avatar
// Route::resource('/admin/avatar', AvatarController::class)->middleware(['admin']);
Route::get('/admin/avatar', [AvatarController::class, 'index'])->name('avatar.index');
Route::get('/admin/avatar/create', [AvatarController::class, 'create'])->name('avatar.create');
Route::post('/admin/avatar/store', [AvatarController::class, 'store'])->name('avatar.store');
Route::delete('/admin/avatar/{id}/delete', [AvatarController::class, 'destroy'])->name('avatar.destroy');

// images
Route::get('/admin/image', [ImageController::class, 'index'])->name('image.index');
require __DIR__.'/auth.php';
