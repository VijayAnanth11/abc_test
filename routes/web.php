<?php

Route::get('/',"CategoryController@index") ;
Route::post('/category-data',"CategoryController@store") ;

Route::get('/product',"Personal_access_tokenController@index") ;
Route::get('/edit/{id}',"Personal_access_tokenController@edit") ;
Route::get('/show/{id}',"Personal_access_tokenController@show") ;
Route::get('/create',"Personal_access_tokenController@create") ;
Route::post('/insert-data',"Personal_access_tokenController@store") ;
Route::post('/update-insert/{id}',"Personal_access_tokenController@update");
Route::get('/delete-insert/{id}',"Personal_access_tokenController@destroy");




