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

//提取图片
Route::get('/showPicture/', 'PS4\PictureController@show');

//提取图片
//Route::get('/{id}', 'PS4\PictureController@show');


//首页
Route::get('/', function () {
    return view('welcome');
});


//上传图片
Route::post('/upload', 'PS4\PictureController@upload');