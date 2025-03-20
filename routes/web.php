<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AdminAuthController;
//use App\Http\Controllers\ContactController;

//Route::resource('news', NewsController::class);

Route::get('/', function () {return view('home');});
Route::get('/northlight', function () {return view('northlight');});
Route::get('/spec', function () {return view('inc.spec');});
Route::get('/accessories', function () {return view('accessories');});
Route::get('/support', function () {return view('support');});
Route::get('/about-us', function () {return view('about');});
Route::get('/terms-of-use', function () {return view('terms');});
Route::get('/privacy-policy', function () {return view('privacy');});
Route::get('/admin/create', function () {return view('admin.create');});

// Admin Authentication Routes
Route::get('admin', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::get('admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
Route::post('admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

// Group admin-only routes
Route::middleware('admin')->group(function () {
    Route::get('/admin/index', [NewsController::class, 'adminIndex'])->name('admin.index');
    Route::get('news/{slug}/admin-show', [NewsController::class, 'adminShow'])->name('news.adminShow');
    Route::get('news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('news', [NewsController::class, 'store'])->name('news.store');
    Route::get('news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');
    Route::put('news/{news}', [NewsController::class, 'update'])->name('news.update');
    Route::delete('news/{news}', [NewsController::class, 'destroy'])->name('news.destroy');
});

// Public (Visitors can read news)
Route::get('news', [NewsController::class, 'index'])->name('news.index');
Route::get('news/{slug}', [NewsController::class, 'show'])->name('news.show');