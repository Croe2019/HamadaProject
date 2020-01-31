<!DOCTYPE html>
<html lang="ja">
<head>
    <title>{{$articles->title}}</title>
    <link rel="stylesheet" href="{{ asset('css/article_body.css') }}">
</head>

<body>
    <div class="title">
        <h1>Record of Knowledge</h1>
        <img class="img" src="{{ asset('image/background.jpeg')}}" alt="">
    </div>

    <div class="Trend">
        <!-- ユーザ名等は、ドロップボックス式にする -->
        <h3>
            @if(Auth::check())
                {{ Auth::user()->name }}さん
                <a href="/auth/logout" id="logout" class="my-navbar-item">ログアウト</a>
                <a href="/article/create">作成画面へ</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            @else
                ゲストさん
            @endif
        </h3>
    </div>

    <div class="Article">
        <p>{{ $articles->created_at }}に更新</p>
        <h1>{{ $articles->title }}</h1>
        <p>
            <a "{{ route('technology_site.article_body', ['id' => $articles->id])}}">
                {!! $articles->mark_body !!}
            </a>
        </p>
    </div>
</body>

</html>