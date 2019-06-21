<?php
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/','Obj\IndexController@index');//首页

Route::get('login','Login\LoginController@Login');//登陆

//用户处理（注册/找回/修改）
Route::prefix('user')->group(function () {
    Route::get('register','User\UserController@register');
});

//产品处理（展示，详情）
Route::prefix('product')->group(function () {
    Route::get('list','Product\ProductController@list');
    Route::get('details','Product\ProductController@details');
});

Route::prefix('cart')->group(function () {
    Route::get('list','Product\CartController@list');
});