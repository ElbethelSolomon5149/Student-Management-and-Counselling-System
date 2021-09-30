<?php

use App\Http\Controllers\ConcilerDashbordController;
use App\Http\Controllers\FamillyDashbordController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\StudentResultController;
use App\Http\Controllers\StudentsCommentController;
use App\Http\Controllers\StudetDashbordController;
use App\Http\Controllers\TeacherDashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('auth')->group(function () {
    Route::resource('student', StudentController::class);
    Route::get('student_dashboard', [StudetDashbordController::class,'index'])->name('student_dashboard');
    Route::get('student_contact_counciler', [StudentController::class,'student_contact_counciler'])->name('student_contact_counciler');
    Route::get('view_student_result', [StudentController::class,'view_student_result'])->name('view_student_result');
    Route::get('teacher_contact_counciler', [TeacherDashboardController::class,'teacher_contact_counciler'])->name('teacher_contact_counciler');
    Route::get('teacher_dashboard', [TeacherDashboardController::class,'index'])->name('teacher_dashboard');
    Route::get('conciliar_dashboard.comments', [ConcilerDashbordController::class,'comments'])->name('conciliar_dashboard.comments');
    Route::resource('conciliar_dashboard', ConcilerDashbordController::class);
    Route::resource('students_comment', StudentsCommentController::class);

    Route::get('family_dashboard', [FamillyDashbordController::class,'index'])->name('family_dashboard');
    Route::get('family_create', [FamillyDashbordController::class,'create'])->name('family_create');
    Route::post('family_create', [FamillyDashbordController::class,'store'])->name('family_create');

    Route::resource('student_result', StudentResultController::class);

    Route::resource('user', UserController::class);

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
