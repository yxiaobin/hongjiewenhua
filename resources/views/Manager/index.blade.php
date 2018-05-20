@extends("layout.manager")

@section("css")
    <style type="text/css">
        li label{
            text-align: right;
            width :15%;
            margin-right: 10%;
        }
        li span{
            text-align: right;
            width:30%;
        }
    </style>
@endsection

@section('content')
    <div class="row" style="margin: 10px -15px 30px -15px">
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <a class="card card-banner card-blue-light" href="{{url("form/1/0")}}">
                <div class="card-body">
                    <i class="icon fa fa-group fa-4x"></i>
                    <div class="content">
                        <div class="title"> 我要加盟</div>
                        <div class="value"><span class="sign"></span>{{$num1}}</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <a class="card card-banner card-blue-light" href="{{url("form/2/0")}}">
                <div class="card-body">
                    <i class="icon fa fa-group fa-4x"></i>
                    <div class="content">
                        <div class="title"> 我要维修</div>
                        <div class="value"><span class="sign"></span>{{$num2}}</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <a class="card card-banner card-blue-light" href="{{url("form/3/0")}}">
                <div class="card-body">
                    <i class="icon fa fa-group fa-4x"></i>
                    <div class="content">
                        <div class="title"> 我要设计</div>
                        <div class="value"><span class="sign"></span>{{$num3}}</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <a class="card card-banner card-blue-light" href="{{url("form/4/0")}}">
                <div class="card-body">
                    <i class="icon fa fa-group fa-4x"></i>
                    <div class="content">
                        <div class="title"> 我要投诉</div>
                        <div class="value"><span class="sign"></span>{{$num4}}</div>
                    </div>
                </div>
            </a>
        </div>
    </div>


@endsection
