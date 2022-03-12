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
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\YearlevelController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\SectionController;
use Illuminate\Support\Facades\Route;

// landing page
Route::get('/', [PagesController::class , 'welcome'])->name('/')->middleware('publicRoutes');
// landing page

Route::prefix('dashboard')->middleware('privateRoutes')->group(function () {
    Route::get('dashboard', DashboardController::class)->name('dashboard');
    Route::post('logout_admin', [LoginController::class, 'logout_admin'])->name('logout_admin');
    Route::resource('student', StudentController::class)->except(['show','destroy']);
    Route::resource('faculty', FacultyController::class)->except(['show','destroy']);
    Route::resource('classphoto', ClassphotoController::class)->except(['show']);
    Route::resource('schoolevent', SchooleventController::class)->except(['show']);
    Route::resource('schooleventimages', SchooleventimagesController::class)->except(['index','create','store','show','edit']);
});

Route::prefix('category')->middleware('privateRoutes')->group(function () {
    Route::resource('yearlevel' , YearlevelController::class)->except(['show']);
    Route::resource('course' , CourseController::class)->except(['show']);
    Route::resource('section' , SectionController::class)->except(['show']);
});

Route::prefix('multiple')->middleware('privateRoutes')->group(function () {
    Route::post('store_multiple/{id}', StoreMultipleImage::class)->name('store_multiple');
    Route::post('delete_student', [DeleteAllController::class, 'delete_student'])->name('delete_student');
    Route::post('delete_faculty', [DeleteAllController::class, 'delete_faculty'])->name('delete_faculty');
});

Route::prefix('page')->middleware('publicRoutes')->controller(LoginController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'login_check')->name('login_check');
});

Route::prefix('page')->middleware('publicRoutes')->controller(PagesController::class)->group(function () {
    
    Route::get('students', 'students')->name('students');
    Route::get('students/{id}', 'select_student')->name('select_student');

    Route::get('facultys', 'facultys')->name('facultys');
    Route::get('facultys/{id}', 'select_faculty')->name('select_faculty');

    Route::get('classphotos', 'classphotos')->name('classphotos');

    Route::get('schoolevents', 'schoolevents')->name('schoolevents');
    Route::get('schoolevents/{id}', 'select_schoolevent')->name('select_schoolevent');

});

Route::prefix('download')->middleware('publicRoutes')->controller(DownloadController::class)->group(function () {

    Route::get('student_img/{id}' , 'student_img')->name('student_img');
    Route::get('faculty_img/{id}' , 'faculty_img')->name('faculty_img');
    Route::get('classphoto_img/{id}' , 'classphoto_img')->name('classphoto_img');
    Route::get('schoolevent_img/{id}' , 'schoolevent_img')->name('schoolevent_img');

});