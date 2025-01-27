<?php

use App\Models\Trainer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TrainerController;
use App\Http\Controllers\ScheduleController;

//Frontend route

Route::get('/' , [HomeController::class, 'home'])->name('home');
Route::get('/about' , [HomeController::class, 'about'])->name('about');
Route::get('/contact' , [HomeController::class, 'contact'])->name('contact');

Route::get('/membership' , [HomeController::class, 'membership'])->name('membership');


Route::get('/classes' , [HomeController::class, 'classes'])->name('classes');


Route::get('/testimonial' , [HomeController::class, 'testimonial'])->name('testimonial');


Route::get('/trainers' , [HomeController::class , 'show'])->name('trainers');

//Contact Route
Route::post('/contact/submit' , [ContactController::class , 'submit'])->name('contact.submit');

// Admin

Route::get('/dashboard',function(){
    return view('backend.Dashboard');
    })->name('dashboard');

Route::get('/admin/trainer' , [TrainerController::class , 'show'])->name('trainer');
Route::post('trainer/store' , [TrainerController::class , 'store'])->name('trainer.store');
Route::get('/trainer/select', [TrainerController::class, 'select'])->name('trainer.select');

Route::get('/trainer/{id}/edit', [TrainerController::class, 'edit'])->name('trainer.edit');
Route::put('/trainer/{id}', [TrainerController::class, 'update'])->name('trainer.update');

Route::delete('/trainers/{id}', [TrainerController::class, 'destroy'])->name('trainer.destroy');

//Schedule

Route::get('/schedules' , [ScheduleController::class , 'schedules'])->name('schedules');
Route::post('/schedule', [ScheduleController::class, 'store'])->name('schedule.store');

Route::get('/schedule/show', [ScheduleController::class, 'show'])->name('schedule.show');
Route::get('/schedules/{id}/edit', [ScheduleController::class, 'edit'])->name('schedule.edit');
Route::put('/schedules/{id}', [ScheduleController::class, 'update'])->name('schedule.update');
Route::delete('/schedules/{id}', [ScheduleController::class, 'destroy'])->name('schedule.destroy');








