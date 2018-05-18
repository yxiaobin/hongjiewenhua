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
//管理员权限
Route::middleware(['web','AdminCheckLog'])->group(function (){
    //品牌管理
    Route::get('/brand',['as'=>"brand",'uses'=>"AdminController@BrandIndex"]);
});
//登录
Route::get('/login',['as'=>"login",'uses'=>"AdminController@LoginIndex"]);
Route::post('/login',['as'=>"login",'uses'=>"AdminController@Login"]);

Route::get('/', function () {
    return view('welcome');
});
Route::get('index',function (){
    return view('Home.index');
});
Route::get('/jiameng',function (){
    return view('Home.jiameng');
});
Route::get('articleList',function (){
    return view('Home.articleList');
});
Route::get('weixiu',function (){
    return view('Home.weixiu');
});
Route::get('sheji',function (){
    return view('Home.sheji');
});
Route::get('tousu',function (){
    return view('Home.tousu');
});
Route::get('article',function (){
    return view('Home.article');
});
Route::get('page',function (){
    return view('Home.page');
});