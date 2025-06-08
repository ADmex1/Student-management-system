<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\StudyProgramsController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CoursesController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/faculty', [FacultyController::class, 'index'])->name('faculty.index');
Route::post('/faculty', [FacultyController::class, 'store'])->name('faculty.store');
Route::get('/faculty/{id}', [FacultyController::class, 'viewperid'])->name('faculty.viewperid');

Route::get('/studyprograms', [StudyProgramsController::class, 'index'])->name('studyprograms.index');
Route::post('/studyprograms', [StudyProgramsController::class, 'store'])->name('studyprograms.store');
Route::get('/studyprograms/{id}', [StudyProgramsController::class, 'viewperid'])->name('studyprograms.viewperid');


Route::get('/students', [StudentsController::class, 'index'])->name('students.index');
Route::post('/students', [StudentsController::class, 'store'])->name('students.store');
Route::get('/students/{id}', [StudentsController::class, 'viewperid'])->name('students.viewperid');

Route::post('/users', [UserController::class, 'store'])->name('users.store');
Route::post('/login', [UserController::class, 'login'])->name('users.login');


Route::get('/courses', [CoursesController::class, 'index'])->name('courses.index');
Route::post('/courses', [CoursesController::class, 'store'])->name('courses.store');
Route::get('/courses/{id}', [CoursesController::class, 'viewperid'])->name('courses.viewperid');