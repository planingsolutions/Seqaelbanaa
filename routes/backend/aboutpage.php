<?php
use App\Http\Controllers\Front\AboutPage\SectionOne;
use App\Http\Controllers\Front\AboutPage\SectionTwo;
use App\Http\Controllers\Front\AboutPage\TeamWork;


// SectionOne

    Route::get('ShowAboutUss', [SectionOne::class, 'ShowAboutUss'])->name('ShowAboutUss');
    Route::post('Edit-AboutUss', [SectionOne::class, 'editAboutUss']);
    Route::post('Store-AboutUss',[SectionOne::class, 'storeAboutUss']);

// SectionTwo

    Route::get('ShowAboutUssTwo', [SectionTwo::class, 'ShowAboutUssTwo'])->name('ShowAboutUssTwo');
    Route::post('Edit-AboutUssTwo', [SectionTwo::class, 'editAboutUssTwo']);
    Route::post('Store-AboutUssTwo',[SectionTwo::class, 'storeAboutUssTwo']);

// TeamWork

Route::get('ShowTeamWork', [TeamWork::class, 'ShowTeamWork'])->name('ShowTeamWork');
Route::post('Edit-TeamWork', [TeamWork::class, 'editTeamWork']);
Route::post('Store-TeamWork',[TeamWork::class, 'storeTeamWork']);
Route::post('Delete-TeamWork',[TeamWork::class, 'destroyTeamWork']);
Route::post('Create-TeamWork',[TeamWork::class, 'createTeamWork']); 



