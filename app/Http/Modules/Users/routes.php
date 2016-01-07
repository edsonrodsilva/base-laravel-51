<?php
Route::group(['prefix' => 'Dashboard'], function () {
	$namespace = '\App\Http\Modules\Users\Controllers';
    Route::get('user', 'UserController@showIndex');
});