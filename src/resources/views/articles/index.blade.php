@extends('layouts.app')

@section('content')
<section class="top">
    <div class="container">
            <!-- Slider main container -->
            <div class="swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide"><img src="/img/普段メニュー.jpg" alt="" class="swiper-img">
            <div class="swiper-item">
                <p>普段メニューから特別な日のメニューまで<br class="is-pc">様々な家族の反応を残すことができます。</p>
            </div>
            </div>
                <div class="swiper-slide"><img src="/img/子供OK.jpg" alt="" class="swiper-img">
                <div class="swiper-item">
                    <p>家族の反応は<br class="is-pc">3段階で記録できます。</p>
                </div>
            </div>
                <div class="swiper-slide"><img src="/img/スイーツ.jpg" alt="" class="swiper-img">
                <div class="swiper-item">
                    <p>料理のカテゴリーは6つに分かれており<br class="is-pc">検索可能です。</p>
                </div>
            </div>
                <div class="swiper-slide"><img src="/img/離乳食.jpg" alt="" class="swiper-img">
                <div class="swiper-item">
                    <p>離乳食の記録やお子様の<br class="is-pc">食べた反応の記録に役立ちます。</p>
                </div>
            </div>
            <div class="swiper-slide"><img src="/img/お弁当.jpg" alt="" class="swiper-img">
                <div class="swiper-item">
                    <p>普段メニューから特別な日のメニューまで<br class="is-pc">様々な家族の反応を記録できます。</p>
                </div>
            </div>
                <div class="swiper-slide"><img src="/img/特別.jpg" alt="" class="swiper-img">
                <div class="swiper-item">
                    <p>普段メニューから特別な日のメニューまで<br class="is-pc">様々な家族の反応を記録できます。</p>
                </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev is-pc"></div>
            <div class="swiper-button-next is-pc"></div>
        </div>
    </div>
</section>
<!-- /.top -->

<section class="search wow fadeInDown">
    <div class="container ">
        <form method="GET" action="{{ route('search') }}">

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

<section class="article">
    <div class="container">
        <div class="article-container_1 wow fadeInDown">
            @foreach ($articles as $article)
            <!-- 記事始まり -->
            <div class="article-wrapper">
                <a class="linkshow" href="{{ route('show', ['id' => $article->id]) }}"></a>
                <div class="article-img-wrapper">
                    <div class="article-img">
                        @if ( $article->image !=='')
                        <img src="{{ \Storage::url($article->image) }}">
                        @else
                        <img src="{{ \Storage::url('items/no_image.jpeg') }}">
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
                            <div class="article-footer-item">
                                @if ($article->user_id === Auth::id())
                                <a href="{{ route('edit', ['id' => $article->id]) }}" class="edit-item"><i class="fas fa-edit"></i>編集</a>
                                <form action="{{ route('destroy', ['id' => $article->id]) }}" method="POST" style="
                                    display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="delete-item"><i class="far fa-trash-alt"></i>削除</button>
                                </form>
                                @endif
                            </div>
                        </div>
                    </div>
                <!-- 記事終わり -->
            </div>
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


