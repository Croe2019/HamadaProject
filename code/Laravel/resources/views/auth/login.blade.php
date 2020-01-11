<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>LoginForm</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<body>
    <div class="registration_form">
        <h1>ログイン</h1>
        <form action="{{ route('login') }}" method="POST">
            {{ csrf_field() }}
            <p><input type="text" id="email" name="email" placeholder="メールアドレス" class="email"></p>
            <p><input type="password" id="password" name="password" placeholder="パスワード" class="password"></p>
            <p><button type="submit" class="btn btn-primary">ログイン</button></p>
        </form>
        <span>アカウントを持っていない場合は</span><a class="no-color-chenge" href="/register"><span>新規登録から</span></a>
    </div>
</body>

</html>