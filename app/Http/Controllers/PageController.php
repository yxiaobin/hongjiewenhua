<?php

namespace App\Http\Controllers;

use App\News;
use App\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public  function  PageIndex(){
        $pages = Page::orderby('id','desc')->get();
        return view('Page.index',compact('pages'));
    }
    public  function  PageAdd(){
        return view('Page.edit');
    }
    public  function  PageAddStore(Request $request){
        $this->validate($request,[
            'title'=>'required',
            'img'=>'required',
            'editorValue'=>'required'
        ]);
        $page = new Page();
        $page->title = $request->input('title');
        $page->img = $request->file('img')->store('images');
        $page->content = $request->input('editorValue');
        $page->save();
        return redirect('page');
    }
    public  function  PageReeditIndex(Page $id){
        $page = $id;
        return view('page.reedit',compact('page'));
    }
    public  function  PageReeditStore(Page $id, Request $request){
        if($request->input('title')!=null){
            $id->title = $request->input('title');
        }
        if($request->input('editorValue')!=null){
            $id->content = $request->input('editorValue');
        }
        if($request->file('image')!=null){
            $id->image = $request->file('image')->store('images');
        }
        $id->save();
        return redirect('page');
    }
    public  function  PageDelete(Page $id){
        $id->delete();
        return redirect('page');
    }
}
