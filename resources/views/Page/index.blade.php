@extends('Layout.manager')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">页面列表</div>
                <div class="card-body">
                    <table class="datatable table">
                        <thead>
                        <th>名称</th>
                        <th>缩略图</th>
                        <th>操作</th>
                        </thead>
                        <tbody>
                        @foreach($pages as $page)
                            <tr>
                                <td>{{$page->title}}</td>
                                <td><img src="{{asset("uploads/$page->img")}}" style="width: 100px; height: 60px;"></td>
                                <td>
                                    {{--<a href="{{url("/pageshow/$page->id")}}" class="btn btn-success btn-xs" role="button">--}}
                                        {{--预览--}}
                                    {{--</a>--}}
                                    <a href="{{url("reeditpage/$page->id")}} "class="btn btn-primary btn-xs" role="button">
                                        编辑
                                    </a>
                                    <a href="{{url("deletepage/$page->id")}} "class="btn btn-danger btn-xs" role="button">
                                        删除
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="card-header">
                    <a href="{{route('addpage')}}">
                        <input type="button" class="btn btn-primary" value="新建页面">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
