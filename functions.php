<?php
// 投稿ページにサムネイルを追加する方法
add_theme_support('post-thumbnails');

// メニューを表示させるコード
add_action( 'after_setup_theme', 'register_menu' );
function register_menu() {
register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
}

// カスタムヘッダー画像を表示させるコード
add_theme_support( 'custom-header' );













?>

