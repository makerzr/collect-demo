<?php
/**
 * Created by PhpStorm.
 * User: zhuto
 * Date: 2018/2/5
 * Time: 16:39
 */
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
});