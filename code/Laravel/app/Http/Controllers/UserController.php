<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class UserController extends Controller
{
    // 引数は、必ず修正する
    public function Mypage($id)
    {
        $users = User::find($id);

        return view('UserMyPage.my_page', [
            'users' => $users,
        ]);
    }

    public function ShowSetting()
    {
        return view('UserMyPage.profile_setting');
    }
}