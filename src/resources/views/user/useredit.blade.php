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
<section class="useredit">
    <div class="container">
        <h3 class="useredit-title title">ユーザー情報変更</h3>

        <div class="useredit-form-wrapper">
            <form action="" method="POST" name="useredit-form" id="">
                <!-- ユーザー名 -->
                <div class="form_area wow fadeInDown">
                    <div class="form_item-title">ユーザー名</div>
                    <div class="form_area-wrapper">
                        <input type="text" name="" class="form_input">
                        <p class="create-form-item">50文字以内で入力してください。</p>
                        <p class="validation-alert"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;50文字以内で入力してください。</p>
                    </div>
                </div>
                <!-- メールアドレス -->
                <div class="form_area wow fadeInDown">
                    <div class="form_item-title">メールアドレス</div>
                    <div class="form_area-wrapper">
                        <input type="email" name="" class="form_input">
                        <p class="create-form-item">50文字以内で入力してください。</p>
                        <p class="validation-alert"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;指定された形式で入力してください。</p>
                    </div>
                </div>
                <!-- パスワード -->
                <div class="form_area wow fadeInDown">
                    <div class="form_item-title">パスワード</div>
                    <div class="form_area-wrapper">
                        <p class="useredit-pass-item">パスワードは変更できません。</p>
                    </div>
                </div>

                <!-- 送信 -->
                <div class="useredit-btn-wrapper wow fadeInDown">
                    <div class="useredit-form_sent-area">
                        <input type="submit" value="変更する" class="useredit-form_sent" id="" >
                    </div>
                    <a href="" class="useredit-btn-area">
                        <div class="useredit-back-btn">戻る</div>
                    </a>
                </div>
            </form>
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