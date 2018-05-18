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
}
