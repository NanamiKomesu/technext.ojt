   <?php get_header(); ?>
   <main>
       <div class="kvpcmain">
           <div class="kvpccenter">
               <div>
                   <div class="pcslider slider">
                       <div><img src="<?php echo get_template_directory_uri(); ?>/slice.img/visual_1_pc.png" alt="" class="center01"></div>
                       <div><img src="<?php echo get_template_directory_uri(); ?>/slice.img/visual_2_pc.png" alt="" class="center01"></div>
                       <div><img src="<?php echo get_template_directory_uri(); ?>/slice.img/visual_3_pc.png" alt="" class="center01"></div>
                       <div><img src="<?php echo get_template_directory_uri(); ?>/slice.img/visual_4_pc.png" alt="" class="center01"></div>
                       <div><img src="<?php echo get_template_directory_uri(); ?>/slice.img/visual_5_pc.png" alt="" class="center01"></div>
                       <div><img src="<?php echo get_template_directory_uri(); ?>/slice.img/visual_6_pc.png" alt="" class="center01"></div>
                       <div><img src="<?php echo get_template_directory_uri(); ?>/slice.img/visual_7_pc.png" alt="" class="center01"></div>
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


               <!-- <div class="blogcontent">
                    <img src="<?php echo get_template_directory_uri(); ?>/slice.img/post_img_2.png" alt="">
                    <div class="blogtxt">
                        <p>2018/5/19</p>
                        <p class="blogmsg">あのネオンはいつ交換するのか！？観覧車の謎に迫る！</p>
                        <div class="bloglink"><a href="">READ MORE</a></div>
                    </div>
                </div>


                <div class="blogcontent">
                    <img src="<?php echo get_template_directory_uri(); ?>/slice.img/post_img_3.png" alt="">
                    <div class="blogtxt">
                        <p>2018/5/18</p>
                        <p class="blogmsg">ラソナの社内はこんなのよ</p>
                        <div class="bloglink"><a href="">READ MORE</a></div>
                    </div>
                </div>
                <div class="blogcontent">
                    <img src="<?php echo get_template_directory_uri(); ?>/slice.img/post_img_4.png" alt="">
                    <div class="blogtxt">
                        <p>2018/5/27</p>
                        <p class="blogmsg">お隣のアラハはハワイ？</p>
                        <div class="bloglink"><a href="">READ MORE</a></div>
                    </div>
                </div>
                <div class="blogcontent">
                    <img src="<?php echo get_template_directory_uri(); ?>/slice.img/post_img_5.png" alt="">
                    <div class="blogtxt">
                        <p>2018/5/16</p>
                        <p class="blogmsg">なぜテント？ラソナの人に聞いてみた</p>
                        <div class="bloglink"><a href="">READ MORE</a></div>
                    </div>
                </div>
                <div class="blogcontent">
                    <img src="<?php echo get_template_directory_uri(); ?>/slice.img/post_img_6.png" alt="">
                    <div class="blogtxt">
                        <p>2018/5/15</p>
                        <p class="blogmsg">ベイエリアおしゃれすぎる問題</p>
                        <div class="bloglink"><a href="">READ MORE</a></div>
                    </div>
                </div> -->
           </div>
       </article>
   </main>

   <?php get_footer(); ?>