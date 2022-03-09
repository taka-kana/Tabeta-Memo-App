@extends('layouts.app')

@section('content')
<section class="welcome">
        <div class="welcome__top">
            <h2 class="welcome__top-item">子供・家族の食事の好みや<br class="is-sp">傾向を記録できる
                <br>料理の記録アプリ
            </h2>
            <div class="welcome__logo"></div>
            <div class="welcome__btns-wrapper">
                <a href="{{ route('index') }}" class="to-index_btn"><span>みんなの記録をみてみる</span></a>
                <a href="{{ route('register') }}" class="welcome__btn">新規登録</a>
                <a href="{{ route('getLogin') }}" class="welcome__btn">ログイン</a>
            </div>
        </div>
        <div class="welcome__main">
            <div class="welcome__main-container">
                <h3 class="welcome__main-title">
                    Tabeta - Memo？<br>何ができるの？</h3>
                    <div class="welcome__main-item-wrapper">
                        <div class="welcome__main-item-container-top">
                            <div class="welcome__main-item-container iphone-space">
                                <div class="welcome__main-item-title">食事の内容を記録</div>
                                <div class="welcome__main-item-body">好評だった料理や、初めて子供が食べた料理の反応などを写真付きで記録できます。また子供の苦手な食材を発見したり、食べた量などを記録することにより、献立を考える時に役立ちます。
                                </div>
                            </div>
                            
                            
                            <div class="welcome__main-item-container">
                                <div class="welcome__main-item-title">我が家のレビュー</div>
                                <div class="welcome__main-item-body">我が家のレビューでは3段階のフェイススケールで直感的に家族の反応を記録できます。</div>
                            </div>
                        </div>
                        <div class="welcome__main-item-container-bottom">
                            <div class="welcome__main-item-container macbook-rf">
                                <div class="welcome__main-item-title">検索機能</div>
                                <div class="welcome__main-item-body ">自分が記録した記事の一覧表示、カテゴリー・キーワード検索でmy-memo内の記事を簡単に検索・閲覧できます。また、みんなの記録内でも検索が可能で、他のユーザーの記録も参考にできます。</div>
                            </div>
                            <div class="welcome__main-item-container macbook-space">
                                <div class="welcome__main-item-title ">みんなの記録</div>
                                <div class="welcome__main-item-body">公開設定をオンにすると『みんなの記録』に投稿され、他のユーザーが投稿した記事を閲覧できます。（完食度は反映されません）</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="welcome__recommendation">
            <h3 class="welcome__recommendation-title">どんな人におすすめ？</h3>
            <div class="welcome__recommendation-image-wrapper">
                <div class="welcome__recommendation-image1 is-pc"></div>
                <div class="welcome__recommendation-image2"></div>
                <div class="welcome__recommendation-image3"></div>
                <div class="welcome__recommendation-accent"></div>
            </div>
            <p class="welcome__recommendation-item is-pc">育児中のパパ・ママをはじめとする全ての人にお使いいただけます。離乳食や、アレルギーの記録、ご飯・おやつの摂取量の記録に便利です。また、育児以外にもお菓子作りの記録やパートナーの好みを記録するツールとしてもご利用いただけます。みんなの記録に投稿し、料理のモチベーションをアップさせることもできます。
            </p>
            <h3 class="welcome__recommendation-item is-sp">育児中のパパ・ママをはじめとする全ての人にお使いいただけます。離乳食や、アレルギーの記録、ご飯・おやつの摂取量の記録に便利です。
            </h3>
            <div class="welcome__recommendation-image1 is-sp"></div>
                <h3 class="welcome__recommendation-item is-sp">
            育児以外にもお菓子作りの記録やパートナーの好みを記録するツールとしてもご利用いただけます。みんなの記録に投稿し、料理のモチベーションをアップさせることもできます。
            </h3>
        </div>
        <div class="welcome__bottom">
            <h3 class="welcome__bottom-title">Tabeta-Memoを利用する</h3>
            <div class="welcome__bottom-btn-wrapper">
                <a href="{{ route('index') }}" class="to-index_btn"><span>みんなの記録をみてみる</span></a>
                <a href="{{ route('register') }}" class="welcome__btn">新規登録</a>
                <a href="{{ route('getLogin') }}" class="welcome__btn">ログイン</a>
            </div>
        </div>
 

</section>

@endsection
