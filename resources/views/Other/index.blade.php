@extends('Layout.manager')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">拓展栏列表</div>
                <div class="card-body">
                    <table class=" table">
                        <thead>
                        <th>名称</th>
                        <th>缩略图</th>
                        <th>超链接</th>
                        <th>排序</th>
                        <th>状态</th>
                        <th>操作</th>
                        </thead>
                        <tbody>
                        @foreach($others as $other)
                            <tr>
                                <td>
                                    {{$other->name}}

                                </td>
                                <td>
                                    <img src="{{asset("uploads/$other->image")}}" alt="" width="100" height="50"></td>
                                </td>
                                <td>{{$other->href}}</td>
                                <td>{{$other->num}}</td>
                                <td>
                                    @if($other->show==0)
                                        未显示
                                    @else
                                        正在显示
                                    @endif
                                </td>
                                <td>

                                    <a href="{{url("othersshow/$other->id")}}" class="btn btn-success btn-xs" role="button">
                                        @if($other->show==0)
                                            显示
                                        @else
                                            隐藏
                                        @endif
                                    </a>
                                    <a href="{{url("othersreedit/$other->id")}}" class="btn btn-primary btn-xs" role="button">
                                        编辑
                                    </a>
                                    <a href="{{url("othersdelete/$other->id")}}" class="btn btn-warning btn-xs" role="button">
                                        删除
                                    </a>
                                    @if($other->num !=1)
                                        <a href="{{url("othersup/$other->id")}}" class="btn btn-warning btn-xs" role="button">
                                            上移
                                        </a>
                                    @endif
                                    @if($other->num < count($others))
                                        <a href="{{url("othersdown/$other->id")}}" class="btn btn-warning btn-xs" role="button">
                                            下移
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="card-header">
                    <a href="{{route('othersedit')}}">
                        <input type="button" class="btn btn-primary" value="添加新的拓展栏">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
