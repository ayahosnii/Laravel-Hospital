<?php

use App\Http\Controllers\Admin\MainCategoryController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    ##################### Doctors ########################

    Route::get('/', [App\Http\Controllers\AdminController::class, 'index'])->name('admin');
    Route::get('/add-doctors', [App\Http\Controllers\AdminController::class, 'addDoctors'])->name('add.doctor');
    Route::get('/add-services', [AdminController::class, 'addServices'])->name('add.sp');
    Route::post('/save-services', [AdminController::class, 'saveServicesToDoctor'])->name('save.services');
    Route::post('/store-doctors', [App\Http\Controllers\DoctorController::class, 'store'])->name('store.doctor');

################# End Doctor ############################
    #################################### Begin LanguageRequest Route #######################################
    Route::group(['prefix' => 'languages'], function (){
        Route::get('/', [App\Http\Controllers\admin\LanguageController::class, 'index'])->name('admin.languages');
        Route::get('create', [App\Http\Controllers\admin\LanguageController::class, 'create'])->name('admin.languages.create');
        Route::post('store', [App\Http\Controllers\admin\LanguageController::class, 'store'])->name('admin.languages.store');

        Route::get('edit/{id}', [App\Http\Controllers\admin\LanguageController::class, 'edit'])->name('admin.languages.edit');
        Route::post('update/{id}', [App\Http\Controllers\admin\LanguageController::class, 'update'])->name('admin.languages.update');


        Route::get('delete/{id}', [App\Http\Controllers\admin\LanguageController::class, 'destroy'])->name('admin.languages.delete');
    });
    #################################### End   LanguageRequest Route #######################################
################### Start Main Categories ###############
Route::resource('main-category', MainCategoryController::class);
    Route::group(['prefix' => 'main-categories'], function (){
        Route::get('/', [MainCategoryController::class, 'index'])->name('admin.maincategories');
        Route::get('create', [MainCategoryController::class, 'create'])->name('admin.maincategories.create');
        Route::post('store', [MainCategoryController::class, 'store'])->name('admin.maincategories.store');

        Route::get('edit/{id}', [MainCategoryController::class, 'edit'])->name('admin.maincategories.edit');
        Route::post('update/{id}', [MainCategoryController::class, 'update'])->name('admin.maincategories.update');


        Route::get('delete/{id}', [MainCategoryController::class, 'destroy'])->name('admin.maincategories.delete');
    });
################### End   Main Categories ###############
 });
    Route::get('admin/login', [App\Http\Controllers\AdminAuhController::class, 'getLogin'])->name('adminLogin');
   Route::post('login', [App\Http\Controllers\AdminAuhController::class, 'postLogin'])->name('adminLoginPost');
   Route::get('admin/logout', [App\Http\Controllers\AdminAuhController::class, 'logout'])->name('adminLogout');


