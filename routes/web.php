<?php

Route::get('/', function () {
    return view('welcome');
});
//对称加密
Route::get('/guzzle', 'TestController@guzzle');
//非对称加密
Route::get('/test_rsa', 'TestController@test_rsa');
//签名
Route::get('/signature', 'TestController@signature');



Route::resource('/posts','PostController@index');

