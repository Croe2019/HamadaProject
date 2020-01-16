<!DOCTYPE html>
<html lang="ja">
<head>
    <title>記事本文</title>
</head>

<body>
    <div class="Article">
        <a "{{ route('technology_site.article_body', ['id' => $articles->id])}}" class="list-group-item">
            {{ $articles->blog_text }}<br>
        </a>
    </div>
</body>

</html>