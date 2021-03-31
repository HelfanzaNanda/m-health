<?php

use Illuminate\Support\Facades\Route;


Route::view('welcome', 'auth.welcome');
Route::view('login', 'auth.login');
Route::view('register', 'auth.register');

Route::view('intro', 'pregnant_mother.intro_slider.index');

Route::prefix('pregnant-mother')->group(function(){
    Route::view('', 'pregnant_mother.home.index');
    Route::view('diary', 'pregnant_mother.diary.index');
    Route::view('pregnancy-test', 'pregnant_mother.pregnancy_test.index');
    Route::view('health-records', 'pregnant_mother.health_records.index');
    Route::view('consultation', 'pregnant_mother.consultation.index');
    Route::view('health-education', 'pregnant_mother.health_education.index');
    Route::view('health-education/detail', 'pregnant_mother.health_education.detail');

    Route::prefix('profile')->group(function(){
        Route::view('', 'pregnant_mother.profile.index');
        Route::view('identity', 'pregnant_mother.profile.identity');
        Route::view('action', 'pregnant_mother.profile.action');
        Route::view('action/view', 'pregnant_mother.profile.view-action');
        Route::view('references', 'pregnant_mother.profile.reference');
        Route::view('edit', 'pregnant_mother.profile.edit');
    });

});

Route::prefix('doctor')->group(function(){
    Route::view('summary', 'doctor.summary.index');
    Route::view('visit', 'doctor.visit.index');
    Route::view('report', 'doctor.report.index');
    Route::view('profile', 'doctor.profile.index');

    Route::prefix('patient')->group(function(){
        Route::view('', 'doctor.patient.index');
        
        Route::prefix('profile')->group(function(){
            Route::view('', 'doctor.patient.profile');
            Route::view('identity', 'doctor.patient.identity');
            Route::view('history-of-current-pregnancy', 'doctor.patient.history_pregnancy.current');
            Route::view('previous-pregnancy-history', 'doctor.patient.history_pregnancy.previous');
            Route::view('contraceptive-history', 'doctor.patient.history_pregnancy.contraseption');
            Route::view('physical-examination', 'doctor.patient.physical-examination');
            Route::view('lab-examination', 'doctor.patient.lab-examination');
            Route::view('action', 'doctor.patient.action');
            Route::view('references', 'doctor.patient.references');
        });
    });
});

Route::get('/', function () {
    return view('welcome');
});
