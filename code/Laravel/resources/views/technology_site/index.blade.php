<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>TechnologySite</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
    <div class="title">
        <h1>TechnologySite(仮)</h1>
        <img class="img" src="{{ asset('image/WEB.jpg')}}" alt="">
    </div>
</body>

<header>
    <div class="introduction_text">
       <h1>A lot of knowledge is here.</h1>
       <h2>
           エンジニアリングに関する知識を記録・共有するためのサービスです。
           コードを書いていて気づいたことや、自分がハマったあの仕様について、
           他のエンジニアと知見を共有しましょう ;)
        </h2>
    </div>

    <div class="user_registration">
        <!-- ここにユーザー登録画面に遷移するURLを設置する -->
        <h1>ユーザー登録</h1>
    </div>

    <div class="login">
        <!-- ここにログイン画面に遷移するURLを設置する -->
        <h1>ログイン</h1>
    </div>

    <form action="" method="">
        <div class="registration_form">
          <label>ユーザー名</label> <input type="name" id="name" name="name" placeholder="siteman" class="user_name">

          <label>メールアドレス</label> <input type="email" id="email" name="email" placeholder="site@gmail.com" class="email_address">
          
          <input type="submit" value="登録する">
        </div>
    </form>
    

    <div class="Trend">
        <!-- ここに人気の記事一覧を表示し、記事のページに遷移できるようにする -->

    </div>
</header>
    
</html>