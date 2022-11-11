<?php
// 投稿ページにサムネイルを追加する方法
add_theme_support('post-thumbnails');

 // jsの関数定義
function my_script() {
wp_enqueue_script(
 'myscript',
 get_template_directory_uri() . '/script.js',
 array(),
 false,
 true   
);
}

// js読み込み
add_action('wp_enqueue_scripts', 'my_script');

?>

