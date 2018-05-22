<!DOCTYPE html>
<html>
<head>
    <title>用户登录</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="{{asset("/assets/css/vendor.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("/assets/css/flat-admin.css")}}">

    <!-- Theme -->
    <link rel="stylesheet" type="text/css" href="{{asset("/assets/css/theme/blue-sky.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("/assets/css/theme/blue.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("/assets/css/theme/red.css")}}">
    <link rel="stylesheet" type="text/css" href="{{asset("/assets/css/theme/yellow.css")}}">
</head>
<body>
<div class="app app-default">

    <div class="app-container app-login">
        <div class="flex-center">
            <div class="app-header"></div>
            <div class="app-body">
                <div class="loader-container text-center">
                    <div class="icon">
                        <div class="sk-folding-cube">
                            <div class="sk-cube1 sk-cube"></div>
                            <div class="sk-cube2 sk-cube"></div>
                            <div class="sk-cube4 sk-cube"></div>
                            <div class="sk-cube3 sk-cube"></div>
                        </div>
                    </div>
                    <div class="title">Logging in...</div>
                </div>
                <div class="app-block">
                    <div class="app-form">
                        <div class="form-header">
                        </div>
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @php
                        $members = App\Member::where('remember','=','1')->get();
                        if(count($members) > 0){
                        $member = $members->first();
                        }else{
                           $member = new \App\Member();
                        }
                        @endphp
                        <form action="{{route('login')}}" method="post">
                            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">
                <i class="fa fa-user" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" placeholder="用户名" aria-describedby="basic-addon1" name="name" value="{{$member->name}}">
                                {{csrf_field()}}
                            </div>
                            <div class="input-group">
              <span class="input-group-addon" id="basic-addon2">
                <i class="fa fa-key" aria-hidden="true"></i></span>
                                <input type="password" class="form-control" placeholder="密码" aria-describedby="basic-addon2" name="password" value="{{decrypt($member->password)}}">
                            </div>
                            <div style="margin-top: 2%;">
                              <lable>
                                  <input type="checkbox" name="remember" @if(count($members)==1) checked="checked"@endif>
                                  记住我
                              </lable>
                            </div>
                            <div class="text-center" style="margin-top: 4%">
                                <input type="submit" class="btn btn-success btn-submit" value="登录">
                            </div>
                        </form>

                        {{--<div class="form-line">--}}
                            {{--<div class="title">OR</div>--}}
                        {{--</div>--}}
                        {{--<div class="form-footer">--}}
                            {{--<div class="info">--}}
                                {{--<a href="#">--}}
                                    {{--<input type="button" class="btn btn-default btn-sm btn-primary" value="注册">--}}
                                {{--</a>--}}
                            {{--</div>--}}
                            {{--</button>--}}
                        {{--</div>--}}

                    </div>
                </div>
            </div>
            <div class="app-footer">
            </div>
        </div>
    </div>

</div>
<script type="text/javascript" src="{{asset("/assets/js/app.js")}}"></script>

</body>
</html>
