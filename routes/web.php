<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/features', [HomeController::class, 'features'])->name('features');
Route::get('/quote', [HomeController::class, 'quote'])->name('quote');
Route::get('/team', [HomeController::class, 'team'])->name('team');
Route::get('/testimonial', [HomeController::class, 'testimonial'])->name('testimonial');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Content Management Routes
    Route::resource('/content', ContentController::class);

    // Media Management Routes
    Route::resource('/media', MediaController::class);

    // User Management Routes
    Route::resource('/users', UserController::class);
});

// group of routes for authenticated users
Route::middleware(['auth'])->group(function () {
    // categories
    
});

Route::get('/404', function () {
    return view('404'); // Or your 404 controller action
})->name('404');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
