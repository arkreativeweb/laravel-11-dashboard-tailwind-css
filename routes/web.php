<?php

use App\Http\Controllers\AbouthomeController;
use App\Http\Controllers\AlamatController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategorihomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TreatmentController;
use Illuminate\Support\Facades\Route;

// ini route frontend
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::get('/tentang-kami', [HomeController::class, 'about'])->name('about');
Route::get('/produk-kami', [HomeController::class, 'produk'])->name('produk');
Route::get('/artikel', [HomeController::class, 'artikel'])->name('artikel');
Route::get('/artikel-{slug}', [HomeController::class, 'artikeldetail'])->name('artikeldetail');





// ini route backend
Route::group(['middleware' => ['auth'], 'prefix' => 'dashboard', 'as' => 'admin.'], function () {

    Route::resource('artikel', ArtikelController::class);
    Route::resource('banner', BannerController::class);
    Route::resource('kategorihome', KategorihomeController::class);
    Route::resource('abouthome', AbouthomeController::class);
    Route::resource('treatment', TreatmentController::class);
    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::delete('/contact/{contact}', [ContactController::class, 'destroy'])->name('contact.destroy');
    Route::resource('alamat', AlamatController::class);
});






Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
