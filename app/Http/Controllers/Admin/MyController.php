<?php

namespace App\Http\Controllers\Admin;

use App\Events\MyEvent;
use App\Events\MyEvent1;
use App\Http\Requests\AdminPost;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

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
        $model           = Auth::guard('admin')->user();
        $model->password = bcrypt($request->password);
        $model->save();
        $code = mt_rand(100000, 999999);
        Event::fire(new MyEvent1($code));
        flash()->overlay('密码修改成功!', '友情提示:');
        return redirect()->back();
    }

    public function upload(Request $request)
    {
        $file = $request->file('source');
        //获取原文件名
        $originalName = $file->getClientOriginalName();
        //获取扩展名
        $extensionName = $file->getClientOriginalExtension();
        // 获取文件类型
        $fileType = $file->getMimeType();
        // 获取文件绝对路径
        $realPath = $file->getRealPath();
        $fileName = date('Y-m-d-H-i-s').'-'.uniqid().'.'.$extensionName;
        $upload = Storage::disk('uploads')->put($fileName,file_get_contents($realPath));
        if ($upload){
            return "上传成功!";
        }else{
            return '上传失败!';
        }

    }

    /**
     * 纯文本形式的邮件
     */
    public function mail()
    {
        Mail::raw('邮件测试!',function($message){
            $message->from('zhutongqq@163.com','竹筒测试邮件');
            $message->subject('邮件主题---测试邮件');
            $message->to('331304007@qq.com');
        });
    }

    /**
     * 带html格式的邮件
     */
    public function mail1()
    {
        $data =[
          'name'=>"纪向琴",
          'body'=>"感谢您的注册!",
        ];
        Mail::send('admin.login',$data,function ($message){
            $message->from('zhutongqq@163.com','竹筒测试邮件');
            $message->subject('邮件主题---测试邮件');
            $message->to('331304007@qq.com');
        });
    }
}
