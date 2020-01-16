<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>TechnologySite</title>
    <link rel="stylesheet" href="{{ asset('css/user_page_index.css') }}">
</head>
<body>
    <div class="title">
        <h1>TechnologySite(仮)</h1>
    </div>

    <div class="Trend">
        <!-- ここに人気の記事一覧を表示し、記事のページに遷移できるようにする -->
        <h1>トレンド</h1>
        <h2>ここに記事一覧を表示し、各記事ごとのURLを設置する</h2>

        @if(Auth::check())
            <p>{{ Auth::user()->name }}さん</p>
            <a href="/auth/logout" id="logout" class="my-navbar-item">ログアウト</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
        @else
            ゲストさん
        @endif
    </div>

    <div class="Create">
        <a href="/article/create">作成画面へ</a>
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

</body>
    
</html>