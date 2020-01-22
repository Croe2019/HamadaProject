<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>TechnologySite</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <div class="title">
        <h1>TechnologySite(仮)</h1>
        <img class="img" src="{{ asset('image/WEB.jpg')}}" alt="">
    </div>

    <div class="introduction_text">
       <h1>A lot of knowledge is here.</h1>
       <h2>
           エンジニアリングに関する知識を記録・共有するためのサービスです。
           コードを書いていて気づいたことや、自分がハマったあの仕様について、
           他のエンジニアと知見を共有しましょう ;)
        </h2>
        <!-- ログインしているかどうかを判別するために記述※後でデザイン部分も含めて書き直す -->
        @if(Auth::check())
            <p>{{ Auth::user()->name }}さん</p>
            <a href="/auth/logout" id="logout" class="my-navbar-item">ログアウト</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        @else
            ゲストさん
        @endif
    </div>

    <div class="user_registration">
        <!-- ここにユーザー登録画面に遷移するURLを設置する -->
        <a class="no-color-chenge" href="/register"><h1>ユーザー登録</h1></a>
    </div>

    <div class="login">
        <!-- ここにログイン画面に遷移するURLを設置する -->
        <a class="no-color-chenge" href="/login"> <h1>ログイン</h1> </a>
    </div>

    <div class="Trend">
        <!-- ここに人気の記事一覧を表示し、記事のページに遷移できるようにする -->
        <!-- 後で表示位置を修正 -->
        @foreach($articles as $article)
                <a href="{{ route('technology_site.article_body', ['id' => $article->id]) }}" 
                    class="list-group-item">
                    {{ $article->title }}<br> 
                </a>
        @endforeach
    </div>

    {{-- データが取得できれば以下表示 --}}
    @if(count($articles) > 0)
    <div class="articles-table">
        <h2>
            {{-- ページリンクを表示 --}}
            {{ $articles->links() }}
        </h2>
    </div>
    @endif
</body>
    
</html>