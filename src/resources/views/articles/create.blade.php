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
<!-- swipe -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<!--font awesome-->
<script src="https://kit.fontawesome.com/4d09afe394.js" crossorigin="anonymous"></script>
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
<section class="create">
    <div class="container">
        <h3 class="create-title ">レシピ投稿</h3>
        <div class="create-form-wrapper">

            <!--form-->
            <form action="" method="POST" name="create-form" id="js-form">
                <div class="create-alert"><span class="alert">*&nbsp;</span> &nbsp; は入力必須項目です</div>

                <!-- レシピ名 -->
                <div class="form_area wow fadeInDown">
                    <div class="form_item-title ">レシピ名<span class="alert">&nbsp;*</span></div>
                    <div class="form_area-wrapper">
                        <input type="text" name="" class="form_input">
                        <p class="create-form-item">50文字以内で入力してください。</p>
                        <p class="validation-alert"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;50文字以内で入力してください。</p>
                    </div>
                </div>

                <!-- 画像 -->
                <div class="form_area wow fadeInDown">
                    <div class="form_item-title">画像<span class="alert">&nbsp;*</span></div>
                    <div class="form_area-wrapper">
                        <input type="text" name="" class="form_input">
                        <p class="create-form-item">PNG/JPEG/JPG/GIFのみアップロード可能です。</p>
                        <p class="validation-alert"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;指定した形式で入力してください。</p>
                    </div>
                </div>
                    
                <!-- レシピメモ -->
                <div class="form_area wow fadeInDown">
                    <div class="form_item-title">メモ<span class="alert">&nbsp;*</span></div>
                        <div class="form_area-wrapper">
                            <textarea class="create-form_summary" name="" id="" cols="30" rows="10"></textarea>
                            <p class="create-form-item">30文字以上で入力してください。</p>
                            <p class="validation-alert"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;30文字以上で入力してください。</p>
                        </div>
                </div>

                <!-- カテゴリー -->
                <div class="form_area wow fadeInDown">
                <div class="form_item-title ">カテゴリー名<span class="alert">&nbsp;*</span></div>
            <div class="create-radio_wrapper">
                <div class="radio_item-wrapper">
                    <label>
                        <input type="radio" name="category" value="普段メニュー" class="form_select"><span>普段メニュー</span>
                    </label>
                    <label>
                        <input type="radio" name="category" value="子供OK" class="form_select"><span>子供OK</span>
                    </label>
                    <label>
                        <input type="radio" name="category" value="スイーツ" class="form_select"><span>スイーツ</span>
                    </label>
                </div>

                <div class="radio_item-wrapper">
                    <label>
                        <input type="radio" name="category" value="離乳食" class="form_select"><span>離乳食</span>
                    </label>
                    <label>
                        <input type="radio" name="category" value="お弁当" class="form_select"><span>お弁当</span>
                    </label>
                    <label>
                        <input type="radio" name="category" value="特別" class="form_select"><span>特別</span>
                    </label>
                    <p class="validation-alert"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;カテゴリーが選択されていません。</p>
                </div>
            </div>
           </div>

                <!-- 食材キーワード -->
                <div class="form_area wow fadeInDown">
                    <div class="form_item-title">食材キーワード<span class="alert">&nbsp;*</span></div>
                    <div class="form_area-wrapper">
                        <input type="text" name="" class="form_input">
                        <p class="create-form-item">30文字以内で入力してください。</p>
                        <p class="validation-alert"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;30文字以内で入力してください。</p>
                    </div>
                </div>
                <!-- わが家のレビュー -->
                <div class="form_area wow fadeInDown">
                    <div class="form_item-title ">我が家のレビュー<span class="alert">&nbsp;*</span></div>
                    <div class="create-form_reaction-area-wrapper">
                        <div class="create-radio_wrapper">
                            <label>
                                <input type="radio" name="reaction" value="あんまり…。" class="form_reaction-select"><span><i class="far fa-grimace reaction-icon" ></i>あんまり…。</span>
                            </label>
                            <label>
                                <input type="radio" name="reaction" value="まずまず" class="form_reaction-select" checked><span><i class="far fa-smile reaction-icon"></i>まずまず</span>
                            </label>
                            <label>
                                <input type="radio" name="reaction" value="好評!!" class="form_reaction-select"><span><i class="far fa-kiss-wink-heart reaction-icon"></i>好評!!</span>
                            </label>
                            <p class="validation-alert"><i class="fas fa-exclamation-triangle"></i>&nbsp;&nbsp;レビューが選択されていません。</p>
                        </div>
                    </div>
                </div>

                <!-- 送信 -->
                <div class="create-form_sent-area-wrapper wow fadeInDown">
                    <input type="submit" value="投稿する" class="btn" id="js-submit" >
                    <input type="submit" value="戻る" class="create-form_back btn" id="" >
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