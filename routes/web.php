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
    Route::get('/addartical',['as'=>"addartical",'uses'=>"ArticalController@ArticalAdd"]);
    Route::post('/addartical',['as'=>"addarticalpost",'uses'=>"ArticalController@ArticalStore"]);
    Route::get('/deleteartical/{id}',['as'=>"deleteartical",'uses'=>"ArticalController@ArticalDelete"]);
    Route::get('/reeditartical/{id}',['as'=>"reeditartical",'uses'=>"ArticalController@ArticalReeditIndex"]);
    Route::post('/reeditartical/{id}',['as'=>"reeditarticalpost",'uses'=>"ArticalController@ArticalReeditStore"]);
    //页面增删改查管理
    Route::get('/page',['as'=>"page",'uses'=>"PageController@PageIndex"]);
    Route::get('/addpage',['as'=>"addpage",'uses'=>"PageController@PageAdd"]);
    Route::post('/addpage',['as'=>"addpagepost",'uses'=>"PageController@PageAddStore"]);
    Route::get('/reeditpage/{id}',['as'=>"reeditpage",'uses'=>"PageController@PageReeditIndex"]);
    Route::post('/reeditpage/{id}',['as'=>"reeditpagepost",'uses'=>"PageController@PageReeditStore"]);
    Route::get('/deletepage/{id}',['as'=>"deletepage",'uses'=>"PageController@PageDelete"]);
    //表单管理
    Route::get('/form/{id}/{status}',['as'=>"form",'uses'=>"FormController@FormIndex"]);
    //幻灯片管理
    Route::get('/ppt',['as'=>"ppt",'uses'=>"PptController@PptIndex"]);
    Route::post('/addppt',['as'=>"addppt",'uses'=>"PptController@PptAdd"]);
    Route::get('/pptshow/{id}',['as'=>"pptshow",'uses'=>"PptController@PptShow"]);
    Route::get('/pptup/{id}',['as'=>"pptshow",'uses'=>"PptController@PptUp"]);
    Route::get('/pptdown/{id}',['as'=>"pptshow",'uses'=>"PptController@PptDown"]);
    Route::get('/reeditppt/{id}',['as'=>"reeditppt",'uses'=>"PptController@PptReeditIndex"]);
    Route::post('/reeditppt/{id}',['as'=>"reeditppt",'uses'=>"PptController@PptReeditStore"]);


});
//登录
Route::get('/login',['as'=>"login",'uses'=>"AdminController@LoginIndex"]);
Route::post('/login',['as'=>"login",'uses'=>"AdminController@Login"]);
//退出
Route::get('/logout',['as'=>"logout",'uses'=>"AdminController@LogoutIndex"]);

//获取图片
Route::get('/getImage/{path}/{name}',['as'=>'getImage','uses'=>'AdminController@getImage']);