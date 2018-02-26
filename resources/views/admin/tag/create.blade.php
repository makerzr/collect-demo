@extends('admin.layout.master')
@section('content')
    <div class="tpl-portlet-components">
        <div class="portlet-title">
            <div class="caption font-green bold">
                <span class="am-icon-code"></span> 标签管理：
            </div>
            <div class="tpl-portlet-input tpl-fz-ml">
                <div class="portlet-input input-small input-inline">
                    <div class="input-icon right">
                        <i class="am-icon-search"></i>
                        <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
                </div>
            </div>
        </div>
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
            <li><a href="/admin/tags">标签列表</a></li>
            <li class="active"><a href="/admin/tags/create">新增标签</a></li>
        </ul>
        <div class="tpl-block ">
            <div class="am-g tpl-amazeui-form">

            </div>
        </div>
    </div>
@endsection
