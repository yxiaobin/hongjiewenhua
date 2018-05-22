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
                    <form action="#" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>图标</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="form-group">
                            <label>超链接 <span class="size">（自定义分类下超链接必须填写）</span></label>
                            <input type="text" class="form-control" name="href">
                        </div>
                        <div class="form-group">
                            <label>名称</label>
                            <select class="form-control" name="name" id="select" style="margin-bottom: 10px;">
                                <option value="">-----请选择-----</option>
                                <optgroup label="文章类别">
                                    @php
                                        $articals = App\Category::all();
                                    @endphp
                                    <option value="1/全部文章" name="name">全部文章</option>
                                    @foreach($articals as $artical)
                                        <option value="1/{{$artical->name}}" name="name">{{$artical->name}}</option>
                                    @endforeach
                                </optgroup>
                                <optgroup label="表单类别">
                                    <option value="2/1" name="name">我要加盟</option>
                                    <option value="2/2" name="name">我要维修</option>
                                    <option value="2/3" name="name">我要设计</option>
                                    <option value="2/4" name="name">我要投诉</option>
                                </optgroup>
                                <optgroup label="其他">
                                    <option value="3/自定义" name="name">自定义</option>
                                    @php
                                        $pages = App\Page::all();
                                    @endphp
                                    @foreach($pages as $page)
                                        <option value="3/{{$page->title}}" name="name">{{$page->title}}</option>
                                    @endforeach

                                </optgroup>

                            </select>
                        </div>
                        <div class="form-group" style="display:none;" id="lianjie">
                            <label>链接名称</label>
                            <input type="text" class="form-control" placeholder="链接名称" name="url_name" value="">
                        </div>
                        <input type="submit" class="btn btn-primary" value="确定">
                        <input type="button" class="btn btn-default" onclick="location.href='{{route('menue')}}'" value="取消">
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $('#select').change(function () {
            var v = $('#select').val();
            var s = v.split('/');
            if(s[1]=='自定义'){
                $('#lianjie').show();
            }else{
                $('#lianjie').hide();
            }

            $('#menu').val(s[1]);
        });
    </script>
@endsection