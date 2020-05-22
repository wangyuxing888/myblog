<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//验证码路由

Route::get('code/captcha/{tmp}', 'Admin\LoginController@captcha');
//后台登录页面

Route::get('admin/login', 'Admin\LoginController@login');