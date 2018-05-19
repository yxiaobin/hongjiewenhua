<?php

namespace App\Http\Controllers;

use App\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public  function  FormIndex($id,$status){

        $forms = Form::where('category','=',$id)->where('isreading','=',$status)->get();
        return view('Form.index',compact('forms'));
    }
    public function fillform(){
        return view('Home.form')->with(['id'=>0]);
    }
    public function formPost($id,Request $request){
        dd($request->input('wuye'));
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
        $form->phone = $request->input('name');
        $form->wuye = $request->input('wuye');
        $form->category = $id;
        $form->save();
        echo "<script>alert('操作成功！')</script>";
        echo "<script> window.location.href=\" ".url("index")." \"; </script> ";
    }
}
