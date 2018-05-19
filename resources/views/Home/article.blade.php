<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>文章详情页面</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>
<div class="common_w">
<div class="nav_top">
    <a class="back" href="javascript:history.back();"><i class="fa fa-caret-left fa-lg"></i></a>红杰文化
    <a class="more" href="{{asset('/index')}}"><i class="fa fa-home fa-lg"></i></a>
</div>
<article class="col-md-8 col-md-offset-2 view clearfix" style="margin-top: 20px;">
    <h1 class="view-title">{{$new->title}}</h1>
    @php
    $kind = App\Category::where('id','=',$new->category_id)->get()[0];
    @endphp
    <div class="view-meta">
        <span>分类: <a href="{{url("/$kind->name")}}" rel="category">{{$kind->name}}</a></span>
        <span>时间: {{date('Y-m-d H:m:s',$new->time)}}</span>
    </div>
    <div class="view-content">
        {!! $new->content !!}
    </div>
</article>
</div>
</body>
</html>