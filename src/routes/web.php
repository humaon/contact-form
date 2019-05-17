<?php
Route::group(['namespace'=>'Humaon\Contact\Http\Controllers'],function(){
    Route::middleware('web')->group(function(){

    Route::get('/contact','ContactController@index')->middleware('web');
    Route::post('contact/store','ContactController@store')->name('contact.store');

    });

});
