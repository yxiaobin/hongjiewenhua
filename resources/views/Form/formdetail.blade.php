@extends('layout.manager')
@section('css')
    <style>
        .form-group{
            border-bottom:1px solid #e5e5e5;
            padding: 10px 0;
            font-size: 16px;
        }
        .form-group label {
            font-weight: 600!important;
        }
    </style>
    @endsection
@section('content')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card">
                <div class="card-header">表单详情</div>
                <div class="card-body">
                    <div class="card-body">
                        <div class="form form-horizontal">
                            <div class="section">
                                <div class="section-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">品牌:</label>
                                        <div class="col-md-9">
                                            {{$form->kind->name}}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label class="control-label">@if($form->category==1)地址@else门店@endif :</label>
                                        </div>
                                        <div class="col-md-9">
                                            {{$form->address}}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">联系人:</label>
                                        <div class="col-md-9">

                                                {{$form->name}}
                                        </div>
                                        </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">联系电话:</label>
                                        <div class="col-md-9">

                                            {{$form->phone}}
                                        </div>
                                    </div>
                                    @if($form->category==1)
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">是否有物业:</label>
                                        <div class="col-md-9">
                                            @if($form->wuye==1)
                                                有
                                                @else
                                            无
                                                @endif
                                        </div>
                                    </div>
                                    @endif
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">提交时间:</label>
                                        <div class="col-md-9">

                                            {{$form->created_at}}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">@if($form->category==1)备注@else需求@endif:</label>
                                        <div class="col-md-9">

                                            {{$form->beizhu}}
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                        <div class="form-footer">
                            <div class="form-group" style="border: none;">
                                <div class="col-md-9 col-md-offset-3">
                                    <a href="{{url("form/{$form->id}/change")}}"><button type="submit" class="btn btn-primary">@if($form->isreading==0)标为已读@else标为未读@endif</button></a>
                                    <a href="{{url("form/{$form->id}/delete")}}"><button type="button" class="btn btn-default">返回</button></a>
                                </div>
                            </div>
                        </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
