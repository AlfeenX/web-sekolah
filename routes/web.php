<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Public akses
Route::get('/', function () {
    return view('pages.beranda');
})->name('beranda');

Route::get('/profil-sekolah', function () {
    return view('pages.profil-sekolah');
})->name('profil-sekolah');

Route::get('/berita', function () {
    return view('pages.berita');
})->name('berita');

Route::get('/tentang', function () {
    return view('pages.tentang');
})->name('tentang');

Route::get('/ppdb', function () {
    return view('pages.ppdb');
})->name('ppdb');


// Admin akses
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('/dashboard/posts', PostController::class)
    ->middleware(['auth', 'verified'])->names('dashboard.posts');

Route::get('/dashboard/categories', function () {
    return view('admin-pages.categories');
})->middleware(['auth', 'verified'])->name('dashboard.categories');

Route::get('/dashboard/tags', function () {
    return view('admin-pages.tags');
})->middleware(['auth', 'verified'])->name('dashboard.tags');

Route::get('/dashboard/users', function () {
    return view('admin-pages.users');
})->middleware(['auth', 'verified'])->name('dashboard.users');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
