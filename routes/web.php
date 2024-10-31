<?php

use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



//For Frontends pages
Route::controller(FrontendController::class)->group(function () {
    Route::get('/','index');
});

//For Backends pages
Route::middleware(['auth'])->controller(BackendController::class)->group(function () {
    Route::get('/admin/dashboard','AdminDashboard')->name('admindashboard');
    Route::get('/admin/logout','AdminLogout')->name('adminlogout');
    // Add other BackendController routes here
});





require __DIR__.'/auth.php';
