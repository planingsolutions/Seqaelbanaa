<?php
use App\Http\Controllers\Front\Main\SliderController;
use App\Http\Controllers\Front\Main\ComponentsController;

use App\Http\Controllers\Front\Main\AboutUsOneController;
use App\Http\Controllers\Front\Main\AboutUsMainController;
use App\Http\Controllers\Front\Main\AboutUsCatController;

use App\Http\Controllers\Front\Main\ProjectsController;
use App\Http\Controllers\Front\Main\WorkMainController;
use App\Http\Controllers\Front\Main\WorkStageController;

use App\Http\Controllers\Front\Website\detailsController;
use App\Http\Controllers\Front\Website\socialmediaController;


// Slider

    Route::get('ShowMainSlider', [SliderController::class, 'ShowMainSlider'])->name('ShowMainSlider');
    Route::post('Edit-MainSlider', [SliderController::class, 'editMainSlider']);
    Route::post('Store-MainSlider',[SliderController::class, 'storeMainSlider']);

// Categoryyy

    Route::get('ShowComponents', [ComponentsController::class, 'ShowComponents'])->name('ShowComponents');
    Route::post('Edit-Components', [ComponentsController::class, 'editComponents']);
    Route::post('Store-Components',[ComponentsController::class, 'storeComponents']);

// Aboutus1 //vision_2030

    Route::get('ShowVision', [AboutUsOneController::class, 'ShowVision'])->name('ShowVision');
    Route::post('Edit-Vision', [AboutUsOneController::class, 'editVision']);
    Route::post('Store-Vision',[AboutUsOneController::class, 'storeVision']);

// Aboutus2Main

    Route::get('ShowAboutUsMain', [AboutUsMainController::class, 'ShowAboutUsMain'])->name('ShowAboutUsMain');
    Route::post('Edit-AboutUsMain', [AboutUsMainController::class, 'editAboutUsMain']);
    Route::post('Store-AboutUsMain',[AboutUsMainController::class, 'storeAboutUsMain']);

// AboutusCate

    Route::get('ShowAboutUsCate', [AboutUsCatController::class, 'ShowAboutUsCate'])->name('ShowAboutUsCate');
    Route::post('Edit-AboutUsCate', [AboutUsCatController::class, 'editAboutUsCate']);
    Route::post('Store-AboutUsCate',[AboutUsCatController::class, 'storeAboutUsCate']);

// Projects


    Route::get('ShowMainProjects', [ProjectsController::class, 'ShowMainProjects'])->name('ShowMainProjects');
    Route::post('Edit-MainProjects', [ProjectsController::class, 'editMainProjects']);
    Route::post('Store-MainProjects',[ProjectsController::class, 'storeMainProjects']);
    Route::post('Delete-MainProjects',[ProjectsController::class, 'destroyMainProjects']);
    Route::post('Create-MainProjects',[ProjectsController::class, 'createSMainProjects']); 

// WorkMain

    Route::get('ShowWeWorkMain', [WorkMainController::class, 'ShowWeWorkMain'])->name('ShowWeWorkMain');
    Route::post('Edit-WeWorkMain', [WorkMainController::class, 'editWeWorkMain']);
    Route::post('Store-WeWorkMain',[WorkMainController::class, 'storeWeWorkMain']);

// WorkStage

    Route::get('ShowWorkStage', [WorkStageController::class, 'ShowWorkStage'])->name('ShowWorkStage');
    Route::post('Edit-WorkStage', [WorkStageController::class, 'editWorkStage']);
    Route::post('Store-WorkStage',[WorkStageController::class, 'storeWorkStage']);

// Servicess Main

    Route::get('ShowServicesMain', [ComponentsController::class, 'ShowServicesMain'])->name('ShowServicesMain');
    Route::post('Edit-ServicesMain', [ComponentsController::class, 'editServicesMain']);
    Route::post('Store-ServicesMain',[ComponentsController::class, 'storeServicesMain']);

// website details

Route::get('Websitedetails', [detailsController::class, 'showWebsitedetails'])->name('Websitedetails');
Route::post('Edit-Websitedetails', [detailsController::class, 'editWebsitedetails']);
Route::post('Store-Websitedetails',[detailsController::class, 'storeWebsitedetails']);


// website links
Route::get('SocialMedia', [socialmediaController::class, 'showSocialMedia'])->name('SocialMediaTable');
Route::post('Edit-SocialMedia', [socialmediaController::class, 'editSocialMedia']);
Route::post('Store-SocialMedia',[socialmediaController::class, 'storeSocialMedia']);
