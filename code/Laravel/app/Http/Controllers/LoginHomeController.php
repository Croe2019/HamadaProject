<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class LoginHomeController extends Controller
{
    public function Index()
    {
        // 全ての記事を取得する(ここは後で、トレンド順等に変更)
        //$articles = Article::all();

        // ページネーションをDBの結果を格納
        $articles = Article::orderBy('created_at', 'desc')->paginate(5);
        
        return view('technology_site.user_page_index', [
            'articles' => $articles,
        ]);
    }

    // 記事本文を表示
    public function body(int $id)
    {
        $articles = Article::find($id);

        return view('technology_site.article_body', [
            'articles' => $articles,
        ]);
    }
}
