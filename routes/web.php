<?php

use App\Http\Controllers\AllController;
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

Route::resource('/admin/user', UserController::class)->middleware(['auth', 'admin']);

require __DIR__.'/auth.php';
