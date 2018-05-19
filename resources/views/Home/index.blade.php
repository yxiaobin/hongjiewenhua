<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0050)http://jcwx.hezongarttou.com/MicroMart/wallet.aspx -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width,user-scalable=no">
    <title>
        红杰文化
    </title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">

<body>
<div class="common_w">
    <!--头部-->
    <div class="nav_top">
        <a class="back" href="{{asset('/index')}}"><i class="fa fa-caret-left fa-lg"></i></a>红杰文化
        <a class="more" href="{{asset('/index')}}"><i class="fa fa-home fa-lg"></i></a>
    </div>
    <!--top-->
    <div id="banner_index" class="banner_index">
        <div class="hd">
            <ul>
            </ul>
        </div>
        <div class="bd">
            <div class="tempWrap"><ul>

                    @foreach($ppts as $ppt)
                    <li><a href="{{$ppt->href}}">
                            <img src="{{url("getImage/$ppt->image")}}">
                        </a></li>
                     @endforeach
                </ul></div>
        </div>
    </div>
    <!--红杰服务-->
    <div class="wallet_menu">
        <h3>
            红杰服务</h3>
        <ul>
            @foreach($menues as $menue )
            <li style="height: 171px;">
                @if($menue->name !='自定义')
                <a href="{{url("/$menue->name")}}">
                    @else
                        <a href="{{$menue->href}}">
                        @endif
                    <img src="{{url("getImage/$menue->image")}}" alt="icon">
                    <p>
                        @if($menue->name !='自定义')
                        {{$menue->name}}
                            @endif
                    </p></a>
            </li>
                @endforeach
        </ul>
    </div>
    <div class="wallet_menu">
        <h3>
            第三方服务</h3>
        <ul>
                @foreach($others as $other)
            <li style="height: 171px;"><a href="{{$other->href}}">
                    <img src="{{url("getImage/$other->image")}}" alt="icon">
                    <p>
                        {{$other->name}}</p></a>
            </li>
                    @endforeach


        </ul>
    </div>
</div>
<script type="text/javascript" src="{{asset('js/hm.js')}}"></script>
<script type="text/javascript" src="{{asset('js/zepto.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/zepto_events.js')}}"></script>
<script type="text/javascript" src="{{asset('js/TouchSlide.1.1.js')}}"></script>

<script type="text/javascript">
    //<![CDATA[
    LocalAjaxPath='http://jcwx.hezongarttou.com/MicroMart/Common/AjaxObj.ashx';AppRootPath='http://jcwx.hezongarttou.com/MicroMart/';//]]>
</script>
</form>

<script type="text/javascript">
    $(function () {
        var item = $('.wallet_menu li');
        item.height(item.width());   //设置每个item菜单的宽高一样
    });
</script>
<script type="text/javascript">
    //banner轮播
    TouchSlide({
        slideCell: "#banner_index",
        titCell: ".hd ul", //开启自动分页 autoPage:true ，此时设置 titCell 为导航元素包裹层
        mainCell: ".bd ul",
        effect: "leftLoop",
        autoPlay: true, //自动播放
        autoPage: true //自动分页
    });
</script>

</body></html>