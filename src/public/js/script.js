

/*==================================================================
# ドロワー
==================================================================*/
 jQuery( '.drawer-icon' ).on( 'click',function(e) {
  e.preventDefault();
jQuery ( '.drawer-icon' ).toggleClass( 'active_icon' );
jQuery ( '.drawer-content' ).toggleClass( 'active_icon' );
jQuery ( '.drawer-back-ground' ).toggleClass( 'active_icon' );

return false;
});

 // #から始まるURLがクリックされた時
 jQuery('a[href^="#"]').click(function() {
  // .headerクラスがついた要素の高さを取得
  let header = jQuery("header").innerHeight();
  let speed = 300;
  let id = jQuery(this).attr("href");
  let target = jQuery("#" == id ? "html" : id);
  // トップからの距離からヘッダー分の高さを引く
  let position = jQuery(target).offset().top - header;
  // その分だけ移動すればヘッダーと被りません
  jQuery("html, body").animate(
    {
      scrollTop: position
    },
    speed
  );
  return false;
});

/*==================================================================
# スクロール検知
==================================================================*/
jQuery(window).on("scroll", function() {
  // トップから100px以上スクロールしたら
  if (100 < jQuery(this).scrollTop()) {
    // is-showクラスをつける
 jQuery('.to-top').show();
  } else {
    // 100pxを下回ったらis-showクラスを削除
  jQuery('.to-top').hide();
  }
});

/*==================================================================
# アコーディオンメニュー
==================================================================*/
jQuery('.ac-btn').on('click', function () {
  $("+.nav-list" ,this).fadeToggle();
  return false;
});
