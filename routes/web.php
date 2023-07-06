<?php

use App\Http\Controllers\courses\CourseController;
use App\Http\Controllers\students\StudentsController;
use App\Http\Controllers\teachers\TeachersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    //student routes
    Route::prefix('students')->group(function(){
        Route::get('/',[StudentsController::class,'index'])->name('students.index');
        Route::get('/create',[StudentsController::class,'create'])->name('students.create');
        Route::post('/store',[StudentsController::class,'store'])->name('students.store');
        Route::get('/{id}/edit',[StudentsController::class,'edit'])->name('students.edit');
        Route::patch('/{id}',[StudentsController::class,'update'])->name('students.update');
        Route::delete('/{id}',[StudentsController::class,'destroy'])->name('students.destroy');
    });
    //teachers routes
    Route::prefix('teachers')->group(function(){
        Route::get('/',[TeachersController::class,'index'])->name('teachers.index');
        Route::get('/create',[TeachersController::class,'create'])->name('teachers.create');
        Route::post('/store',[TeachersController::class,'store'])->name('teachers.store');
        Route::get('/{id}/edit',[TeachersController::class,'edit'])->name('teachers.edit');
        Route::patch('/{id}',[TeachersController::class,'update'])->name('teachers.update');
        Route::delete('/{id}',[TeachersController::class,'destroy'])->name('teachers.destroy');
    });
    //courses routes
    Route::prefix('courses')->group(function(){
        Route::get('/',[CourseController::class,'index'])->name('courses.index');
        Route::get('/create',[CourseController::class,'create'])->name('courses.create');
        Route::post('/store',[CourseController::class,'store'])->name('courses.store');
        Route::get('/{id}/edit',[CourseController::class,'edit'])->name('courses.edit');
        Route::patch('/{id}',[CourseController::class,'update'])->name('courses.update');
        Route::delete('/{id}',[CourseController::class,'destroy'])->name('courses.destroy');
    });
    //scores routes
    //course ifo routes

});
