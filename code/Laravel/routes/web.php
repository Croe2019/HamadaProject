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

Route::get('/home','HomeController@index')->name('home');

// ここに、ログイン後の記事一覧ページに遷移するを設置する
/* Route::get('/test', function()
{
    return view('technology_site.user_page_index');
}); */
Auth::routes();
Route::get('/auth/logout', 'Auth\LoginController@logout');