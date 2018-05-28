@extends('Layout.manager')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">菜单栏列表</div>
                <div class="card-body">
                    <table class=" table">
                        <thead>
                        <th>类型</th>
                        <th>缩略图</th>
                        <th>超链接</th>
                        <th>排序</th>
                        <th>状态</th>
                        <th>操作</th>
                        </thead>
                        <tbody>
                        @foreach($menues as $menue)
                            <tr>
                                <td>@if($menue->name==1)           我要加盟
                                    @elseif($menue->name==2)        我要维修
                                    @elseif($menue->name==3)        我要设计
                                    @elseif($menue->name==4)        我要投诉
                                    @else   {{$menue->name}}
                                    @endif
                                </td>
                                <td>
                                    <img src="{{asset("uploads/$menue->image")}}" alt="" width="100" height="50"></td>
                                </td>
                                <td>{{$menue->href}}</td>
                                <td>{{$menue->num}}</td>
                                <td>
                                    @if($menue->show==0)
                                        未显示
                                        @else
                                        正在显示
                                        @endif
                                </td>
                                <td>
                                    <a href="{{url("menueshow/$menue->id")}}" class="btn btn-success btn-xs" role="button">
                                        @if($menue->show==0)
                                            显示
                                            @else
                                        隐藏
                                            @endif
                                    </a>
                                        <a href="{{url("menuereedit/$menue->id")}}" class="btn btn-primary btn-xs" role="button">
                                        编辑
                                    </a>
                                    <a href="{{url("menuedelete/$menue->id")}}" class="btn btn-warning btn-xs" role="button" onclick="return confirm('确认要删除吗？')">
                                        删除
                                    </a>
                                    @if($menue->num !=1)
                                    <a href="{{url("menueup/$menue->id")}}" class="btn btn-warning btn-xs" role="button">
                                        上移
                                    </a>
                                    @endif
                                    @if($menue->num < count($menues))
                                    <a href="{{url("menuedown/$menue->id")}}" class="btn btn-warning btn-xs" role="button">
                                        下移
                                    </a>
                                     @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="card-header">
                    <a href="{{route('menueedit')}}">
                        <input type="button" class="btn btn-primary" value="添加新的菜单栏">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
