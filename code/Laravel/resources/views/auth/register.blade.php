<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>UserRegistration</title>
    <link rel="stylesheet" href="css/user_registration.css">
</head>

<body>
    <div class="registration_form">
        <h1>ようこそ！</h1>
        <form action="{{ route('register') }}" method="POST">
            {{ csrf_field() }}
            <p><input type="text" name="name" placeholder="ユーザー名">{{ $errors->first('name') }}</p>
            <p><input type="text" name="email" placeholder="メールアドレス">{{ $errors->first('email') }}</p>
            <p><input type="password" name="password" placeholder="パスワード">{{ $errors->first('password') }}</p>
            <p><input type="password" name="password_confirmation" placeholder="確認用パスワード">{{ $errors->first('password') }}</p>
            <p><button type="submit" name="action" value="send">登録</button></p>
        </form>
        <span>もしアカウントを持っている場合は</span><a class="no-color-chenge" href="/login"><span>ログインから</span></a>
    </div>
</body>

</html>