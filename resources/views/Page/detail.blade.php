@extends("layout.manager")
@section("content")
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header" style="flex-direction:column;justify-content: center;align-items:center">
                    <h1 style="margin-bottom: 20px;">{{$page->title}}</h1>
                    <div class="view-meta">
                        <span>发布时间: {{date("Y-m-d H:i:s",$page->time)}}</span>
                        {{--<span>作者: {{$help->author}}</span>--}}
                    </div>
                </div>
                <div class="card-body" style="padding: 30px 16.666666667%">
                    {!! $page->content !!}
                </div>
            </div>
        </div>
    </div>
@endsection