<?php

namespace App\Http\Controllers;
use App\Article;
use App\Category;
use App\Keyword;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $articles = Article::with('user')->get();
        $keyword = new Keyword;
        $category = new Category;
        $categories = $category->getLists();
        $keywords = $keyword->getLists();
        $categoryId = $request->input('categoryId');
        $searchWord = $request->input('searchWord');

        if (!is_null($categoryId)) {
            $article = Article::where('category_id', $categoryId)->orderBy('created_at', 'desc')->paginate(6);
        } else {
            $article = Article::orderBy('created_at', 'desc')->paginate(6);
        }
        return view('articles.index',[
            'articles' => $articles,
            'categories' => $categories,
            'categoryId' => $categoryId,
            'searchWord' => $searchWord,
        ]);
    }
    public function search(Request $request)
    {
        $searchWord = $request->input('searchWord');
        $categoryId = $request->input('categoryId');
        $category = new Category;
        $categories = $category->getLists();
        $query = Article::query();
        if(!empty($request->get('searchWord')))
        {
            $keyword = Keyword::where('name', 'like', '%' .$searchWord. '%')->first();
            if(!empty($keyword)){
                $keyword = $keyword->id;
                $query = Article::query();
                $query->where('keyword_id', $keyword)->get();
            }else{
                return view('articles.search',[
                    'categoryId' => $categoryId,
                    'searchWord' => $searchWord,
                    'categories' => $categories,
                ]);
            }
        }
            if(isset($categoryId))
            {
                $query->where('category_id', $categoryId);
            }

            if(empty($keyword) && empty($category)){
                return view('articles.search',[
                    'categoryId' => $categoryId,
                    'searchWord' => $searchWord,
                    'categories' => $categories,
                ]);
            }

        $articles = $query->get();
        $articles = $query->orderBy('category_id', 'asc')->paginate(6);

        return view('articles.search',[
            'articles' => $articles,
            'categoryId' => $categoryId,
            'searchWord' => $searchWord,
            'categories' => $categories,
        ]);
    }

    public static function escapeLike($str)
    {
        return str_replace(['\\', '%', '_'], ['\\\\', '\%', '\_'], $str);
    }
}
