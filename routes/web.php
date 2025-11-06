<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::prefix('admin')->group(function () {
    Route::resource('dashboard' , \App\Http\Controllers\Admin\DashboardController::class);
    Route::resource('courses' , \App\Http\Controllers\Admin\CoursesController::class);
    Route::resource('message' , \App\Http\Controllers\Admin\MessageController::class);
    Route::resource('quiz' , \App\Http\Controllers\Admin\QuizController::class);
    Route::resource('profile' , \App\Http\Controllers\Admin\ProfileController::class);
});
    
