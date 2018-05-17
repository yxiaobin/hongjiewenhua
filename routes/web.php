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
    //品牌分类管理
    Route::get('/brand',['as'=>"brand",'uses'=>"AdminController@BrandIndex"]);
    Route::post('/brand',['as'=>"brand",'uses'=>"AdminController@BrandStore"]);
    Route::get('/deleteBrand/{id}',['as'=>"deletebrand",'uses'=>"AdminController@BrandDelete"]);
    //文章分类管理
    Route::get('/category',['as'=>"category",'uses'=>"AdminController@CategoryIndex"]);
    Route::post('/category',['as'=>"category",'uses'=>"AdminController@CategoryStore"]);
    Route::get('/deleteCategory/{id}',['as'=>"deletecategory",'uses'=>"AdminController@CategoryDelete"]);
    //文章增删改查管理
    Route::get('/artical',['as'=>"artical",'uses'=>"ArticalController@ArticalIndex"]);

});
//登录
Route::get('/login',['as'=>"login",'uses'=>"AdminController@LoginIndex"]);
Route::post('/login',['as'=>"login",'uses'=>"AdminController@Login"]);
