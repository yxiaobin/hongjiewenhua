<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class ArticalController extends Controller
{
    //
    public  function  ArticalIndex(){
        $news = News::orderby('time','desc')->get();
        return view('Artical.index',compact('news'));
    }
    public  function  ArticalAdd(){
        return view('Artical.edit');
    }
    public  function  ArticalStore(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'editorValue'=>'required',
            'image'=>'required',
            'category'=>'required',
        ]);
        $new = new News();
        $new->title = $request->input('title');
        $new->content = $request->input('editorValue');
        $new->category_id = $request->input('category');
        $new->image = $request->file('image')->store('images');
        $new->href = $request->input('href');
        $new->time = time();
        if($request->input('abstract')!=null){
            $new->abstract = $request->input('abstract');
        }else{
            $new->abstract = null;
        }
        $new->save();
        return redirect('artical');
    }
    public  function  ArticalDelete(News $id){
        $id->delete();
        return redirect('artical');
    }
    public  function  ArticalReeditIndex(News $id){
        $new = $id;
        return view('Artical.reedit',compact('new'));
    }
    public  function  ArticalReeditStore(News $id, Request $request){
        if($request->input('title')!=null){
            $id->title = $request->input('title');
        }
        if($request->input('href')!=null){
            $id->href = $request->input('href');
        }
        if($request->input('category')!=null){
            $id->category_id = $request->input('category');
        }
        if($request->input('abstract')!=null){
            $id->abstract = $request->input('abstract');
        }
        if($request->input('editorValue')!=null){
            $id->content = $request->input('editorValue');
        }
        if($request->file('image')!=null){
            $id->image = $request->file('image')->store('images');
        }
        $id->save();
        return redirect('artical');
    }
}
