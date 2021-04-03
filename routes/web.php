<?php

use Illuminate\Support\Facades\Route;


Route::view('intro', 'intro.index');
Route::view('welcome', 'auth.welcome');
Route::view('login', 'auth.login'); //clear
Route::view('register', 'auth.register'); //clear


Route::prefix('pregnant-mother')->group(function(){
    Route::view('', 'pregnant_mother.home.index');
    Route::view('diary', 'pregnant_mother.diary.index');
    Route::view('pregnancy-test', 'pregnant_mother.pregnancy_test.index');
    Route::view('health-records', 'pregnant_mother.health_records.index'); //clear
    Route::view('consultation', 'pregnant_mother.consultation.index');
    Route::view('health-education', 'pregnant_mother.health_education.index');
    Route::view('health-education/detail', 'pregnant_mother.health_education.detail');

    Route::prefix('profile')->group(function(){
        Route::view('', 'pregnant_mother.profile.index'); //clear
        Route::view('identity', 'pregnant_mother.profile.identity');
        Route::view('action', 'pregnant_mother.profile.action');
        //Route::view('action/view', 'pregnant_mother.profile.view-action');
        Route::view('references', 'pregnant_mother.profile.reference');
        Route::view('edit', 'pregnant_mother.profile.edit'); //clear
    });

});

Route::prefix('doctor')->group(function(){
    Route::view('summary', 'doctor.summary.index'); //clear
    Route::view('visit', 'doctor.visit.index'); //clear
    Route::view('report', 'doctor.report.index'); //clear
    Route::view('profile', 'doctor.profile.index'); //clear

    Route::prefix('patient')->group(function(){
        Route::view('', 'doctor.patient.index'); //clear
        
        Route::prefix('profile')->group(function(){
            Route::view('', 'doctor.patient.profile'); //clear
            Route::view('identity', 'doctor.patient.identity'); //clear
            Route::view('history-of-current-pregnancy', 'doctor.patient.history_pregnancy.current'); //clear
            Route::view('previous-pregnancy-history', 'doctor.patient.history_pregnancy.previous'); //clear
            Route::view('contraceptive-history', 'doctor.patient.history_pregnancy.contraseption'); //clear
            Route::view('physical-examination', 'doctor.patient.physical-examination'); //clear
            Route::view('lab-examination', 'doctor.patient.lab-examination'); //clear
            Route::view('action', 'doctor.patient.action'); //clear
            Route::view('references', 'doctor.patient.references'); //clear
        });
    });
});

Route::get('/', function () {
    return view('welcome');
});
