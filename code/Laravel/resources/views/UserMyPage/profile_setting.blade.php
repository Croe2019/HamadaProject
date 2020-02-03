<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        SettingPage
    </title>

    <link rel="stylesheet" href="{{ asset('css/profile_setting.css') }}">
</head>

<body>
    <div class="title">
        <h1>Record of Knowledge</h1>
        <img class="img" src="{{ asset('image/background.jpeg')}}" alt="">
    </div>

    <div class="Menu">
        <!-- ここに人気の記事一覧を表示し、記事のページに遷移できるようにする -->
        <!-- ユーザ名等は、ドロップボックス式にする -->
        <h3>
            @if(Auth::check())
                {{ Auth::user()->name }}さん
                <a href="/auth/logout" id="logout" class="my-navbar-item">ログアウト</a>
                <a href="/article/create">作成画面へ</a>
                <a href="/my_page/{id}">マイページ</a>
                <a href="/login/home">記事一覧</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            @else
                ゲストさん
            @endif
        </h3>
    </div>

    <div class="ProfileSetting">
        <h1>
            @if(Auth::check())
                {{ Auth::user()->name }} アカウント / MyProfile
            @endif
        </h1>
    </div>

    <form method="POST" class="row" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="file" name="" size="30" value="">

        <div class="form-group">
            <label for="message">自己紹介</label>
            <textarea name="" rows="5" cols="120" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn-square">更新する</button>

    </form>
</body>

</html>