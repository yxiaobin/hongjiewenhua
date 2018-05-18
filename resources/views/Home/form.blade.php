


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>

    </title><meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="{{asset('css/reset.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/css.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <script type="text/javascript" src="{{asset('js/zepto.min.js')}}"></script>
    <script type="text/javascript">
        function FeedBack() {
            var inp = $('form').find('input');
            console.log(inp);
            for(var i=1;i<inp.length;i++){
                if(inp[i].val()==""){
                    var msg = $(inp[i]).prev().val();
                    alert(msg+"不能为空！");
                    return false;
                }
            }
        }
    </script>
</head>
<body>
<form method="post" action="{{url('')}}" id="form1">
        {{csrf_field()}}
    <div class="common_w">
        <!--头部-->
        <div class="nav_top">
            <a class="back" href="javascript:history.back();"><i class="fa fa-caret-left fa-lg"></i></a>红杰文化
            <a class="more" href="{{asset('/index')}}"><i class="fa fa-home fa-lg"></i></a>
        </div>
        <!--content-->
        <div class="feedback address_edit">
            <p class="tips">
                请把您需要解决的问题留言给我们</p>
            <ol class="form">
                <li><span>接收品牌：</span>
                    <select name="txtOrgCode" id="txtOrgCode" style="width: 220px;">
                        <option value="02">苏荷</option>
                        <option value="03">胡桃里</option>
                        <option value="04">繁花</option>
                        <option value="05">本色</option>
                        <option value="06">杂咖</option>
                        <option value="07">事外</option>
                        <option value="08">泰烔</option>
                        <option value="09">酒食家</option>
                        <option value="11">纯K</option>
                    </select>
                </li>
                <li><span>地&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;址&nbsp;：</span>
                    <input name="txtAddress" type="text" id="txtAddress" class="right" />
                </li>
                <li><span>联&nbsp;系&nbsp;人&nbsp;：</span>
                    <input name="txtLinkman" type="text" id="txtLinkman" class="right" />
                </li>
                <li><span>联系电话：</span>
                    <input name="txtMobile" type="text" id="txtMobile" class="right" />
                </li>
                <li><span>有物业：</span>
                    <input name="ckbProperty" type="checkbox" id="ckbProperty" />
                </li>
                <li><span>备&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;注&nbsp;：</span>
                    <div class="right">
                        <textarea name="txtRemark" id="txtRemark" style="height: 2rem;"></textarea>
                    </div>
                </li>
            </ol>
        </div>
        <div style="width: 100%; text-align: center; padding-top: .1rem;">
            <button class="btn" onclick="return FeedBack();" style="width: 95%; height: .45rem;
                line-height: .45rem; color: #fff; text-align: center; font-size: .16rem; background: #fa8a1e;
                border: none; border-radius: 6px;">
                确定</button>
        </div>
</form>
</body>
</html>
