<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\AdminDataController;
use App\Http\Controllers\screen\HomeController;

// Route::get('/', function () {
//     return view('screen.index');
// });


Route::get('/',[HomeController::class,'HomePage'])->name('home');



Route::prefix('admin')->controller(AdminController::class)->group( function(){
    Route::get('/login', 'login')->name('login');
    Route::get('/dashboard', 'dashboard')->name('dashboard')->middleware('admin.check');
    Route::post('/logout', 'logout')->name('logout');
    Route::post('/login', 'loginsubmit')->name('login.submit');
});

Route::prefix('admin')->group(function () {

    Route::get('/admindata', [AdminDataController::class, 'AdminData'])->name('admindata')->middleware('admin.check');

    Route::get('/admin-data-form', [AdminDataController::class, 'AdminDataForm'])->name('admindataform');

    Route::get('/admin-data-update-form/{id}', [AdminDataController::class, 'AdminDataUpdateForm'])->name('admindata.update.form');

    Route::get('/about',[AdminDataController::class, 'AboutData'])->name('admin.about');

    Route::get('about-create-form',[AdminDataController::class, 'AboutDataCreate'])->name('admin.about.form');

    Route::get('about-update-form',[AdminDataController::class, 'AboutDataUpdate'])->name('admin.about.update.form');

    Route::get('skill',[AdminDataController::class,'AdminSkill'])->name('admin.skill');

    Route::get('skill-create',[AdminDataController::class,'AdminSkillCreate'])->name('admin.skill.create');



    Route::post('/admindata', [AdminDataController::class, 'AdminDataSubmit'])->name('admindata.submit');

    Route::post('/about-create', [AdminDataController::class, 'AboutDataSubmit'])->name('about.data.submit');

    Route::post('skill-create',[AdminDataController::class,'AdminSkillSubmit'])->name('admin.skill.submit');

    Route::delete('skill-delete/{id}',[AdminDataController::class,'SkillDelete'])->name('admin.skill.delete');

    Route::put('/admindata/{id}', [AdminDataController::class, 'AdminDataUpdateSubmit'])->name('admindata.update.submit');

    Route::put('/about/{id}', [AdminDataController::class, 'AboutDataUpdateSubmit'])->name('about.data.update.submit');

});