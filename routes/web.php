<?php

use App\Http\Controllers\ClassphotoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SchooleventController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\SchooleventimagesController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StoreMultipleImage;
use App\Http\Controllers\DeleteAllController;
use App\Http\Controllers\Search;
use App\Http\Controllers\YearlevelController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SectionController;
use Illuminate\Support\Facades\Route;

Route::prefix('dashboard')->middleware('privateRoutes')->group(function () {
    Route::get('dashboard', DashboardController::class)->name('dashboard');
    Route::post('logout_admin', [LoginController::class, 'logout_admin'])->name('logout_admin');
    Route::resource('student', StudentController::class)->except(['show']);
    Route::resource('faculty', FacultyController::class)->except(['show']);
    Route::resource('classphoto', ClassphotoController::class)->except(['show']);
    Route::resource('schoolevent', SchooleventController::class);
    Route::resource('schooleventimages', SchooleventimagesController::class)->except(['show']);
});

Route::prefix('category')->middleware('privateRoutes')->group(function () {
    Route::resource('yearlevel' , YearlevelController::class);
    Route::resource('course' , CourseController::class);
    Route::resource('section' , SectionController::class);
});

Route::prefix('multiple')->middleware('privateRoutes')->group(function () {
    Route::post('store_multiple/{id}', StoreMultipleImage::class)->name('store_multiple');
    Route::delete('delete_events/{id}', [DeleteAllController::class, 'event_images'])->name('delete_events');
});



Route::prefix('page')->controller(LoginController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'login_check')->name('login_check');

    Route::get('/', [PagesController::class, 'welcome'])->name('/');
    Route::get('students', [PagesController::class, 'students'])->name('students');
    Route::get('students/{id}', [PagesController::class, 'select_student'])->name('select_student');

    Route::get('student_name', [Search::class, 'student_name'])->name('student_name');
});
