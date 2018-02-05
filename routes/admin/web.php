<?php
/**
 * Created by PhpStorm.
 * User: zhuto
 * Date: 2018/2/5
 * Time: 16:39
 */
Route::group(['prefix' => 'admin'],function (){
    Route::get('/login','Admin\LoginController@login');
});