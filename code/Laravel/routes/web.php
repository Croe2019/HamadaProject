<?php

use Illuminate\Support\Facades\Route;

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

// 新しいプロジェクト

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function(){
    // ここに、ログイン後の記事一覧ページに遷移するを設置する
    Route::get('/login/home', 'LoginHomeController@index')->name('login_home');
    Route::get('/my_page/{id}', 'UserController@Mypage')->name('UserMyPage.my_page');
    Route::get('/settings/profile', 'UserController@ShowSetting')->name('UserMyPage.profile_setting');
    Route::get('/auth/logout', 'Auth\LoginController@logout');
    Route::get('/article/create', 'ArticleController@ArticleCreateForm')->name('articles.create');
    Route::post('/article/create', 'ArticleController@ArticleCreate');
});

// 記事本文は、ログインや、会員登録してなくても閲覧できるようにする
Route::get('/home','HomeController@index')->name('home');
Route::get('/article/{id}/body', 'LoginHomeController@body')->name('technology_site.article_body');

Auth::routes();
