<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        dd('1111');
    }
}
