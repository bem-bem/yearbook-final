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
    Route::post('delete_student', [DeleteAllController::class, 'delete_student'])->name('delete_student');
    Route::post('delete_faculty', [DeleteAllController::class, 'delete_faculty'])->name('delete_faculty');
});



Route::prefix('page')->controller(LoginController::class)->group(function () {
    Route::get('login', 'login')->name('login');
    Route::post('login', 'login_check')->name('login_check');

    Route::get('/', [PagesController::class, 'welcome'])->name('/');
    Route::get('students', [PagesController::class, 'students'])->name('students');
    Route::get('students/{id}', [PagesController::class, 'select_student'])->name('select_student');

    Route::get('facultys', [PagesController::class, 'facultys'])->name('facultys');
    Route::get('facultys/{id}', [PagesController::class, 'select_faculty'])->name('select_faculty');

    Route::get('classphotos', [PagesController::class, 'classphotos'])->name('classphotos');
    Route::get('classphotos/{id}', [PagesController::class, 'select_classphoto'])->name('select_classphoto');

    Route::get('schoolevents', [PagesController::class, 'schoolevents'])->name('schoolevents');
    Route::get('schoolevents/{id}', [PagesController::class, 'select_schoolevent'])->name('select_schoolevent');

    Route::get('student_name', [Search::class, 'student_name'])->name('student_name');
    Route::get('faculty_name', [Search::class, 'faculty_name'])->name('faculty_name');

    Route::get('section', [Search::class, 'section'])->name('section');
    Route::get('course', [Search::class, 'course'])->name('course');
    Route::get('yearlevel', [Search::class, 'yearlevel'])->name('yearlevel');

});
