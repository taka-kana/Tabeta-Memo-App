<?php

namespace App\Http\Controllers;
use App\Article;
use App\Category;
use App\Keyword;
use App\Revue;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
/*==========================================================================
welcome
==========================================================================*/
public function welcome () {
    return view('welcome');
}
/*==========================================================================
投稿一覧
==========================================================================*/
public function index(Request $request)
{
    $articles = Article::with('user','category','keyword','revue')
    ->orderBy('created_at','desc')
    ->paginate(6);
    $keyword = new Keyword;
    $category = new Category;
    $categories = $category->getLists();
    $keywords = $keyword->getLists();
    $categoryId = $request->input('categoryId');
    $searchWord = $request->input('searchWord');
    return view('articles.index',[
        'articles' => $articles,
        'categories' => $categories,
        'categoryId' => $categoryId,
        'searchWord' => $searchWord,
        ]);
    }

/*==========================================================================
検索機能
==========================================================================*/
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

/*==========================================================================
記事投稿機能
==========================================================================*/
public function getCreate(Request $request)
{
    return view('articles.create');
}

public function postCreate(ArticleRequest $request)
{
    //imageの保存処理
    $image = $request->file('image');
    $path = isset($image) ? $image->store('items', 'public') : '';
    
    //キーワード処理
    preg_match_all('/([a-zA-Z0-9０-９ぁ-んァ-ヶー一-龠]+)/u', $request->keywords, $match);
    $keywords = [];
    foreach($match[1] as $keyword)
    {
        $record = Keyword::firstOrCreate(['name' => $keyword]);
        array_push($keywords, $record);
    }
    
    $keyword_id = [];
    foreach ($keywords as $keyword)
    {
        array_push($keyword_id, $keyword['id']);
    }
    
    $article = new Article();
    $article->title = $request->title;
    $article->summary = $request->summary;
    $article->image = $path;
    $article->category_id = $request->category_id;
    $article->revue_id = $request->revue_id;
    $article->keyword_id = $keyword['id'];
    $article->rating = $request->rating;
    $article->release = $request->release;
    $article->user_id = Auth::id();
    $article->save();
    
    return redirect()->route('article.index');
}

/*==========================================================================
記事詳細機能
==========================================================================*/
public function show($id)
{
    $article = Article::findOrFail($id);
    return view('articles.show', ['article' => $article,]);
}

/*==========================================================================
記事編集機能
==========================================================================*/
public function edit($id,Request $request)
{
    $article = Article::findOrFail($id);
    if($article->user_id !== Auth::id()){
        return redirect('/');
    }
    return view('articles.edit',
    [
        'article' => $article,
        'user' => Auth::user(),
    ]);
    }

public function update(ArticleRequest $request, $id)
{
    $article = Article::findOrFail($id);
    if($article->user_id !== Auth::id())
    {
        return redirect('/');
    }

    //画像処理
    $image = $request->file('image');
    $path = $article->image;
    if (isset($image))
    {
        \Storage::disk('public')->delete($path);
        $path = $image->store('items', 'public');
    }
    //画像が選択されていないとき
    if (empty($image)){
        \Storage::disk('public')->delete($path);
        $path = ("");
    }
    
    //キーワード処理
    preg_match_all('/([a-zA-Z0-9０-９ぁ-んァ-ヶー一-龠]+)/u', $request->keywords, $match);
    $keywords = [];
    foreach($match[1] as $keyword)
    {
        $record = Keyword::firstOrCreate(['name' => $keyword]);
        array_push($keywords, $record);
    }
    
    $keyword_id = [];
    foreach ($keywords as $keyword)
    {
        array_push($keyword_id, $keyword['id']);
    }

    $article->title = $request->title;
    $article->summary = $request->summary;
    $article->image = $path;
    $article->category_id = $request->category_id;
    $article->revue_id = $request->revue_id;
    $article->keyword_id = $keyword['id'];
    $article->rating = $request->rating;
    $article->release = $request->release;
    $article->user_id = Auth::id();
    $article->save();

    return redirect()->route('article.index');
}

/*==========================================================================
記事削除機能
==========================================================================*/
public function destroy(article $article,$id)
{
    $article = Article::findOrFail($id);
    if($article->user_id !== Auth::id())
    {
        return redirect('/');
    }
    //画像削除の処理
    $path = $article->image;
    if($path !== '')
    {
        \Storage::disk('public')->delete($path);
    }
    $article->delete();
    return redirect()->route('article.index');
}
/*==========================================================================
マイmemo
==========================================================================*/
public function myMemo(Request $request)
{
    $articles = Article::with('user','category','keyword','revue');
    $articles = \Auth::user()->articles()
    ->orderBy('created_at','desc')
    ->paginate(6);
    $keyword = new Keyword;
    $category = new Category;
    $categories = $category->getLists();
    $keywords = $keyword->getLists();
    $categoryId = $request->input('categoryId');
    $searchWord = $request->input('searchWord');
    return view('articles.mymemo',[
        'articles' => $articles,
        'categories' => $categories,
        'categoryId' => $categoryId,
        'searchWord' => $searchWord,
        ]);
    }
/*==========================================================================
マイレシピ内検索機能
==========================================================================*/
public function myMemoSearch(Request $request)
{
    $searchWord = $request->input('searchWord');
    $categoryId = $request->input('categoryId');
    $category = new Category;
    $categories = $category->getLists();
    $articles = \Auth::user()->articles();
    $query = Article::query();
    if(!empty($request->get('searchWord')))
    {
        $keyword = Keyword::where('name', 'like', '%' .$searchWord. '%')->first();
            if(!empty($keyword)){
            $keyword = $keyword->id;
            $query = Article::query();
            $query->where('keyword_id', $keyword)->get();
        }else{
            return view('articles.mysearch',[
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
            return view('articles.mysearch',[
                'categoryId' => $categoryId,
                'searchWord' => $searchWord,
                'categories' => $categories,
            ]);
        }
    $articles = $query->get();
    $articles = $query->orderBy('category_id', 'asc')->paginate(6);
    return view('articles.mysearch',[
        'articles' => $articles,
        'categoryId' => $categoryId,
        'searchWord' => $searchWord,
        'categories' => $categories,
    ]);
    }


}