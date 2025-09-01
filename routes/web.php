<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ContactMessageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    // Admin dashboard landing
    Route::get('/', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::resource('heroes', HeroController::class)->except(['show']);
    Route::resource('abouts', AboutController::class)->except(['show']);
    Route::resource('experiences', ExperienceController::class)->except(['show']);
    Route::resource('partners', PartnerController::class)->except(['show']);
    // Menu and settings
    Route::get('menu', [\App\Http\Controllers\Admin\MenuItemController::class, 'index'])->name('menu.index');
    Route::get('menu/create', [\App\Http\Controllers\Admin\MenuItemController::class, 'create'])->name('menu.create');
    Route::post('menu', [\App\Http\Controllers\Admin\MenuItemController::class, 'store'])->name('menu.store');
    Route::get('menu/{menu}/edit', [\App\Http\Controllers\Admin\MenuItemController::class, 'edit'])->name('menu.edit');
    Route::patch('menu/{menu}', [\App\Http\Controllers\Admin\MenuItemController::class, 'update'])->name('menu.update');
    Route::delete('menu/{menu}', [\App\Http\Controllers\Admin\MenuItemController::class, 'destroy'])->name('menu.destroy');

    Route::get('settings', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('settings.index');
    Route::post('settings', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('settings.update');
    Route::get('messages', [ContactMessageController::class, 'index'])->name('messages.index');
    Route::get('messages/{message}', [ContactMessageController::class, 'show'])->name('messages.show');
    Route::delete('messages/{message}', [ContactMessageController::class, 'destroy'])->name('messages.destroy');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
