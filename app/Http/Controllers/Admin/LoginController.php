<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin.auth')->except(['login','action']);
    }

    /**
     * 登录视图界面
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function login()
    {
        return view('admin.login');
    }

    /**
     * 登录处理界面
     * @param Request $request
     */
    public function action(Request $request)
    {
        $status = Auth::guard('admin')->attempt([
            'username' => $request->username,'password' => $request->password
        ]);
        if($status) {
            return redirect('admin/index');
        }
            return redirect('admin/login')->with('error','用户名或者密码不正确!');
    }

    public function index(Request $request)
    {
        return view('admin.index');
    }

    /**
     * 退出系统
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public  function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}
