<?php
register_sidebar( array(
  'name' => 'Sidebar-Widget-1',
  'id' => 'sidebar-widget-1',
  'description' => 'This is sidebar widget area. ',
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget' => '</div>',
) );

// カスタムメニューを有効化
add_theme_support( 'menus' );
// カスタムメニューの「場所」を設定するコード
register_nav_menu( 'header-navi', 'ヘッダーのナビゲーション' );
register_nav_menu( 'footer-navi', 'フッターのナビゲーション' );

?>
