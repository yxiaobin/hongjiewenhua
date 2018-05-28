<?php

namespace App\Http\Controllers;

use App\Other;
use Illuminate\Http\Request;

class OtherController extends Controller
{
    //
    public  function  OtherIndex(){
        $others = Other::orderby('num','asc')->get();
        return view('Other.index',compact('others'));
    }
    public  function  OtherEdit(){
        return view('Other.edit');
    }
    public  function  OtherStore(Request $request){
        $this->validate($request,[
            'image'=>'required',
            'href'=>'required',
            'name'=>'required',
        ]);
        $other = new Other();
        $others = Other::all();
        $other->name = $request->input('name');
        $other->image = $request->file('image')->store('images');
        $other->href = $request->input('href');
        $other->show = 0;
        $other->num = count($others)+1 ;
        $other->save();

        return redirect('others');
    }
    public function  OtherReedit(Other $id){
        $other = $id;
        return view('Other.reedit',compact('other'));
    }
    public function  OtherRestore(Other $id,Request $request){
        if ($request->file('image')!=null){
            $id->image = $request->file('image')->store('images');
        }
        $id->href = $request->input('href');
        $id->name = $request->input('name');
        $id->save();
        return redirect('others');
    }
    public  function  OtherDelete(Other $id){
        $id->delete();
        $others = Other::orderby('num', 'asc')->get();
       $i =1;
       foreach ($others as $other){
           $other ->num = $i;
           $other->save();
           $i++;
       }
        return back();
    }
    public  function  OtherShow(Other $id){
        $id->show +=1;
        $id->show %=2;
        $id->save();
        return back();
    }
    public  function  OtherUp(Other $id){
        $pre = Other::where('num','=',$id->num-1)->get()[0];
        $pre->num +=1;
        $pre->save();
        $id->num -=1;
        $id->save();
        return back();
    }
    public  function  OtherDown(Other $id){
        $pre = Other::where('num','=',$id->num+1)->get()[0];
        $pre->num -=1;
        $pre->save();
        $id->num +=1;
        $id->save();
        return back();
    }
}
