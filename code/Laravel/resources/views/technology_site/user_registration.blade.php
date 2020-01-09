<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>UserRegistration</title>
    <link rel="stylesheet" href="{{ asset('css/user_registration.css') }}">
</head>

<body>
    <div class="registration_form">
        <h1>ようこそ！</h1>
        <form action="" method="">
            <p><input type="name" id="name" name="name" placeholder="ユーザー名" class="user_name"></p>
            <p><input type="email" id="email" name="email" placeholder="メールアドレス" class="email_address"></p>
            <p><button type="submit">登録</button></p>
        </form>
        <span>もしアカウントを持っている場合は</span><a class="no-color-chenge" href="/login"><span>ログインから</span></a>
    </div>
</body>

</html>