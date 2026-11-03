<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('home');
});

// PART A: MVC and routes
Route::get('/hello/{your_name}', function ($your_name) {
    return "Hello, " . $your_name;
});

Route::get('/about', [AboutController::class, 'index']);

// PART B: Resource controller
Route::resource('students', StudentController::class);

// PART C: Explicit route model binding
Route::get('/roll/{your_roll}', function (Student $your_roll) {
    return view('students.show', ['student' => $your_roll]);
});

// PART E: JSON API
Route::get('/api/students', function () {
    return response()->json(Student::all());
});