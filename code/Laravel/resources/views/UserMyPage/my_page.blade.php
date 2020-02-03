<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        @if(Auth::check())
            {{ Auth::user()->name }}
        @endif
    </title>

    <link rel="stylesheet" href="{{ asset('css/my_page.css') }}">
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
                <a href="/login/home">記事一覧</a>
                <a href="/settings/profile">プロフィールを編集する</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            @else
                ゲストさん
            @endif
        </h3>
    </div>

    <div class="UserImage">
        <h1>イメージ画像表示</h1>
    </div>

    <div class="SelfIntroduction">
        <h1>自己紹介文表示</h1>
    </div>

    <div class="MyArticle">
        <h1>自分が投稿した記事一覧</h1>
    </div>


</body>

</html>