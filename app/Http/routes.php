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

Route::get('/', [
    'uses' => '\App\Http\Controllers\HomeController@indexAction',
    'as' => 'website.home'
]);

Route::get('eventos', [
    'uses' => '\App\Http\Controllers\EventsController@indexAction',
    'as' => 'website.events'
]);

Route::get('organizadores', [
    'uses' => '\App\Http\Controllers\OrganizersController@indexAction',
    'as' => 'website.organizers'
]);

Route::get('contato', [
    'uses' => '\App\Http\Controllers\ContactController@indexAction',
    'as' => 'website.contact'
]);
