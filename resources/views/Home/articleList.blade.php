


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,user-scalable=no" />
    <title>
        红杰文化
    </title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <script type="text/javascript" src="{{asset('js/zepto.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/zepto_events.js')}}"></script>
</head>
<body>
    <div class="common_w">
        <!--头部-->
        <div class="nav_top">
            <a class="back" href="javascript:history.back();"><i class="fa fa-caret-left fa-lg"></i></a>红杰文化
                <a class="more" href="{{asset('/index')}}"><i class="fa fa-home fa-lg"></i></a>
        </div>
        <!--列表-->
        @foreach($news as $new)
        <div class="index_list">
            <ul class="list_body">
                @if($new->href !=null)
                <a href='{{$new->href}}'>
                 @else
                        <a href='{{url("article/$new->id")}}'>
                        @endif
                    <li style="width: 100%; font-size: .16rem;">
                        <div style="font-size: 18px; padding: 10px;">
                            {{$new->title}}
                        </div>
                        <div style="padding-left: 10px; padding-bottom: 5px; font-size: 14px; color: #d1d1d1;">
                            {{--<span>--}}
                                {{--2017.01-2017.12</span> <span style="float: right; padding-right: .1rem;">--}}
                                    {{--全国</span></div>--}}
                            <span style="float: right; padding-right: .1rem;">{{date('Y-m-d H:m:s',$new->time)}}</span>

                            <div>
                            <img src='{{url("getImage/$new->image")}}' style="height: auto; width: 95%;" /></div>
                        <div style="margin: 10px 10px 0px 10px;padding-bottom: 10px;font-size: 14px; color: #d1d1d1;border-bottom : 1px solid #f3f3f3;">
                            @if($new->abstract == null)
                                {{str_limit( strip_tags($new->content), 100, '...')}}
                                @else
                                {!! $new->abstract !!}
                                @endif
                        </div>
                        <div style="padding: 10px 10px; font-size: 14px;">
                            <span>查看全文</span><span style="float: right;"><i class="fa fa-angle-right fa-lg"></i></span></div>
                    </li>
                </a>
            </ul>
        </div>
            @endforeach
    </div>
</body>
</html>
