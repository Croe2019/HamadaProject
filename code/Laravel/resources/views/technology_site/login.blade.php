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
        <form action="" method="">
            <p><input type="name" id="name" name="name" placeholder="ユーザー名" class="user_name"></p>
            <p><input type="email" id="email" name="email" placeholder="メールアドレス" class="email_address"></p>
            <p><button type="submit">ログイン</button></p>
        </form>
        <span>アカウントを持っていない場合は</span><a class="no-color-chenge" href="/user_registration"><span>新規登録から</span></a>
    </div>
</body>

</html>