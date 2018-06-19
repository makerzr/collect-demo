<?php
/**
 * Created by PhpStorm.
 * User: zhuto
 * Date: 2018/2/5
 * Time: 16:39
 */
Auth::loginUsingId(99);
Route::group(['prefix' => 'admin','namespace' => 'Admin'],function (){
    //登录界面
    Route::get('/login','LoginController@login');
    // 登录处理
    Route::post('/login','LoginController@action');
    // 登录成功后的界面
    Route::get('/index','LoginController@index');
    // 退出界面
    Route::get('/logout','LoginController@logout');
    // 修改密码界面
    Route::get('/password','MyController@passwordForm');
    // 处理修改密码
    Route::post('/changePassword','MyController@resetPassword');
    //  标签管理
    Route::resource('/tags','TagController');
    // 文件上传
    Route::post('/upload','MyController@upload');
    // 发送纯文本邮件
    Route::get('/mail','MyController@mail');
    // 发送html邮件
    Route::get('/mail1','MyController@mail1');
    // 通过mailable 发送邮件
    Route::get('/mailable','MyController@mailable');
});
//得到所有的用户
Route::get('users','UserController@index');