<?php

namespace App\Http\Controllers;

use App\Menue;
use Illuminate\Http\Request;

class MenueController extends Controller
{
    //
    public  function  MenueIndex(){
        $menues=Menue::orderby('num','asc')->get();
        return view('Menue.index',compact('menues'));
    }
    public  function  MenueEdit(){
        return view('Menue.edit');
    }
    public  function  MenueStore(Request $request){
        $this->validate($request,[
            'image'=>'required|image',
            'category'=>'required',
            'href'=>'sometimes|url'
        ]);
        $str = explode('/',$request->input('category'));
        $str1=$str[0];
        $str2=$str[1];
        $menus = Menue::all();
        $menue = new Menue();
        $menue->category = $str1;
        $menue->name = $str2;
        $menue->image = $request->file('image')->store('images');
        $menue->show=0;
        $menue->href=$request->input('href');
        $menue->url_name = $request->input('url_name');
        $menue->num = count($menus)+1;
        $menue->save();
        return redirect('menue');
    }
    public function  MenueReedit(Menue $id){
        $p = $id;
        return view('Menue.reedit',compact('p'));
    }
    public function  MenueRestore(Menue $id,Request $request){
        if ($request->file('image')!=null){
            $id->image = $request->file('image')->store('images');
        }
        $id->href = $request->file('href');
        if ($request->input('category')!=-1){
            $str = explode('/',$request->input('category'));
            $str1=$str[0];
            $str2=$str[1];
            $id->url_name = $request->input('url_name');
            $id->category = $str1;
            $id->name = $str2;
        }
        $id->save();
        return redirect('menue');
    }
    public  function  MenueDelete(Menue $id){
        $id->delete();
        return back();
    }
    public  function  MenueShow(Menue $id){
        $id->show +=1;
        $id->show %=2;
        $id->save();
        return back();
    }
    public  function  MenueUp(Menue $id){
        $pre = Menue::where('num','=',$id->num-1)->get()[0];
        $pre->num +=1;
        $pre->save();
        $id->num -=1;
        $id->save();
        return back();
    }
    public  function  MenueDown(Menue $id){
        $pre = Menue::where('num','=',$id->num+1)->get()[0];
        $pre->num -=1;
        $pre->save();
        $id->num +=1;
        $id->save();
        return back();
    }
}
