<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class MyController extends Controller
{
    /**
     * 密码修改界面
     * @param Request $request
     */
    public function passwordForm(Request $request)
    {
        return view('admin.my.passwordForm');
    }

    public function resetPassword(AdminPost $request)
    {
        $model = Auth::guard('admin')->user();
        $model->password = bcrypt($request->password);
        $model->save();
        flash()->overlay('密码修改成功!', '友情提示:');
        return redirect()->back();
    }
}
