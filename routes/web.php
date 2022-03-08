<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/store-doctors', [App\Http\Controllers\DoctorController::class, 'store'])->name('store.doctor');
Route::get('/doctor', [App\Http\Controllers\DoctorController::class, 'showDoctors'])->name('doctor');
Route::get('/profile', [App\Http\Controllers\DoctorController::class, 'profile'])->name('profile');
Route::get('/specializations', [App\Http\Controllers\DoctorController::class, 'specializations'])->name('specializations');
Route::get('/specializations/{doctors_id}', [App\Http\Controllers\DoctorController::class, 'doctors'])->name('doctors');
Route::get('/doctor/{doctorId}', [App\Http\Controllers\DoctorController::class, 'services'])->name('doctor.profile');
Route::get('/profile',[App\Http\Controllers\ProfileController::class, 'indexProfile'])->name('profile');
Route::get('/profile/edit',[App\Http\Controllers\ProfileController::class, 'editProfile'])->name('profile.edit');
Route::post('/profile/update',[App\Http\Controllers\ProfileController::class, 'updateProfile'])->name('profile.update');

