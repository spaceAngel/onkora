<?php

use App\Http\Controllers\Doctor\PatientsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Doctor\CalendarController;
use App\Http\Controllers\Doctor\ProblemsController;

Route::get('/', function () {
	return redirect('/doctor/patients/');
});
Route::get('/doctor/patients', [PatientsController::class, 'index'])->name('doctor.patients.index');
Route::get('/doctor/patients/{patient}', [PatientsController::class, 'detail'])->name('doctor.patients.detail');

Route::get('/doctor/calendar', [CalendarController::class, 'index'])->name('doctor.calendar.index');
Route::get('/doctor/problems', [ProblemsController::class, 'index'])->name('doctor.problems.index');
