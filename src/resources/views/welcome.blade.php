@extends('layouts.app')

@section('content')
<section class="welcome">
    <div class="welcome__top">
        <h2 class="welcome__top-item">子供・家族の食事の好みや<br class="is-sp">傾向を記録できる
            <br>料理の記録アプリ
        </h2>
        <div class="welcome__logo"></div>
        <div class="welcome__btns-wrapper">
            <a href="{{ route('login.guest') }}" class="to-index_btn"><span>ゲストで利用してみる</span></a>
            <a href="{{ route('user.register') }}" class="welcome__btn">新規登録</a>
            <a href="{{ route('user.getLogin') }}" class="welcome__btn">ログイン</a>
        </div>
    </div>
    <div class="welcome__main">
        <div class="welcome__main-container">
            <h3 class="welcome__main-title">
                Tabeta - Memo？<br>何ができるの？</h3>
                <div class="welcome__main-item-wrapper">
                    <div class="welcome__main-item-container-top">
                        <div class="welcome__main-item-container iphone-space">
                            <div class="welcome__main-item-title1 ">好評・苦手な食べ物の記録</div>
                            <div class="welcome__main-item-body">家族の好評だった料理や、初めて子供が食べた料理の反応、介護食の反応、ペットが興味を示したペットフードなどを写真付きで記録できます。また子供の苦手な食材を発見したり、食べた量などを記録することにより、献立を考える時や健康管理に役立ちます。
                            </div>
                        </div>
                        
                        
                        <div class="welcome__main-item-container revue__item">
                            <div class="left__rf">
                                <div class="welcome__main-item-title2 ">我が家のレビュー</div>
                                <div class="welcome__main-item-body ">我が家のレビューでは3段階のフェイススケールで直感的に家族の反応を記録できます。</div>
                            </div>
                        </div>
                    </div>
                    <div class="welcome__main-item-container-bottom">
                        <div class="welcome__main-item-title3">カテゴリー・キーワード検索</div>
                            <div class="welcome__main-item-body ">自分が記録した記事やみんなの記録も内容を簡単に検索・閲覧できます。また、他のユーザーの記録も確認できますので、同じ悩みを持った子供・お年寄り・ペットの食事を参考にできます。</div>
                        <div class="welcome__main-item-container koukai__item">
                            <div class="welcome__main-item-title4 ">非公開投稿機能</div>
                            <div class="welcome__main-item-body">公開設定をオフにすると『みんなの記録』に投稿されず、ご自身専用の一覧ページのみで投稿を確認できます。一般的なSNSとは違い、投稿したい記事と自分だけで確認したい記事を選ぶことができます。</div>
                        </div>
                    </div>

                        <div class="welcome__main-item-container macbook-rf"></div>
                </div>
            </div>
        </div>
    <div class="welcome__recommendation">
        <h3 class="welcome__recommendation-title">どんな人におすすめ？</h3>
        <div class="welcome__recommendation-image-wrapper">
            <div class="welcome__recommendation-image1 is-pc"></div>
            <div class="welcome__recommendation-image2"></div>
            <div class="welcome__recommendation-image3"></div>
            <div class="welcome__recommendation-image4 is-pc"></div>
            <div class="welcome__recommendation-image5 is-pc"></div>
            <div class="welcome__recommendation-accent"></div>
        </div>
        <p class="welcome__recommendation-item is-pc">育児中のパパ・ママをはじめとする全ての人にお使いいただけます。育児・介護・ペットとの生活において大切な人の好きなもの
        ・嫌いなものが記録できます。離乳食や、アレルギーの記録、ご飯・おやつの摂取量の記録に便利です。また、育児・介護・ペットとの生活以外にもお菓子作りの記録やパートナーの好みを記録するツールとしてもご利用いただけます。みんなの記録に投稿し、料理のモチベーションをアップさせることもできます。
        </p>
        <h3 class="welcome__recommendation-item is-sp">育児中のパパ・ママをはじめとする全ての人にお使いいただけます。離乳食や、アレルギーの記録、ご飯・おやつの摂取量の記録に便利です。
        </h3>

        <div class="welcome__recommendation-image-wrapper2">
            <div class="welcome__recommendation-image1 is-sp"></div>
            <div class="welcome__recommendation-image4 is-sp"></div>
            <div class="welcome__recommendation-image5 is-sp"></div>
        </div>

            <h3 class="welcome__recommendation-item is-sp">
        育児以外にもお菓子作りの記録やパートナーの好みを記録するツールとしてもご利用いただけます。みんなの記録に投稿し、料理のモチベーションをアップさせることもできます。
        </h3>
    </div>
    <div class="welcome__bottom">
        <h3 class="welcome__bottom-title">Tabeta-Memoを利用する</h3>
        <div class="welcome__bottom-btn-wrapper">
            <a href="{{ route('login.guest') }}" class="to-index_btn"><span>ゲストで利用してみる</span></a>
            <a href="{{ route('user.register') }}" class="welcome__btn">新規登録</a>
            <a href="{{ route('user.getLogin') }}" class="welcome__btn">ログイン</a>
        </div>
    </div>


</section>

@endsection
