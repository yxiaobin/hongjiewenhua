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
    //主页
    Route::get('/adminindex',['as'=>"adminindex",'uses'=>"AdminController@AdminIndex"]);
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
    //管理员信息修该
    Route::get('/info/',['as'=>"info",'uses'=>"AdminController@InfoIndex"]);
    Route::post('/info/',['as'=>"info",'uses'=>"AdminController@InfoStore"]);
    Route::get('/member/',['as'=>"member",'uses'=>"MemberController@MemberIndex"]);
    Route::post('/member/',['as'=>"member",'uses'=>"MemberController@MemberStore"]);
    Route::get('/deletemember/{id}',['as'=>"deletemember",'uses'=>"MemberController@MemberDelete"]);
    //菜单栏管理
    Route::get('/menue/',['as'=>"menue",'uses'=>"MenueController@MenueIndex"]);
    Route::get('/menueedit/',['as'=>"menueedit",'uses'=>"MenueController@MenueEdit"]);
    Route::post('/menueedit/',['as'=>"menueedit",'uses'=>"MenueController@MenueStore"]);
    Route::get('/menuereedit/{id}',['as'=>"menuereedit",'uses'=>"MenueController@MenueReedit"]);
    Route::post('/menuereedit/{id}',['as'=>"menuereedit",'uses'=>"MenueController@MenueRestore"]);
    Route::get('/menuedelete/{id}',['as'=>"menuedelete",'uses'=>"MenueController@MenueDelete"]);
    Route::get('/menueshow/{id}',['as'=>"menueshow",'uses'=>"MenueController@MenueShow"]);
    Route::get('/menueup/{id}',['as'=>"menueupshow",'uses'=>"MenueController@MenueUp"]);
    Route::get('/menuedown/{id}',['as'=>"menuedownshow",'uses'=>"MenueController@MenueDown"]);

});
//登录
Route::get('/login',['as'=>"login",'uses'=>"AdminController@LoginIndex"]);
Route::post('/login',['as'=>"login",'uses'=>"AdminController@Login"]);
//退出
Route::get('/logout',['as'=>"logout",'uses'=>"AdminController@LogoutIndex"]);

//提交表单
Route::post('form/{id}','FormController@formPost');


Route::get('index',function (){
    return view('Home.index');
});
Route::get('/jiameng','FormController@fillform');
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
//Route::get('page',function (){
//    return view('Home.page');
//});
//获取图片
Route::get('/getImage/{path}/{name}',['as'=>'getImage','uses'=>'AdminController@getImage']);
