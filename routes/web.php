<?php



/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','FrontEndController@index');
Route::get('/admin','FrontEndController@index');
Route::get('/contact','FrontEndController@index');
Route::get('/gallery','FrontEndController@index');
Route::get('/login','FrontEndController@index');
Route::get('/logout','FrontEndController@index');
Route::get('/registration','FrontEndController@index');
Route::get('/news','FrontEndController@index');
Route::get('/sales','FrontEndController@index');