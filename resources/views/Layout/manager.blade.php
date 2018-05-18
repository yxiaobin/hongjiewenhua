<!DOCTYPE html>
<html>
<head>
    <title>红杰文化后台管理系统</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{asset("/assets/css/vendor.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("/assets/css/flat-admin.css")}}">
    <!-- Theme -->
    <link rel="stylesheet" type="text/css" href="{{asset("/assets/css/theme/blue-sky.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("/assets/css/theme/blue.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("/assets/css/theme/red.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("/assets/css/theme/yellow.css")}}">
    <style type="text/css">
        th::after{
            content: "" !important;
        }
    </style>
    @yield("css")
</head>
<body>
<div class="app app-default">
    <?php
    $member = \App\Member::find(session('id'));
    ?>
    <aside class="app-sidebar" id="sidebar" style="height: auto">
        <div class="sidebar-header">
            <a class="sidebar-brand" href="#"><span class="highlight">红杰文化</span>后台管理</a>
            <button type="button" class="sidebar-toggle">
                <i class="fa fa-times"></i>
            </button>
        </div>
        <div class="sidebar-menu">
            <ul class="sidebar-nav">
                <li class="active">
                    <a href="#">
                        <div class="icon">
                            <i class="fa fa-tasks" aria-hidden="true"></i>
                        </div>
                        <div class="title">控制台首页</div>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#">
                        <div class="icon">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </div>
                        <div class="title">内容管理</div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="{{route('category')}}">文章分类</a></li>
                            <li><a href="{{route('brand')}}">品牌分类</a></li>
                            <li><a href="{{route('artical')}}">文章管理</a></li>
                            <li><a href="{{route('page')}}">页面管理</a></li>
                        </ul>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="{{route('member')}}">
                        <div class="icon">
                            <i class="fa fa-group" aria-hidden="true"></i>
                        </div>
                        <div class="title">人员管理</div>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#">
                        <div class="icon">
                            <i class="fa fa-group" aria-hidden="true"></i>
                        </div>
                        <div class="title">网站管理</div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="{{route('menue')}}">菜单栏管理</a></li>
                            <li><a href="#">拓展栏管理</a></li>

                        </ul>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="{{route('ppt')}}">
                        <div class="icon">
                            <i class="fa fa-group" aria-hidden="true"></i>
                        </div>
                        <div class="title">幻灯片管理</div>
                    </a>
                </li>
                <li class="dropdown">
                    <a href="#">
                        <div class="icon">
                            <i class="fa fa-group" aria-hidden="true"></i>
                        </div>
                        <div class="title">我要加盟</div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="{{url("form/1/0")}}">未读消息</a></li>
                            <li><a href="{{url("form/1/1")}}">已读消息</a></li>
                        </ul>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#">
                        <div class="icon">
                            <i class="fa fa-group" aria-hidden="true"></i>
                        </div>
                        <div class="title">我要维修</div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="{{url("form/2/0")}}">未读消息</a></li>
                            <li><a href="{{url("form/2/1")}}">已读消息</a></li>
                        </ul>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#">
                        <div class="icon">
                            <i class="fa fa-group" aria-hidden="true"></i>
                        </div>
                        <div class="title">我要设计</div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="{{url("form/3/0")}}">未读消息</a></li>
                            <li><a href="{{url("form/3/1")}}">已读消息</a></li>
                        </ul>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#">
                        <div class="icon">
                            <i class="fa fa-group" aria-hidden="true"></i>
                        </div>
                        <div class="title">我要投诉</div>
                    </a>
                    <div class="dropdown-menu">
                        <ul>
                            <li><a href="{{url("form/4/0")}}">未读消息</a></li>
                            <li><a href="{{url("form/4/1")}}">已读消息</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="sidebar-footer">
            <ul class="menu">
                <li>
                    <a href="/" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-cogs" aria-hidden="true"></i>
                    </a>
                </li>
                <li><a href="#"><span class="flag-icon flag-icon-th flag-icon-squared"></span></a></li>
            </ul>
        </div>
    </aside>

    <script type="text/ng-template" id="sidebar-dropdown.tpl.html">
        <div class="dropdown-background">
            <div class="bg"></div>
        </div>
        <div class="dropdown-container">
        </div>
    </script>

    <div class="app-container">

        <nav class="navbar navbar-default" id="navbar">
            <div class="container-fluid">
                <div class="navbar-collapse collapse in">
                    <ul class="nav navbar-nav navbar-mobile">
                        <li>
                            <button type="button" class="sidebar-toggle">
                                <i class="fa fa-bars"></i>
                            </button>
                        </li>
                        <li class="logo">
                            <a class="navbar-brand" href="#"><span class="highlight">Flat v3</span> Admin</a>
                        </li>
                        <li>
                            <button type="button" class="navbar-toggle">
                                <img class="profile-img" src="">
                            </button>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-left">
                        <li class="navbar-brand">
                            <img src="" width="200px">
                        </li>
                        <li class="navbar-title">红杰文化后台管理系统</li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown profile">
                            <a href="/html/pages/profile.html" class="dropdown-toggle"  data-toggle="dropdown">
                               <p>设置</p>
                                <div class="title">Profile</div>
                            </a>
                            <div class="dropdown-menu">
                                <div class="profile-info">
                                    <h4 class="username">管理员您好</h4>
                                </div>
                                <ul class="action">
                                    <li>
                                        <a href="{{route('info')}}">
                                            信息修改
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{route('logout')}}">
                                            退出
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>


        @yield("content")




        <footer class="app-footer">
            <div class="row">
                <div class="col-xs-12">
                    <div class="footer-copyright">
                        Copyright © 2018 萌芽创想
                    </div>
                </div>
            </div>
        </footer>


    </div>

</div>
<script type="text/javascript" src="{{asset("/assets/js/vendor.js")}}"></script>
<script type="text/javascript" src="{{asset("/assets/js/app.js")}}"></script>

</body>
</html>