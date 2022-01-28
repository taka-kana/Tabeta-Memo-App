<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tabeta-Memo-App</title>
    <link rel="icon" href="/img/favcon.png">
    <meta name="description" content="サイトの概要文">

<!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
<!-- 使用するフォント -->

<!-- resetCSS -->
    <link rel="stylesheet" href="/css/reset.css">
<!-- WOW_animateCSS -->
    <link rel="stylesheet" href="/css/animate.css">
<!-- jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--font awesome-->
<script src="https://kit.fontawesome.com/4d09afe394.js" crossorigin="anonymous"></script>
<!-- swipe -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<!-- スタイルCSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header-wrapper">
                <div class="header-logo"></div>
                <div class="header-items-wrapper">
                    <a href="#" class="header-btn is-pc">投稿する</a>
                    <nav class="nav-wrapper is-pc">
                        <a href="" class="ac-btn">
                            メニュー
                        </a>
                            <ul class="nav-list">
                                <li class="header-nav"><a href="#">マイページ</a></li>
                                <li class="header-nav"><a href="#">マイレシピ</a></li>
                                <li class="header-nav"><a href="#">ログアウト</a></li>
                            </ul>
                    </nav>
                </div>
                <!-- ドロワーメニュー -->
<div class="drawer-icon is-sp">
    <div class="drawer_icon-bars">
        <div class="drawer_icon-bar1"></div>
        <div class="drawer_icon-bar2"></div>
        <div class="drawer_icon-bar3"></div>
    </div>
</div>
<div class="drawer-content is-sp">
    <div class="drawer-content_items">
        <div class="drawer-content_item"><a href="#" class="drawer-nav">マイページ</a></div>
        <div class="drawer-content_item"><a href="#" class="drawer-nav">マイレシピ</a></div>
        <div class="drawer-content_item"><a href="#" class="drawer-nav">ログアウト</a></div>
    </div>
</div>
<div class="drawer-back-ground is-sp"></div>

<!-- ドロワーメニュー終わり -->
            </div>
        </div>
    </header>

<main class="main">
<section class="show">
    <div class="container">
        <h3 class="show-title">レシピ詳細</h3>
        <div class="show-wrapper">
            <div class="show_article-name-wrapper wow fadeInDown">
                <div class="show_article-name-title">レシピ名&nbsp;:&nbsp;</div>
                <div class="show_article-name ">山盛りにんじん</div>
            </div>
            <div class="show_article-item-wrapper wow fadeInDown">
                <div class="show_article-category-wrapper">
                    <div class="show_article-category-title">カテゴリー&nbsp;:&nbsp;</div>
                    <div class="show_article-category">普段メニュー</div>
                </div>
                <div class="show_article-keyword-wrapper">
                    <div class="sikiri">|</div>
                    <div class="show_article-keyword-title">キーワード&nbsp;:&nbsp;</div>
                    <div class="show_article-keyword">にんじん</div>
                </div>
            </div>
            <div class="show_article-reaction-wrapper wow fadeInDown">
                <div class="show_article-reaction-title">我が家のレビュー&nbsp;:&nbsp;</div>
                <div class="show_article-reaction"><i class="far fa-smile"></i>まずまず</div>
            </div>
            <div class="show_article-img-wrapper wow fadeInDown">
                <div class="show_article-img">
                    <img src="/img/testimg.jpg" alt="">
                </div>
            </div>
            <div class="show_article-username-wrapper wow fadeInDown">
                <div class="show_article-username-title">投稿者&nbsp;:&nbsp;</div>
                <div class="show_article-username ">USA-USA</div>
            </div>
            <div class="show_article-memo-wrapper wow fadeInDown">
                <div class="show_article-memo-title">memo</div>
                <textarea class="show_article-memo" name="" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="show_article-btn-wrapper wow fadeInDown">
                <a href="" class="show_article-btn-back">戻る</a>
                <a href="" class="show_article-btn-edit">編集</a>

            </div>






        </div>
    </div>
</section>
<!-- /.top -->


<!-- .class|c -->



</main>
<!-- /.main -->
<footer class="footer">
    <p class="copyright">copyright ©️2021:taka </p>


</footer>
<!-- /.footer -->

<!-- script -->
<script src="/js/wow.min.js"></script>
<script>new WOW().init();</script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="/js/script.js"></script>
</body>
</html>