<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index()
    {
        // 全ての記事を取得する(ここは後で、トレンド順等に変更)
        $articles = Article::all();

        return view('technology_site.index', [
            'articles' => $articles,
        ]);
    }
}
