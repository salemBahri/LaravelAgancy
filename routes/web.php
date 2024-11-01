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

    // Educations
    Route::get('/add/education','AddEducation')->name('addeducation');
    Route::post('/save/education','SaveEducation')->name('saveEducation');
    Route::get('/educations','ShowEducation')->name('showeducation');


    // Experiences
    Route::get('/add/experience','AddExperience')->name('addexperience');

    
    // Skills
    Route::get('/add/skill','AddSkill')->name('addskill');



    // Awards
    Route::get('/add/award','AddAward')->name('addaward');


    // Services
    Route::get('/add/service','AddService')->name('addservice');
    
    
    // Clients
    Route::get('/add/client','AddClient')->name('addclient');
    
    
    // Projects
    Route::get('/add/project','AddProject')->name('addproject');
    
    
    // Project objectives
    Route::get('/add/objective','AddObjective')->name('addobjective');



    // General Settings
    Route::get('/settings','GeneralSettings')->name('generalsettings');

});





require __DIR__.'/auth.php';
