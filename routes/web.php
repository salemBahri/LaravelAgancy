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
    Route::get('/delete/education/{id}','DeleteEducation')->name('deleteeducation');
    Route::post('/update/education/{id}','UpdateEducation')->name('updateeducation');


    // Experiences
    Route::get('/add/experience','AddExperience')->name('addexperience');
    Route::post('/save/experience','SaveExperience')->name('saveExperience');
    Route::get('/experiences','ShowExperience')->name('showexperience');
    

    
    // Skills
    Route::get('/add/skill','AddSkill')->name('addskill');
    Route::post('/save/skill','SaveSkill')->name('saveSkill');
    Route::get('/skills','ShowSkill')->name('showskill');



    // Awards
    Route::get('/add/award','AddAward')->name('addaward');
    Route::post('/save/award','SaveAward')->name('saveAward');
    Route::get('/awards','ShowAward')->name('showaward');


    // Services
    Route::get('/add/service','AddService')->name('addservice');
    Route::post('/save/service','SaveService')->name('saveService');
    Route::get('/services','ShowService')->name('showservice');
    
    
    // Clients
    Route::get('/add/client','AddClient')->name('addclient');
    Route::post('/save/client','SaveClient')->name('saveClient');
    Route::get('/clients','ShowClient')->name('showclient');
    
    
    // Projects
    Route::get('/add/project','AddProject')->name('addproject');
    
    
    // Project objectives
    Route::get('/add/objective','AddObjective')->name('addobjective');



    // General Settings
    Route::get('/settings','GeneralSettings')->name('generalsettings');
    Route::post('/save/settings','SaveSettings')->name('savesettings');
    Route::get('/edit/settings','EditSettings')->name('editsettings');
    Route::post('/update/settings','UpdateSettings')->name('updatesettings');



        //images
        Route::get('/image','TestImage')->name('testimage');
        Route::post('/save/image','SaveImage')->name('saveimage');
  


        //gallery
        Route::get('/gallery','ShowGallery')->name('showgallery');
        

        

});








require __DIR__.'/auth.php';
