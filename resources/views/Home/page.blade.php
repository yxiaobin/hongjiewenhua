<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$new->title}}</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>
<div class="common_w">
    <div class="nav_top">
        <a class="back" href="javascript:history.back();"><i class="fa fa-caret-left fa-lg"></i></a>{{$new->title}}
        <a class="more" href="{{asset('/index')}}"><i class="fa fa-home fa-lg"></i></a>
    </div>
   <div class="feedback">
    {!! $new->content !!}
   </div>
</div>
</body>
</html>