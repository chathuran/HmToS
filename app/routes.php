<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/',array('as'=>'home','uses'=>'HomeController@getHome'));
Route::get('/login',array('as'=>'login','uses'=>'HomeController@getLogin'));
Route::get('/register','HomeController@getRegister');

Route::post('/register',array('uses'=>'HomeController@postRegister'));
Route::post('/login','HomeController@postLogin');




Route::get('/beaconStart',array('as'=>'beaconStart','uses'=>'BeaconController@getBeaconStart'));
Route::post('/beaconStart',array('as'=>'bp','uses'=>'BeaconController@postBeaconHome'));



Route::get('/beaconHome',array('as'=>'beaconHome','uses'=>'BeaconController@getBeacons'));
Route::post('/beaconHome',array('as'=>'beaconDetails','uses'=>'BeaconController@postBeaconDetails'));
//Route::get('/beaconHome',array('as'=>'beaconHome1','uses'=>'BeaconController@getBeacons1'));

Route::get('/beaconEdit', array('as'=>'beaconEdit','uses'=>'BeaconController@getViewBeaconEdit'));
Route::post('/beaconEdit', array('as'=>'beacon','uses'=>'BeaconController@postUpdateBeacon'));


//Route::post('beacon/update',array('as'=>'beaconEdit' 'uses'=>'BeaconController@postUpdate'));


Route::get('messaging/{id}','BeaconController@getRequest');