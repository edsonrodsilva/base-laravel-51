<?php
Route::group(['prefix' => 'Dashboard'], function () {
	$namespace = '\App\Http\Modules\Configurations\Controllers';
    Route::get('user', $namespace.'\ConfigurationController@showIndex');
});