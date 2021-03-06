@extends('Layout.manager')
@section("content")
    <script type="text/javascript" charset="utf-8" src="{{asset("/Ueditor/ueditor.config.js")}}"></script>
    <script type="text/javascript" charset="utf-8" src="{{asset("/Ueditor/ueditor.all.min.js")}}"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="{{asset("/Ueditor/lang/zh-cn/zh-cn.js")}}"></script>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="card-header">新建菜单</div>
                <div class="card-body">
                    <form action="{{route('othersedit')}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>图标<span class="size">(64x64)</span></label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="form-group">
                            <label>超链接 </label>
                            <input type="text" class="form-control" name="href" value="">
                        </div>
                        <div class="form-group">
                            <label>名称</label>
                            <input type="text" class="form-control" name="name" value="">
                        </div>
                        <input type="submit" class="btn btn-primary" value="确定">
                        <input type="button" class="btn btn-default" onclick="location.href='{{route('other')}}'" value="取消">
                </div>
            </div>
        </div>
    </div>


@endsection