<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Member;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //Login 页面
    public function  LoginIndex(){
        return view('Login.login');
    }
    public  function  Login(Request $request){
        $this->validate($request,[
            'name'=>'required|min:4|max:15',
            'password'=>'required|min:4|max:15'
        ]);
        $name = $request->input('name');
        $password = $request->input('password');
        $member=Member::where('name','=',$name)->get();
        if(count($member)<=0){
            //用户名不存在
            echo "<script>alert('用户名不存在！')</script>";
            session(['name'=>'','rank'=>'', 'id'=>'']);
            echo "<script> window.location.href=\" ".url("login")." \"; </script> ";
        }else {
            $member = $member->first();
            if($password == $member->password){
                //登记session
                session(['id'=>$member->id]);
                return view("Manager.index");
            }else{
                //密码错误
                echo "<script>alert('密码错误！')</script>";
                session(['id'=>'']);
                echo "<script> window.location.href=\" ".url("login")." \"; </script> ";
            }
        }
    }
    public  function  BrandIndex(){
        $tab=1;
        $categorys =Brand::orderby('id','desc')->get();
        return view('Brand.index',compact('tab','categorys'));
    }
}
