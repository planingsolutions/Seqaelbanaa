<?php
use App\Http\Controllers\Front\Servdep4;




    Route::get('ShowServiceFourMain', [Servdep4::class, 'ShowServiceeFMain'])->name('ShowServiceFourMain');
    Route::post('Edit-ServiceFourMain', [Servdep4::class, 'editServiceeFMain']);
    Route::post('Store-ServiceFourrMain',[Servdep4::class, 'storeServiceeFMain']);



    
    Route::get('ShowServiceFourCategory', [Servdep4::class, 'ShowServiceeFCategory'])->name('ShowServiceFourCategory');
    Route::post('Edit-ServiceFourCategory', [Servdep4::class, 'editServiceeFCategory']);
    Route::post('Store-ServiceFourCategory',[Servdep4::class, 'storeServiceeFCategory']);






