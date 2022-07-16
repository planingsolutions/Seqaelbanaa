<?php
use App\Http\Controllers\Front\Servdep1;




    Route::get('ShowServicess', [Servdep1::class, 'ShowServicess'])->name('ShowServicess');
    Route::post('Edit-ServicessTable', [Servdep1::class, 'editServicess']);
    Route::post('Store-ServicessTable',[Servdep1::class, 'storeServicess']);



