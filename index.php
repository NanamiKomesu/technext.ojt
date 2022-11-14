   <?php get_header(); ?>
   <main>
       <div class="kvpcmain">
           <div class="kvpccenter">
               <div>
                   <!-- <div class="pcslider slider"> -->
                       <!-- <div><img  class="center01" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height ?>" width="<?php echo get_custom_header()->width ?>" alt="header-img"></div> -->
                       <div id="hero" class="clearfix">
                           <ul class="slider">
                               <?php $header_images = get_uploaded_header_images(); ?>
                               <?php foreach ($header_images as $key => $value) : ?>
                                   <?php $img_id = custom_header_get_attachment_id_by_url($value['url']); ?>
                                   <?php $img_meta = get_post($img_id); ?>
                                   <li>
                                       <?php if ($img_meta->post_content) : ?>
                                           <a href="<?php echo esc_html($img_meta->post_content); ?>">
                                           <?php endif; ?>
                                           <img src="<?php echo $value['url']; ?>" alt="<?php echo esc_html($img_meta->post_title); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" />
                                           <?php if ($img_meta->post_content) : ?>
                                           </a>
                                       <?php endif; ?>
                                   </li>
                               <?php endforeach; ?>
                           </ul>
                       </div><!-- #hero -->
                       <!-- <div><img src="<?php echo get_template_directory_uri(); ?>/slice.img/visual_1_pc.png" alt="" class="center01"></div>
                       <div><img src="<?php echo get_template_directory_uri(); ?>/slice.img/visual_2_pc.png" alt="" class="center01"></div>
                       <div><img src="<?php echo get_template_directory_uri(); ?>/slice.img/visual_3_pc.png" alt="" class="center01"></div>
                       <div><img src="<?php echo get_template_directory_uri(); ?>/slice.img/visual_4_pc.png" alt="" class="center01"></div>
                       <div><img src="<?php echo get_template_directory_uri(); ?>/slice.img/visual_5_pc.png" alt="" class="center01"></div>
                       <div><img src="<?php echo get_template_directory_uri(); ?>/slice.img/visual_6_pc.png" alt="" class="center01"></div>
                       <div><img src="<?php echo get_template_directory_uri(); ?>/slice.img/visual_7_pc.png" alt="" class="center01"></div> -->
                   </div>
               </div>
               <img src="<?php echo get_template_directory_uri(); ?>/slice.img/visual_text_pc.png" alt="" class="center02">
           </div>
           <p class="kvpcdown">進化し続ける「街」アメリカンビレッジマガジン</p>
       </div>

       <!-- スマホ表示 -->
       <div class="kvspmain">
           <img class="splogo" src="<?php echo get_template_directory_uri(); ?>/slice.img/logo.png" alt="">
           <div class="kvspimg">
               <div>
                   <div class="spslider slider">
                       <div><img class="kvspimg01" src="<?php echo get_template_directory_uri(); ?>/slice.img/visual_1_sp.png" alt=""></div>
                       <div><img class="kvspimg01" src="<?php echo get_template_directory_uri(); ?>/slice.img/visual_2_sp.png" alt=""></div>
                       <div><img class="kvspimg01" src="<?php echo get_template_directory_uri(); ?>/slice.img/visual_3_sp.png" alt=""></div>
                       <div><img class="kvspimg01" src="<?php echo get_template_directory_uri(); ?>/slice.img/visual_4_sp.png" alt=""></div>
                       <div><img class="kvspimg01" src="<?php echo get_template_directory_uri(); ?>/slice.img/visual_5_sp.png" alt=""></div>
                       <div><img class="kvspimg01" src="<?php echo get_template_directory_uri(); ?>/slice.img/visual_6_sp.png" alt=""></div>
                       <div><img class="kvspimg01" src="<?php echo get_template_directory_uri(); ?>/slice.img/visual_7_sp.png" alt=""></div>
                   </div>
               </div>
               <img class="kvspimg02" src="<?php echo get_template_directory_uri(); ?>/slice.img/visual_text_sp.png" alt="">
           </div>
           <p class="kvpcdown">進化し続ける「街」<br>アメリカンビレッジマガジン</p>
       </div>


       <article>
           <h1 class="blogtitle">Latest Articles</h1>
           <div class="blogcontainer" id="main">

               <!-- メインループの記載 -->

               <?php
                if (have_posts()) :
                    while (have_posts()) :
                        the_post();
                ?>
                       <a class="blogcontent" href="<?php echo get_permalink(); ?>">
                           <img class=blogimg src="<?php the_post_thumbnail_url('medium'); ?>" alt="">
                           <div class="blogtxt">
                               <p class="blogdate"><?php echo get_the_date(); ?></p>
                               <p class="blogmsg"><?php the_title(); ?></p>

                               <div class="bloglink">
                                   <p>READ MORE</p>
                               </div>
                           </div>
                       </a>
                   <?php
                    endwhile;
                else :
                    ?>
                   <div class="blogcontent">
                       <h2>表示する記事がありません</h2>
                   </div>
               <?php endif; ?>


       </article>

       <!-- 表示する要素 -->
       <div class="more">
           <button>もっと記事を見る</button>
       </div>
       </div>

   </main>

   <?php get_footer(); ?>