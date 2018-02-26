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
            <li class="active"><a href="tags">标签列表</a></li>
            <li><a href="tags/create">新增标签</a></li>
        </ul>
        <div class="tpl-block ">
            <div class="am-g tpl-amazeui-form">
                    <table class="table table-hover col-md-6">
                        <tr>
                            <th class="col-md-2">#</th>
                            <th class="col-md-2">标签名称</th>
                            <th class="col-md-2">操作</th>
                        </tr>
                        <tr>
                            <td scope="row">1</td>
                            <td>Mark</td>
                            <td>
                                <button type="button" class="btn btn-info">修改</button>
                                <button type="button" class="btn btn-danger">删除</button>
                            </td>
                        </tr>
                    </table>
            </div>
        </div>
    </div>
@endsection
