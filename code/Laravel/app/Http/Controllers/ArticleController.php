<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateArticle;
use App\Article;

class ArticleController extends Controller
{
    public function ArticleCreateForm()
    {
        return view('articles.create');
    }

    // 記事作成
    public function ArticleCreate(CreateArticle $request)
    {
        // インスタンス生成
        $article = new Article();
        // タイトル、記事本文を格納
        $article->title = $request->title;
        $article->blog_text = $request->blog_text;

        // 記事保存
        $article->save();

        // ログイン後のホーム画面に遷移
        return redirect()->route('login_home', [
            'id' => $article->id,
            'title' => $article->title,
        ]);
    }
}
