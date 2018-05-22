<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Category;
use App\Form;
use App\Member;
use DeepCopy\f001\B;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // 后台管理页面
    public function  AdminIndex(){
        $jiameng = Form::where('category','=','1')->where('isreading','=','0')->get();
        $num1 = count($jiameng);
        $weixiu = Form::where('category','=','2')->where('isreading','=','0')->get();
        $num2 = count($weixiu);
        $sheji = Form::where('category','=','3')->where('isreading','=','0')->get();
        $num3 = count($sheji);
        $tousu = Form::where('category','=','4')->where('isreading','=','0')->get();
        $num4 = count($tousu);
        return view("Manager.index",compact('num1','num2','num3','num4'));
    }
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
        if(count(Member::all())==0){
            $member = new Member();
            $member->name = $name;
            $member->password = encrypt($password);
            $member->save();
            session(['id'=>$member->id]);
            return redirect('adminindex');
        }else{
            $member=Member::where('name','=',$name)->get();
            if(count($member)<=0){
                //用户名不存在
                echo "<script>alert('用户名不存在！')</script>";
                session(['id'=>'']);
                echo "<script> window.location.href=\" ".url("login")." \"; </script> ";
            }else {
                $member = $member->first();
                if($password == decrypt($member->password)){
                    //登记session
                    session(['id'=>$member->id]);
                    return redirect('adminindex');
                }else{
                    //密码错误
                    echo "<script>alert('密码错误！')</script>";
                    session(['id'=>'']);
                    echo "<script> window.location.href=\" ".url("login")." \"; </script> ";
                }
            }
        }

    }
    //品牌管理页面
    public  function  BrandIndex(){
        $tab=1;
        $categorys =Brand::orderby('id','desc')->get();
        return view('Brand.index',compact('tab','categorys'));
    }
    public  function  BrandStore(Request $request){
        $this->validate($request,[
            'name'=>'required|unique:brand,name'
        ]);
        $kind  = new Brand();
        $kind->name = $request->input('name');
        $kind->save();
        $tab=1;
        $categorys =Brand::orderby('id','desc')->get();
        return view('Brand.index',compact('tab','categorys'));
    }
    public  function  BrandDelete(Brand $id){
        $id ->delete();
        return redirect()->back();
    }
    //文章分类管理页面
    public  function  CategoryIndex(){
        $tab=1;
        $categorys =Category::orderby('id','desc')->get();
        return view('Category.index',compact('tab','categorys'));
    }
    public  function  CategoryStore(Request $request){
        $this->validate($request,[
            'name'=>'required|unique:category,name'
        ]);
        $kind  = new Category();
        $kind->name = $request->input('name');
        $kind->save();
        $tab=1;
        $categorys =Category::orderby('id','desc')->get();
        return view('Category.index',compact('tab','categorys'));
    }
    public function CategoryEdit(Category $category){
        return view('Category.edit')->with(['category'=>$category]);
    }
    public function CategoryUpdate(Category $category,Request $request){
        $this->validate($request,[
            'name'=>'required|unique:category,name,'.$category->id,
        ]);
            $category->name = $request->input('name');
            $category->save();
        return redirect('/category');
    }
    public  function  CategoryDelete(Category $id){
        $id ->delete();
        return redirect()->back();
    }
    public function getImage($path,$name){
        return response()->download(storage_path('app/').$path."/".$name);
    }
    public  function  LogoutIndex(){
        session(['name'=>'','rank'=>'', 'id'=>'']);
        return redirect('login');
    }
    public function  InfoIndex(){
        return view('Info.index');
    }
    public  function  InfoStore(Request $request){
      $this->validate($request,[
         'password'=>'sometimes|confirmed'
      ]);
      $member = Member::find(session('id'));
      if($request->input('usr_name')!=null){
          $member->usr_name = $request->input('usr_name');
      }
        if($request->input('password')!=null){
            $member->password = $request->input('password');
        }
        $member->save();
        return redirect('adminindex');
    }

}
