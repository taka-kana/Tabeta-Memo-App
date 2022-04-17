@extends('layouts.app')

@section('content')
<section class="top">
    <div class="container">
            <div class="title my_recipe-title" >My-Memo</div>
    </div>
</section>
<!-- /.top -->

<section class="search wow fadeInDown">
    <div class="container ">
        <form method="GET" action="{{ route('article.myMemoSearch') }}">

        <div class="search-items">
            <div class="search-items-wrapper">
                <div class="keyword">
                    <h3 class="keyword-title">キーワード検索</h3>
                    <input type="text" name="searchWord" class="keyword-box" value="{{ request('searchWord') }}" placeholder="にんじん...など1つ">
                </div>
                    <div class="category">
                        <h3 class="category-title">カテゴリー選択</h3>
                        <select name="categoryId" value="{{ old('categoryId') }}" class="category-select">
                            <option value="">未選択</option>
                            @foreach($categories as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="submit" value="絞り込み" class="search-btn">
                </div>
            </div>
        </form>
    </div>
</section>
<!-- /.search -->

@if(Auth::check())
<a href="{{ route('article.getCreate') }}" class="post-btn is-sp">投稿する</a>
@endif

<section class="article">
    <div class="container">
        <div class="article-container_1 wow fadeInDown">
            @foreach ($articles as $article)
            <!-- 記事始まり -->
            <div class="article-wrapper">
                <a class="linkshow" href="{{ route('article.show', ['id' => $article->id]) }}"></a>
                    <div class="article-img-wrapper">
                        <div class="article-img">
                            @if ( $article->image !=='')
                            <img src="https://tabeta-memo-bucket.s3.ap-northeast-1.amazonaws.com/{{ $article->image }}">
                            @else
                            <img src="{{ asset('img/no_image.jpeg') }}">
                            @endif
                        </div>
                    </div>
                    <div class="article-body">
                        <h3 class="recipe-title">{{ $article->title }}</h3>
                        <div class="article-items">
                            <p class="article-item-category">{{ $article->category->name }}</p>
                            <p class="article-item-keyword">{{ $article->keyword->name }}</p>
                            
                        </div>
                        <p class="article-text is-pc">{{ $article->summary }}</p>
                        <div class="article-footer">
                            <div class="article-user-name-title">投稿者&nbsp;:&nbsp;<span class="article-user-name">{{ $article->user->name }}</span></div>
                            <div class="article-datetime-title">投稿日&nbsp;:&nbsp;<span class="article-datetime-name">{{ $article->created_at->format('Y-m-d') }}</span></div>
                            <div class="article-footer-item">
                                @if ($article->user_id === Auth::id())
                                <a href="{{ route('article.edit', ['id' => $article->id]) }}" class="edit-item"><i class="fas fa-edit"></i>編集</a>
                                <form action="{{ route('article.destroy', ['id' => $article->id]) }}" method="POST" style="
                                    display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="delete-item"><i class="far fa-trash-alt"></i>削除</button>
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            <!-- 記事終わり -->
            @endforeach
        </div>
        <div class="page-nation">
            <div class="nation-wrapper">
                {{ $articles->links() }}
            </div>
        </div>
    </div>
</section>
<!-- /.article -->

@endsection


