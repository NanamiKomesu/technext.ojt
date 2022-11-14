<?php
// 投稿ページにサムネイルを追加する方法
add_theme_support('post-thumbnails');

// メニューを表示させるコード
// add_action( 'after_setup_theme', 'register_menu' );
// function register_menu() {
// register_nav_menu( 'primary', __( 'Primary Menu', 'theme-slug' ) );
// }

// カスタムヘッダー画像を表示させるコード
// $custom_header_defaults = array(
//     'default-image' => get_bloginfo('template_url').'/images/hero-default.jpg',
//     'width' => 1024,
//     'height' => 448,
//     );
// add_theme_support( 'custom-header',$custom_header_defaults);

// //ヘッダー画像のIDを取得
// function custom_header_get_attachment_id_by_url( $url ) {
//   $parse_url  = explode( parse_url( WP_CONTENT_URL, PHP_URL_PATH ), $url );
//   $this_host = str_ireplace( 'www.', '', parse_url( home_url(), PHP_URL_HOST ) );
//   $file_host = str_ireplace( 'www.', '', parse_url( $url, PHP_URL_HOST ) );
//   if ( ! isset( $parse_url[1] ) || empty( $parse_url[1] ) || ( $this_host != $file_host ) ) {
//     return;
//   }
//   global $wpdb;
//   $attachment = $wpdb->get_col( $wpdb->prepare( "SELECT ID FROM {$wpdb->prefix}posts WHERE guid RLIKE %s;", $parse_url[1] ) );
//   return $attachment[0];
// }


// jQueryの読み込み
// function theme_name_files() {
//     //utility.jsの読み込み＆jQuery読み込み
//     wp_enqueue_script( 'utility', get_theme_file_uri('/script.js') ,array('jquery') ,'',true);
//     };
//     add_action( 'wp_enqueue_scripts', 'theme_name_files' );


//register_nav_menu() のソース（定義）
function register_my_menu() {
    register_nav_menu( 'main-menu','Main Menu');
  }
  add_action( 'after_setup_theme', 'register_my_menu' );



?>

