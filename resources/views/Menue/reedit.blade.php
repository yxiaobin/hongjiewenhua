@extends('layout.manager')
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
                    <form action="{{url("menuereedit/$p->id")}}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>图标</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="form-group">
                            <img src="{{url("getImage/$p->image")}}" style="widows:300px; height: 150px;">
                        </div>
                        <div class="form-group">
                            <label>超链接 <span class="size">（自定义分类下超链接必须填写）</span></label>
                            <input type="text" class="form-control" name="href" value="{{$p->href}}">
                        </div>
                        <div class="form-group">
                            <label>名称</label>
                            <select class="form-control" name="category" id="select" style="margin-bottom: 10px;">
                                <option value="-1">-----请选择-----</option>
                                <optgroup label="文章类别">
                                    @php
                                        $articals = App\Category::all();
                                    @endphp
                                    <option value="1/全部文章" name="category"
                                    @if($p->name=='全部文章')
                                    selected
                                    @endif>全部文章</option>
                                    @foreach($articals as $artical)
                                        <option value="1/{{$artical->name}}" name="category"
                                                @if($p->name == $artical->name)
                                                selected
                                                @endif
                                        >{{$artical->name}}</option>
                                    @endforeach
                                </optgroup>
                                <optgroup label="表单类别">
                                    <option value="2/1" name="category"
                                            @if($p->name==1)
                                            selected
                                            @endif
                                    >我要加盟</option>
                                    <option value="2/2" name="category"
                                            @if($p->name==2)
                                            selected
                                            @endif>我要维修</option>
                                    <option value="2/3" name="category"
                                            @if($p->name==3)
                                            selected
                                            @endif>我要设计</option>
                                    <option value="2/4" name="category"
                                            @if($p->name==4)
                                            selected
                                            @endif>我要投诉</option>
                                </optgroup>
                                <optgroup label="其他">
                                    <option value="3/自定义" name="category"
                                            @if($p->name=="自定义")
                                            selected
                                            @endif
                                    >自定义</option>
                                    @php
                                        $pages = App\Page::all();
                                    @endphp
                                    @foreach($pages as $page)
                                        <option value="3/{{$page->title}}" name="category"
                                                @if($p->name==$page->title)
                                                selected
                                                @endif
                                        >{{$page->title}}</option>
                                    @endforeach

                                </optgroup>

                            </select>
                        </div>
                        <input type="submit" class="btn btn-primary" value="确定">
                        <input type="button" class="btn btn-default" onclick="location.href='#'" value="取消">
                </div>
            </div>
        </div>
    </div>

@endsection