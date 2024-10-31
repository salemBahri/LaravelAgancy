<?php

use App\Http\Controllers\backend\BackendController;
use App\Http\Controllers\frontend\FrontendController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view(view: 'frontend.index');
// 

Route::get('/',[FrontendController::class,'index'])->name('index');



Route::get('/dashboard',[BackendController::class,'dashboard'])->name('dashboard');