<?php
use App\Http\Controllers\Front\Servdep2;




    Route::get('ShowServicessMain', [Servdep2::class, 'ShowServicessMain'])->name('ShowServicessMain');
    Route::post('Edit-ServicessMain', [Servdep2::class, 'editServicessMain']);
    Route::post('Store-ServicessMain',[Servdep2::class, 'storeServicessMain']);


    
    Route::get('ShowServicessCategory', [Servdep2::class, 'ShowServicessCategory'])->name('ShowServicessCategory');
    Route::post('Edit-ServicessCategory', [Servdep2::class, 'editServicessCategory']);
    Route::post('Store-ServicessCategory',[Servdep2::class, 'storeServicessCategory']);



