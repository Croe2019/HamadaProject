<!DOCTYPE html>
<html lang="ja">
<head>
    <title>記事本文</title>
</head>

<body>
    <div class="Article">
        <a "{{ route('technology_site.article_body', ['id' => $articles->id])}}">
            <!-- {{ $articles->blog_text }} -->
            {!! $articles->mark_body !!}
        </a>
    </div>
</body>

</html>