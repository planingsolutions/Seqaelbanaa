<?php
use App\Http\Controllers\Front\PageThreeController;
use App\Http\Controllers\Front\About\Aboutsection1;
use App\Http\Controllers\Front\About\Aboutsection2;
use App\Http\Controllers\Front\About\Aboutsection3;
use App\http\Controllers\Front\servicess\ServicessController;
use App\http\Controllers\Front\Testimonials\testimonialsController;
use App\Http\Controllers\Front\Website\detailsController;
use App\Http\Controllers\Front\Website\socialmediaController;





    Route::get('MainsectionTable', [PageThreeController::class, 'index'])->name('MainsectionTable');
    Route::post('Edit-MainsectionTable', [PageThreeController::class, 'edit']);
    Route::post('Store-MainsectionTable',[PageThreeController::class, 'store']);
    Route::post('Delete-MainsectionTable',[PageThreeController::class, 'destroy']);
    Route::post('Create-MainsectionTable',[PageThreeController::class, 'create']); 


    Route::get('AboutussectionTable1', [Aboutsection1::class, 'showsec1'])->name('AboutussectionTablesection1');
    Route::post('Edit1-AboutussectionTable', [Aboutsection1::class, 'editsec1']);
    Route::post('Store1-AboutussectionTable',[Aboutsection1::class, 'storesec1']);
    Route::post('Delete1-AboutussectionTable',[Aboutsection1::class, 'destroysec1']);
    Route::post('Create1-AboutussectionTable',[Aboutsection1::class, 'createsec1']); 



    Route::get('AboutussectionMain', [Aboutsection2::class, 'showMain'])->name('AboutussectionMain');
    Route::post('editMain', [Aboutsection2::class, 'editMain']);
    Route::post('storeMain',[Aboutsection2::class, 'storeMain']);
    Route::post('destroyMain',[Aboutsection2::class, 'destroyMain']);


    Route::get('aboutuslists', [Aboutsection2::class, 'showlist'])->name('aboutuslists');
    Route::post('editlist', [Aboutsection2::class, 'editlist']);
    Route::post('storelist',[Aboutsection2::class, 'storelist']);
    Route::post('destroylist',[Aboutsection2::class, 'destroylist']);

    Route::get('aboutussection3', [Aboutsection3::class, 'showsec3'])->name('aboutussection3');
    Route::post('Edit3-AboutussectionTable', [Aboutsection3::class, 'editsec3']);
    Route::post('Store3-AboutussectionTable',[Aboutsection3::class, 'storesec3']);
    Route::post('Delete3-AboutussectionTable',[Aboutsection3::class, 'destroysec3']);
    Route::post('Create3-AboutussectionTable',[PageThreeCAboutsection3ontroller::class, 'createsec3']); 

    Route::get('Servicess', [ServicessController::class, 'showservicess'])->name('ServicessTable');
    Route::post('Edit-servicess', [ServicessController::class, 'editserv']);
    Route::post('Store-servicess',[ServicessController::class, 'storeserv']);
    Route::post('Delete-servicess',[ServicessController::class, 'destroyserv']);
    Route::post('Create-servicess',[ServicessController::class, 'createserv']); 

    Route::get('testimonials', [testimonialsController::class, 'showtestimonials'])->name('testimonials');
    Route::post('edittestimonials', [testimonialsController::class, 'edittestimonials']);
    Route::post('storetestimonials',[testimonialsController::class, 'storetestimonials']);
    Route::post('destroytestimonials',[testimonialsController::class, 'destroytestimonials']);
    Route::post('createtestimonials',[testimonialsController::class, 'createtestimonials']); 
    
    Route::get('SocialMedia', [socialmediaController::class, 'showSocialMedia'])->name('SocialMediaTable');
    Route::post('Edit-SocialMedia', [socialmediaController::class, 'editSocialMedia']);
    Route::post('Store-SocialMedia',[socialmediaController::class, 'storeSocialMedia']);
    Route::post('Delete-SocialMedia',[socialmediaController::class, 'destroySocialMedia']);
    Route::post('Create-SocialMedia',[socialmediaController::class, 'createSocialMedia']); 

    Route::get('Websitedetails', [detailsController::class, 'showWebsitedetails'])->name('Websitedetails');
    Route::post('Edit-Websitedetails', [detailsController::class, 'editWebsitedetails']);
    Route::post('Store-Websitedetails',[detailsController::class, 'storeWebsitedetails']);
    Route::post('Delete-Websitedetails',[detailsController::class, 'destroyWebsitedetails']);
    Route::post('Create-Websitedetails',[detailsController::class, 'createWebsitedetails']);





