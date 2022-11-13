<?php
// 投稿ページにサムネイルを追加する方法
add_theme_support('post-thumbnails');

// メニューを表示させるコード
// add_action( 'after_setup_theme', 'register_menu' );
// function register_menu() {
// register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
// }

// カスタムヘッダー画像を表示させるコード
$custom_header_defaults = array(
    'default-image' => get_bloginfo('template_url').'/images/hero-default.jpg',
    'width' => 1024,
    'height' => 448,
    );
add_theme_support( 'custom-header',$custom_header_defaults);

// jQueryの読み込み
// function theme_name_files() {
//     //utility.jsの読み込み＆jQuery読み込み
//     wp_enqueue_script( 'utility', get_theme_file_uri('/script.js') ,array('jquery') ,'',true);
//     };
//     add_action( 'wp_enqueue_scripts', 'theme_name_files' );









?>

