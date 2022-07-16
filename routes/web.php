<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\Front\MainPageController;


/*
 * Global Routes
 * Routes that are used between both frontend and backend.
 */

// Switch between the included languages



Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{

    Route::get('', [MainPageController::class,'index']);
    Route::get('serviceDep1', [MainPageController::class,'serviceDep1']);
    Route::get('serviceDep2', [MainPageController::class,'serviceDep2']);
    Route::get('serviceDep3', [MainPageController::class,'serviceDep3']);
    Route::get('serviceDep4', [MainPageController::class,'serviceDep4']);

    Route::get('Contactus', [MainPageController::class,'contactus']);
    Route::get('AllProject', [MainPageController::class,'AllProject']);
    Route::get('Projectdetailes/{id}', [MainPageController::class,'Projectdetailes'])->name('Projectdetailes');
    Route::get('aboutseqaelbanaa', [MainPageController::class,'aboutus']);



    
});

Route::get('', [MainPageController::class,'index']);



Route::get('login/lang/{lang}', [LanguageController::class, 'swap'])->name('language');

/*
 * Frontend Routes
 * Namespaces indicate folder structure
 */
Route::group(['namespace' => 'Frontend', 'as' => 'frontend.'], function () {
    include_route_files(__DIR__ . '/frontend/');
});


// Route::group(['namespace' => 'Front', 'as' => 'front.'], function () {
//     include_route_files(__DIR__.'/front/');
// });


/*
 * Backend Routes
 * Namespaces indicate folder structure
 */

Route::group(['namespace' => 'Backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'admin'], function () {
    /*
     * These routes need view-backend permission
     * (good if you want to allow more than one group in the backend,
     * then limit the backend features by different roles or permissions)
     *
     * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
     * These routes can not be hit if the password is expired
     */

    include_route_files(__DIR__ . '/backend/');
});




