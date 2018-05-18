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

                    <li><a href="http://jsjwx.hezongarttou.com/micromart">
                            <img src="./wallet.aspx_files/d3058772-8094-4c63-b177-fd18bfe678ca.jpg"></a></li>
                    <li><a href="http://hzwx.hezongarttou.com/micromart">
                            <img src="./wallet.aspx_files/ae724ca6-499f-4885-894e-feaf005de916.jpg"></a></li>
                    <li><a href="http://jsjwx.hezongarttou.com/micromart">
                            <img src="./wallet.aspx_files/d3058772-8094-4c63-b177-fd18bfe678ca.jpg"></a></li>
                    <li><a href="http://hzwx.hezongarttou.com/micromart">
                            <img src="./wallet.aspx_files/ae724ca6-499f-4885-894e-feaf005de916.jpg"></a></li>
                </ul></div>
        </div>
    </div>
    <!--红杰服务-->
    <div class="wallet_menu">
        <h3>
            红杰服务</h3>
        <ul>
            <li style="height: 171px;"><a href="{{url('jiameng')}}">
                    <img src="{{asset('img/jiameng.png')}}" alt="icon">
                    <p>
                        我要加盟</p></a>
            </li>

            <li style="height: 171px;"><a href="{{url('articleList')}}">
                    <img src="{{'img/jiabin.png'}}" alt="icon">
                    <p>
                        我要嘉宾</p></a>
            </li>

            <li style="height: 171px;"><a href="{{url('articleList')}}">
                    <img src="{{asset('img/paidui.png')}}" alt="icon">
                    <p>
                        我要派对</p></a>
            </li>

            <li style="height: 171px;"><a href="{{url('weixiu')}}">
                    <img src="{{asset('img/weixiu.png')}}" alt="icon">
                    <p>
                        我要维修</p></a>
            </li>

            <li style="height: 171px;"><a href="{{url('sheji')}}">
                    <img src="{{asset('img/sheji.png')}}"" alt="icon">
                    <p>
                        我要设计</p></a>
            </li>

            <li style="height: 171px;"><a href="{{url('tousu')}}">
                    <img src="{{asset('img/tousu.png')}}" alt="icon">
                    <p>
                        我要投诉</p></a>
            </li>

            <li style="height: 171px;"><a href="{{url('articleList')}}">
                    <img src="{{url('')}}" alt="icon">
                    <p>
                        我要培训</p></a>
            </li>

            <li style="height: 171px;"><a href="{{url('page')}}">
                    <img src="{{url('')}}" alt="icon">
                    <p>
                        联系我们</p></a>
            </li>


        </ul>
    </div>
    <div class="wallet_menu">
        <h3>
            第三方服务</h3>
        <ul>

            <li style="height: 171px;"><a href="http://www.kuaidi100.com/">
                    <img src="./wallet.aspx_files/024a854c-6e36-4d9b-a4d7-61dd961bfabe.png" alt="icon">
                    <p>
                        物流查询</p></a>
            </li>


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