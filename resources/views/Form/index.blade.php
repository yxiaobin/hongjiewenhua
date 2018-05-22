@extends('Layout.manager')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">@if($id==1)我要加盟@elseif($id==2)我要维修@elseif($id==3)我要设计@elseif($id==4)我要投诉@endif  @if($status==0)（未读）@else（已读）@endif</div>
                <div class="card-body">
                    <table class="datatable table">
                        <thead>
                        <th>接收品牌</th>
                        <th>@if($id==1)地址@else门店@endif</th>
                        <th>联系人</th>
                        <th>联系电话</th>
                        @if($id==1)
                        <th>是否有物业</th>
                        @endif
                        <th>@if($id==1)备注@else需求@endif</th>
                        <th>时间</th>
                        <th>操作</th>
                        </thead>
                        <tbody>
                        @foreach($forms as $form)
                            @php
                            $brand = $form->kind()->get()[0];
                            @endphp
                            <tr>
                                <td>{{$brand->name}}</td>
                                <td>{{$form->address}}</td>
                                <td>{{$form->name}}</td>
                                <td>{{$form->phone}}</td>
                                @if($id==1)
                                <td>@if($form->wuye==1)有
                                @else 无 @endif</td>
                                @endif
                                <td>{{str_limit($form->beizhu,30,'...')}}</td>
                                <td>{{$form->created_at}}</td>
                                <td>
                                    <a href="{{url("formdetail/{$form->id}")}}"class="btn btn-primary btn-xs" role="button">
                                        查看
                                    </a>
                                    <a href="{{url("form/{$form->id}/change")}}" class="btn btn-primary btn-xs" role="button">@if($status==0)标为已读@else标为未读@endif</a>
                                    <a href="{{url("form/{$form->id}/delete")}}"class="btn btn-danger btn-xs" role="button" onclick="return comfirm('确定要删除？')">
                                        删除
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
