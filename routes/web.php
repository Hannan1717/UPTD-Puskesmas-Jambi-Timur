<?php

use App\Exports\StuntingExport;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\StuntingController;
use App\Http\Controllers\VisitorController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

// Define the pattern for slug
Route::pattern('slug', '[a-zA-Z0-9\-]+');

// Route::post('/article', [ArticleController::class, 'store'])->name('article.store');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/calculate', [HomeController::class, 'calculate'])->name('home.cal');
Route::get('/article/{slug}', [ArticleController::class, 'showGuest'])->name('home.article.show');
Route::get('/article/', [HomeController::class, 'articleHome'])->name('home.article');
Auth::routes();

Route::prefix('admin')->middleware('auth')->group(function () {
    // Route::get('/', [VisitorController::class, 'showCount'])->name('admin.dashboard');
    Route::get('/', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('article', ArticleController::class)->parameters([
        'article' => 'slug',
    ]);

    Route::get('kalkulator', [StuntingController::class, 'index'])->name('stunting');
    Route::post('kalkulator', [StuntingController::class, 'calculate'])->name('stunting.cal');
    Route::delete('stuntings/{id}', [StuntingController::class, 'destroy'])->name('stuntings.destroy');
    Route::get('/export', function () {
        return Excel::download(new StuntingExport, 'Data anak.xlsx');
    });
});
