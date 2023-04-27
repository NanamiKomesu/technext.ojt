<?php get_header();?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/reset.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/main.css">
    <title>Document</title>
    <?php wp_deregister_script('jquery'); wp_enqueue_script('script.js','/wp-content/themes/technext_ojt/js/script.js'); ?>
    <?php wp_head();?>

</head>

<body>
    <!-- 知花 -->
    <header>
        <div class="kvpctop">
            <img class="logo" src="<?php echo get_template_directory_uri(); ?>/slice.img/logo.png" alt="ロゴ">
            <ul class="topright">
                <li class="limenu">Menu01</li>
                <li class="limenu">Menu02</li>
                <li class="limenu">Menu03</li>
                <li class="limenu">Menu04</li>
            </ul>
        </div>
    </header>
