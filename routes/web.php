<?php

use Illuminate\Support\Facades\Route;


Route::view('welcome', 'auth.welcome');
Route::view('login', 'auth.login');
Route::view('register', 'auth.register');

Route::prefix('pregnant-mother')->group(function(){
    Route::view('', 'pregnant_mother.home.index');
    Route::view('diary', 'pregnant_mother.diary.index');
    Route::view('pregnancy-test', 'pregnant_mother.pregnancy_test.index');
    Route::view('health-records', 'pregnant_mother.health_records.index');
    Route::view('consultation', 'pregnant_mother.consultation.index');
    Route::view('health-education', 'pregnant_mother.health_education.index');
});

Route::get('/', function () {
    return view('welcome');
});
