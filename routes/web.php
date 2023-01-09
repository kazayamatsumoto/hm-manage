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
    return view('top');
});

Auth::routes();



//認証後ルート
Route::group(['middleware' => 'auth'], function () {

    //トップ画面に遷移
    Route::get('/home', 'HomeController@index')->name('home');

    //工数登録画面に遷移
    Route::get('/hm/hm_manage_add', 'HmManage\HmManageInOut@add_top')->name('add_top');

    //工数登録処理
    Route::post('/hm/hm_manage_add_do', 'HmManage\HmManageInOut@add_do')->name('add_do');
  });