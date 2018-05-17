@extends('layout.manager')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">教程列表</div>
                <div class="card-body">
                    <table class="datatable table">
                        <thead>
                        <th>名称</th>
                        <th>摘要</th>
                        <th>缩略图</th>
                        <th>超链接</th>
                        <th>时间</th>
                        <th>操作</th>
                        </thead>
                        <tbody>
                        {{--@foreach($helps as $help)--}}
                            {{--<tr>--}}
                                {{--<td><a href="{{url('help_Detail')}}/{{$help->id}}">{{$help->title}}</td>--}}
                                {{--<td>{{date('Y-m-d H:i:s',$help->time)}}</td>--}}
                                {{--<td>--}}
                                    {{--<a href="{{url('help_Detail')}}/{{$help->id}}" class="btn btn-success btn-xs" role="button">--}}
                                        {{--详情--}}
                                    {{--</a>--}}

                                    {{--<a href="{{url('help_reedit')}}/{{$help->id}}" class="btn btn-primary btn-xs" role="button">--}}
                                        {{--编辑--}}
                                    {{--</a>--}}


                                    {{--<a href="{{url('help_delete')}}/{{$help->id}}" class="btn btn-warning btn-xs" role="button">--}}
                                        {{--删除--}}
                                    {{--</a>--}}

                                {{--</td>--}}
                            {{--</tr>--}}
                        {{--@endforeach--}}
                    </table>
                </div>
                <div class="card-header">
                    <a href="#">
                        <input type="button" class="btn btn-primary" value="新建教程">
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
