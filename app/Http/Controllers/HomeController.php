<?php

namespace App\Http\Controllers;

use App\Menue;
use App\News;
use App\Other;
use App\Ppt;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public  function  Index(){
        $ppts = Ppt::where('show','=','1')->orderby('num','asc')->get();
        $menues = Menue::where('show','=','1')->orderby('num','asc')->get();
        $others = Other::where('show','=','1')->orderby('num','asc')->get();
        return view('Home.index',compact('ppts','menues','others'));
    }
    public  function  ArticleIndex( News $id){
        $new = $id;
        return view('Home.article',compact('new'));
    }
}
