@extends('admin.layout.master')
@section('content')
    <div class="tpl-portlet-components">
        <div class="portlet-title">
            <div class="caption font-green bold">
                <span class="am-icon-code"></span> 修改密码
            </div>
            <div class="tpl-portlet-input tpl-fz-ml">
                <div class="portlet-input input-small input-inline">
                    <div class="input-icon right">
                        <i class="am-icon-search"></i>
                        <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
                </div>
            </div>
        </div>
        <div class="tpl-block ">
            <div class="am-g tpl-amazeui-form">
                <div class="am-u-sm-12 am-u-md-9">
                    <form class="am-form am-form-horizontal" method="post" action="/admin/changePassword">
                        <div class="am-form-group">
                            {{csrf_field()}}
                            <label for="user-name" class="am-u-sm-3 am-form-label">原来密码：</label>
                            <div class="am-u-sm-9">
                                <input type="password" name="oldpassword" placeholder="原来密码：">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">新密码：</label>
                            <div class="am-u-sm-9">
                                <input type="password" name="newpassword" placeholder="新密码：">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <label for="user-name" class="am-u-sm-3 am-form-label">确认密码：</label>
                            <div class="am-u-sm-9">
                                <input type="password" name="confirmpassword" placeholder="确认密码：">
                            </div>
                        </div>
                        <div class="am-form-group">
                            <div class="am-u-sm-9 am-u-sm-push-3">
                                <button type="submit" class="am-btn am-btn-primary">保存修改</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
