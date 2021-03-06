<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>TechnologySite</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/user_page_index.css') }}">
</head>
<body>
    <div class="title">
        <h1>Record of Knowledge</h1>
        <img class="img" src="{{ asset('image/background.jpeg')}}" alt="">
    </div>

    <div class="Trend">
        <!-- ここに人気の記事一覧を表示し、記事のページに遷移できるようにする -->
        <h1>記事一覧</h1>
        
        <!-- ユーザ名等は、ドロップボックス式にする -->
        <h3>
            @if(Auth::check())
                {{ Auth::user()->name }}さん
                <a href="/auth/logout" id="logout" class="my-navbar-item">ログアウト</a>
                <a href="/article/create">作成画面へ</a>
                <a href="/my_page/{id}">マイページ</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            @else
                ゲストさん
            @endif
        </h3>
    </div>

    <div class="Article">
        <!-- 後で表示位置を修正 -->
        <h2>
            @foreach($articles as $article)
                <a href="{{ route('technology_site.article_body', ['id' => $article->id]) }}" 
                    class="list-group-item">
                    {{ $article->title }}<br> 
                </a>
            @endforeach
        </h2>
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