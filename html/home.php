<?php get_header(); ?>
<header>
    <section id="main-visual">
        <!-- <div class="line-top"></div> -->
        <div class="hero">
            <div id="hero" data-zs-src='["<?php echo get_template_directory_uri(); ?>/photo/photo01.jpg", "<?php echo get_template_directory_uri(); ?>/photo/photo02.jpg", "<?php echo get_template_directory_uri(); ?>/photo/photo03.jpg", "<?php echo get_template_directory_uri(); ?>/photo/photo04.jpg", "<?php echo get_template_directory_uri(); ?>/photo/photo05.jpg"]' data-zs-overlay="dots" data-zs-switchSpeed="10000" data-zs-bullets="FALSE">
                <!--         <div class="demo-innercontent">
            <h1><span>jQuery</span> . <span>zoomSlider</span></h1>
            <p>ZoomSlider creates slideshows with zoom effect using background-image and CSS3.</p>
        </div> -->
            </div>
            <?php get_sidebar(); ?>
            <!-- <div class="line-top"></div> -->
            <div class="box">
                <p><a href="admission"><img src="<?php echo get_template_directory_uri(); ?>/images/flower_msg.png" alt="" class="img_box"></a></p>
            </div>
            <div class="copyright">
                <p><img src="<?php echo get_template_directory_uri(); ?>/images/copyright.png" alt=""></p>
                <!-- <p><small>&copy;2019 Tsubomi Kindergarden. All rights reserved.</small></p> -->
            </div>
            <div class="hero-msg delayed-image">
                <!-- <span>TSUBOMI<br>KinderGarden</span> -->
                <img src="<?php echo get_template_directory_uri(); ?>/images/hero_logo.png" alt="">
            </div>
            <div class="line-bottom"></div>
    <!--         <div class="white-block"></div> -->
        </div>

    </section>
</header>
<main>
    <section id="slogan" class="section">
        <div class="container fadein-bottom">
            <div class="slogan">
                <div class="slogan-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/slogan.png" alt="" width="200px">
                </div>
                <div class="slogan-text">
                    人との関わりを学ぶ「初めの一歩」とも言える幼稚園での生活を通して、<br><br>
                    <div class="slogan-text__child">
                        <p><i class="fa fa-check-square-o" aria-hidden="true"></i> 何が正しいのかを判断し、行動する力を持った子ども</p>
                        <p><i class="fa fa-check-square-o" aria-hidden="true"></i> お友達のことも考えてあげることのできる「思いやりの心」を持った子ども</p>
                    </div>
                    <br>
                    になってほしいという願いがつぼみ幼稚園のスローガンには込められています。<br>
                    <br>
                    <center>
                        <p class="center">創立　2019年8月</p>
                    </center>
                </div>
            </div>
        </div>
        <div class="children delayed-image"></div>
    </section>
    <!--         <section id="s-nav" class="section">
            <p><a href="#message"><img src="images/point.gif" alt=""> おしらせ</a> | <a href="#policy"><img src="images/point.gif" alt=""> つぼみにっき</a></p>
        </section> -->
    <!-- <div class="line-bottom"></div> -->
    <section id="news" class="section">
        <div class="news-flame">
            <!-- <div class="container"> -->
            <div class="h2-area">
                <!-- <center><img src="images/whatsnew.png" alt="" width="100px"></center> -->
                <h2>お知らせ<br><span class="h2-sub">Infomation</span>
                </h2>
                <ul class="news-list  fadein-bottom">
                    <?php
                                 $info = array(
                                 'post_type' => 'news',
                                 'post_status' => 'publish',
                                 'posts_per_page' => 3
                                 );
                                 $customPosts = get_posts($info);
                                 // var_dump($customPosts);
                                 ?>
                    <?php if ($customPosts): ?>
                    <?php foreach ($customPosts as $post): setup_postdata( $post );?>
                    <li>
                        <span class="date">
                            <?php echo get_post_time('Y.m.d D'); ?></span><br>
                        <p>
                            <?php the_title(); ?>
                        </p>
                    </li>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
                <!-- </div> -->
            </div>
        </div>
    </section>
    <section id="blog" class="section  fadein-bottom">
        <div class="container">
            <div class="h2-area">
                <h2>つぼみにっき<br><span class="h2-sub">Tsubomi Blog</span></h2>
                <!--                 <p<center><a href="index.html"><img src="images/back.png" alt="" width="300px"></center></a>
                </p> -->
                <?php
                                 $blog = array(
                                 'post_type' => 'blog',
                                 'post_status' => 'publish',
                                 'posts_per_page' => 6
                                 );
                                 $customPosts = get_posts($blog);
                                 ?>
                <div class="blog-list autoplay slider">
                    <?php if ($customPosts): ?>
                    <?php foreach ($customPosts as $post): setup_postdata( $post );?>
                    <article class="card">
                        <?php if(has_post_thumbnail()): ?>
                        <div class="card-img">
                            <?php the_post_thumbnail('blog-thumb'); ?>
                        </div>
                        <?php else: ?>
                        <img class="card-img" src="<?php echo get_template_directory_uri(); ?>/images/no_image.jpg">
                        <?php endif;  ?>
                        <div class="card-content">
                            <h3 class="card-title">
                                <?php the_title(); ?>
                            </h3>
                            <p class="card-date">
                                <?php echo get_post_time('Y.m.d D'); ?>
                            </p>
                            <p class="card-text">
                                <?php the_content('【read more】'); ?>
                            </p>
                        </div>
                    </article>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="line_bottom"></div>
    </section>
</main> <!-- main -->
<?php get_footer(); ?>