<?php
use App\Http\Controllers\Front\Servdep3;




    Route::get('ShowServiceeThree', [Servdep3::class, 'ShowServiceeThree'])->name('ShowServiceeThree');
    Route::post('Edit-ServiceeThree', [Servdep3::class, 'editServiceeThree']);
    Route::post('Store-ServiceeThree',[Servdep3::class, 'storeServiceeThree']);



