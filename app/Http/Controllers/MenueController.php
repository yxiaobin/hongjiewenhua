<?php

namespace App\Http\Controllers;

use App\Category;
use App\Menue;
use App\News;
use App\Page;
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
            'name'=>'required',
            'href'=>'nullable|url'
        ]);
        $str = explode('/',$request->input('name'));
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
        $this->validate($request,[
            'href'=>'nullable|url'
        ]);
        if ($request->file('image')!=null){
            $id->image = $request->file('image')->store('images');
        }
        $id->href = $request->input('href');
        if ($request->input('name')){
            $str = explode('/',$request->input('name'));
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
        $menues = Menue::orderby('num','asc')->get();
        $i = 1;
        foreach($menues as $menue) {
            $menue->num = $i;
            $i++;
            $menue->save();
        }
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
    public  function  MenueUrl($url){
        $menue = Menue::where('name','=',$url)->get()[0];
        if($url=='全部文章'){
            $news = News::orderby('id','desc')->get();
            return view('Home.articleList')->with(['news'=>$news,'url'=>$url]);
        }else if($url=='自定义'){

        }else if($menue->category==1){
            $id = Category::where('name','=',$url)->get()[0];
            $news = News::where('category_id','=',$id->id)->orderby('id','desc')->get();
            return view('Home.articleList')->with(['news'=>$news,'url'=>$url]);
        }else if($menue->category==2){
            $id = $url;
             return view('Home.form',compact('id'));
        }else if($menue->category==3){
            $new =Page::where('title','=',$url)->orderby('id','desc')->get();
            if(count($new)>0){
                $new = $new->first();
            }
            return view('Home.page',compact('new'));
        }
    }
}
