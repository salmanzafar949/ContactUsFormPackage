<?php
/**
 * Created by PhpStorm.
 * User: salman
 * Date: 2/21/19
 * Time: 2:39 PM
 */

Route::group(['namespace' => 'Salman\Contact\Http\Controllers'], function () {

    Route::resource('contact','ContactController');
//    Route::get('/contact','ContactController@create')->name('contact.index');
//    Route::post('/contact/store','ContactController@store')->name('contact.store');
});
