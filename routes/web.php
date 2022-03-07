<?php

use App\Http\Controllers\ClassphotoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SchooleventController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\SchooleventimagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->middleware('privateRoutes')->group(function () {
    Route::get('dashboard' , DashboardController::class)->name('dashboard');
    Route::post('logout_admin' , [LoginController::class, 'logout_admin'])->name('logout_admin');
    Route::resource('student' , StudentController::class)->except(['show']);
    Route::resource('faculty' , FacultyController::class)->except(['show']);
    Route::resource('classphoto' , ClassphotoController::class)->except(['show']);
    Route::resource('schoolevent' , SchooleventController::class)->except(['show']);
    Route::resource('schooleventimages' , SchooleventimagesController::class)->except(['show']);
});


Route::get('/' , [PagesController::class , 'welcome'])->name('/');
Route::prefix('page')->controller(LoginController::class)->group(function () {
   Route::get('login' , 'login')->name('login');
   Route::post('login' , 'login_check')->name('login_check');
});



