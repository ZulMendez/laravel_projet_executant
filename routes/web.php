<?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AvatarController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ImageController;
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
Route::put('admin/user/{user}/edit', [UserController::class, 'updateMembre'])->name('membre.update');

// avatar
// Route::resource('/admin/avatar', AvatarController::class)->middleware(['admin']);
Route::get('/admin/avatar', [AvatarController::class, 'index'])->name('avatar.index');
Route::get('/admin/avatar/create', [AvatarController::class, 'create'])->name('avatar.create');
Route::post('/admin/avatar/store', [AvatarController::class, 'store'])->name('avatar.store');
Route::delete('/admin/avatar/{id}/delete', [AvatarController::class, 'destroy'])->name('avatar.destroy');

// images
Route::get('/admin/image', [ImageController::class, 'index'])->name('image.index');
Route::get('/admin/image/create', [ImageController::class, 'create'])->name('image.create');
Route::post('/admin/image/store', [ImageController::class, 'store'])->name('image.store');
Route::delete('/admin/image/{id}/delete', [ImageController::class, 'destroy'])->name('image.destroy');
Route::get('/admin/image/{id}', [ImageController::class, 'show'])->name('image.show');
Route::get('/admin/image/{id}/edit', [ImageController::class, 'edit'])->name('image.edit');
Route::put('/admin/image/{id}/update', [ImageController::class, 'update'])->name('image.update');

// categories
Route::get('/admin/categorie', [CategorieController::class, 'index'])->name('categorie.index');
Route::get('/admin/categorie/create', [CategorieController::class, 'create'])->name('categorie.create');
Route::post('/admin/categorie/store', [CategorieController::class, 'store'])->name('categorie.store');
Route::delete('/admin/categorie/{id}/delete', [CategorieController::class, 'destroy'])->name('categorie.destroy');
Route::get('/admin/categorie/{id}/edit', [CategorieController::class, 'edit'])->name('categorie.edit');
Route::put('/admin/categorie/{id}/update', [CategorieController::class, 'update'])->name('categorie.update');

// gallerie
Route::get('/admin/gallerie', [ImageController::class, 'gallerie'])->name('gallerie.index');
Route::get('/admin/{image}/download', [ImageController::class, 'download'])->name('gallerie.download');

// blog
Route::get('admin/blog', [ArticleController::class, 'blog'])->name('blog.index');
Route::resource('admin/article', ArticleController::class);

require __DIR__.'/auth.php';
