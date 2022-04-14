@extends('layouts.app')

@section('content')

<section class="show">
    <div class="container">
        <h3 class="show-title">レシピ詳細</h3>
        <div class="show-wrapper">
            <div class="show_article-name-wrapper wow fadeInDown">
                <div class="show_article-name-title">レシピ名&nbsp;:&nbsp;</div>
                <div class="show_article-name ">{{ $article->title }}</div>
            </div>
            <div class="show_article-item-wrapper wow fadeInDown">
                <div class="show_article-category-wrapper">
                    <div class="show_article-category-title">カテゴリー&nbsp;:&nbsp;</div>
                    <div class="show_article-category">{{ $article->category->name }}</div>
                </div>
                <div class="show_article-keyword-wrapper">
                    <div class="sikiri">|</div>
                    <div class="show_article-keyword-title">キーワード&nbsp;:&nbsp;</div>
                    <div class="show_article-keyword">{{ $article->keyword->name }}</div>
                </div>
            </div>
            <div class="show_article-item-wrapper_under">
                <div class="show_article-reaction-wrapper wow fadeInDown">
                    <div class="show_article-reaction-title">我が家のレビュー&nbsp;:&nbsp;</div>
                    <div class="show_article-reaction">
                        @if($article->revue_id =='1')
                        <i class="far fa-grimace"></i>
                        @endif
                        @if($article->revue_id =='2')
                        <i class="far fa-smile"></i>
                        @endif
                        @if($article->revue_id =='3')
                        <i class="far fa-kiss-wink-heart"></i>
                        @endif
                        {{ $article->revue->name }}</div>
                    </div>
                    @if ($article->user_id == Auth::id())
                    <div class="sikiri is-pc wow fadeInDown">|</div>
                    <div class="rating_item_wrapper wow fadeInDown">
                        <div class="rating_item">完食度&nbsp;:&nbsp;{{ $article->rating }}</div>
                    </div>
                    @endif
                </div>
            <div class="show_article-img-wrapper wow fadeInDown">
                <div class="show_article-img">
                    @if ( $article->image !=='')
                    <img src="https://tabeta-memo-bucket.s3.ap-northeast-1.amazonaws.com/{{ $article->image }}">
                    @else
                    <img src="{{ asset('img/no_image.jpeg') }}">
                    @endif
                </div>
            </div>
            <div class="name-datetime-wrapper">
                <div class="show_article-username-wrapper wow fadeInDown">
                    <div class="show_article-username-title">投稿者&nbsp;:&nbsp;</div>
                    <div class="show_article-username ">{{ $article->user->name }}</div>
                </div>
                @if ($article->user_id == Auth::id())
                <div class="datetime-wrapper wow fadeInDown">
                    <div class="date-time-title">投稿日&nbsp;:&nbsp;</div>
                    <div class="date-time-name">{{ $article->created_at->format('Y-m-d') }}</div>
                </div>
                @endif
            </div>
            <div class="show_article-memo-wrapper wow fadeInDown">
                <div class="show_article-memo-title">memo</div>
                <div class="show_article-memo">{{ $article->summary }}</div>
            </div>
            @if ($article->user_id == Auth::id())
            <div class="release_item_wrapper wow fadeInDown">
                <div class="release_item">公開設定&nbsp;:&nbsp;{{ $article->release }}</div>
            </div>
            @endif
            <div class="show_article-btn-wrapper wow fadeInDown">

                <a href="{{ route('article.index') }}" class="show_article-btn-back">戻る</a>
                @if ($article->user_id == Auth::id())
                <a href="{{ route('article.edit', ['id' => $article->id]) }}" class="show_article-btn-edit">編集</a>
                @endif

            </div>
        </div>
    </div>
</section>
@endsection