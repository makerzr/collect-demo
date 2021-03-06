<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

include __DIR__.'/admin/web.php';

Route::any('/wechat', 'WeChatController@serve');

Route::resource('articles','ArticleController');

Route::get('/collection/sum','CollectionController@collectionSum');

Route::get('/collection/demo2','CollectionController@formatData');

Route::get('/collection/demo3','CollectionController@getGithubHot');