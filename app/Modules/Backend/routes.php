<?php

/*
|--------------------------------------------------------------------------
| Routes Frontend
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(array('module' => 'Backend', 'namespace' => 'Modules\Backend\Controllers'), function() {
    Route::get('/backend', 'SiteController@actionIndex');
});