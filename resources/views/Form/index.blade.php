@extends('layout.manager')
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">页面列表</div>
                <div class="card-body">
                    <table class="datatable table">
                        <thead>
                        <th>接收品牌</th>
                        <th>地址</th>
                        <th>联系人</th>
                        <th>联系电话</th>
                        <th>是否有物业</th>
                        <th>备注</th>
                        </thead>
                        <tbody>
                        @foreach($forms as $form)
                            @php
                            $brand = $form->kind()->get()[0];
                            @endphp
                            <tr>
                                <td>{{$brand->name}}</td>
                                <td>{{$form->addres}}</td>
                                <td>{{$form->name}}</td>
                                <td>{{$form->phone}}</td>
                                <td>@if($form->wuye==0) 0
                                @else 1 @endif</td>
                                <td>{{$form->beizhu}}</td>
                                <td>
                                    <a href="# "class="btn btn-primary btn-xs" role="button">
                                        查看
                                    </a>
                                    <a href="@ "class="btn btn-danger btn-xs" role="button">
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
