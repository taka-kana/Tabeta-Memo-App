<?php

namespace App\Http\Controllers;
use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::with('user')
        ->orderBy('created_at','desc')
        ->paginate(5);

        return view('articles.index',['articles' => $articles]);
    }
}
