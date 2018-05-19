<?php

namespace App\Http\Controllers;

use App\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public  function  FormIndex($id,$status){
        $forms = Form::where('category','=',$id)->where('isreading','=',$status)->get();
        return view('Form.index')->with(['forms'=>$forms,'id'=>$id,'status'=>$status]);
    }
    public function formdetail(Form $form){
        return view('Form.formdetail',compact('form'));
    }
    public function formdelete(Form $form){
        $form->delete();
        return back();
    }
    public function formchange(Form $form){
        $status = $form->isreading;
        if($status==0){
            $form->isreading=1;
        }else{
            $form->isreading=0;
        }
        $form->save();
        return back();
    }
    public function fillform(){
        return view('Home.form')->with(['id'=>1]);
    }
    public function formPost($id,Request $request){
        $this->validate($request,[
            'brand'=>'required',
            'address'=>'required',
            'name'=>'required',
            'phone'=>'required',
        ]);
        $form = new Form();
        $form->brand = $request->input('brand');
        $form->address = $request->input('address');
        $form->name = $request->input('name');
        $form->phone = $request->input('phone');
        $form->wuye = $request->input('wuye');
        $form->beizhu = $request->input('beizhu');
        $form->category = $id;
        $form->save();
        echo "<script>alert('操作成功！')</script>";
        echo "<script> window.location.href=\" ".url("index")." \"; </script> ";
    }
}
