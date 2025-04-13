<?php

use App\Http\Controllers\Doctor\PatientsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Doctor\CalendarController;

Route::get('/', function () {
	return redirect('/doctor/patients/');
});
Route::get('/doctor/patients', [PatientsController::class, 'index'])->name('doctor.patients.index');
Route::get('/doctor/patients/{patient}', [PatientsController::class, 'detail'])->name('doctor.patients.detail');

Route::get('/doctor/calendar', [CalendarController::class, 'index'])->name('doctor.calendar.index');
