<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">

    <title>記事作成フォーム</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" 
    integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" 
    crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" 
    integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" 
    crossorigin="anonymous">


    <link rel="stylesheet" href="{{ asset('css/create.css') }}">
</head>

<body>
    <div class="container">
        
            <header>
                <div class="row">
                    <div class="col-sm-6">
                        <h1>記事投稿</h1>
                    </div>
                    <div class="col-sm-6 align-right">
                        <a href="/login/home">HOMEへ戻る</a>
                    </div>
                </div>
                
            </header>
    </div><!-- container1 -->

    <hr>
    <form  method="POST" class="row">
        {{ csrf_field() }}
        <div class="col-sm-8 col-sm-offset-2">
            <div class="form-group">
                <label for="name">タイトル<span class="label label-danger"></span></label>
                <input type="text" name="title" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="message">本文</label>
                <textarea name="blog_text" rows="10" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-default">送信する</button>
        </div><!-- col-sm-8 -->
    </form>
    <hr>

    <div class="container">
        <footer>
            <p>&copy; H2O space</p>
        </footer>
    </div><!-- container2 -->
    

</body>
</html>