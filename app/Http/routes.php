<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [ 'as' => 'home', function () {
    return view('welcome');
}]);

/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
| See app/Http/api_routes.php
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function ()
{
	Route::group(['prefix' => 'v1'], function ()
	{
        include_once Config::get('generator.path_api_routes');
	});
});
