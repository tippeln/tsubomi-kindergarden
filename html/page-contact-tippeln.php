<?php get_header(); ?>

<body>
    <header>
        <section id="main-visual">
            <!-- <div class="line-top"></div> -->
            <div class="common-hero">
            </div>
            <?php get_sidebar(); ?>
        </section>
    </header>
    <main>
        <div class="h1-area">
            <h1 class="common-title">お問い合わせ</h1>
        </div>
        <section id="s-nav" class="section">
            <p><a href="#contact"><img src="<?php echo get_template_directory_uri(); ?>/images/point.gif" alt=""> メール</a> | <a href="#tel"><img src="<?php echo get_template_directory_uri(); ?>/images/point.gif" alt=""> お電話</a> | <a href="#access"><img src="<?php echo get_template_directory_uri(); ?>/images/point.gif" alt=""> 所在地</a></p>
        </section>
        <section id="contact" class="section fadein-bottom">
            <div class="container contact-form">
                <!-- <div class="contact-form"> -->
                <center>
                    <h3>メールでのお問い合わせ</h3>
                </center><br>
                <?php if(have_posts()):?>
                <?php while (have_posts()): the_post();?>
                <?php the_content(); ?>
                <?php endwhile; ?>
                <?php endif; ?>
                <!-- </div> -->
            </div>
           <!--     <div class="yuri delayed-image pc-mode"></div> -->
        </section>
        <section id="tel" class="section fadein-bottom">
            <div class="container">
                <center>
                    <h3>お電話でのお問い合わせ</h3>
                    <br><br>
                    <div class="tel-text">
                            <h3 class="tel-number"><strong><i class="fa fa-phone" aria-hidden="true"></i> 03-1234-5678</strong></h3>
                            <p>担当：桜田</p>
                    </div>
                    <p>受付時間： 8:45 ～ 17:00</p>
                </center>

            </div>

        </section>
        <section id="access" class="fadein-bottom">
            <div class="container">
                <center>
                    <h3>所在地</h3><br>
                </center>
            </div><!-- container -->
            <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1847.4249992312941!2d139.6966049175506!3d35.58964009313005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188aa9334be2e3%3A0xf9f2356d46e0ebef!2z44CSMTQ1LTAwNjQg5p2x5Lqs6YO95aSn55Sw5Yy65LiK5rGg5Y-w77yV5LiB55uu77yT77yW4oiS77yV!5e0!3m2!1sja!2sjp!4v1568554207695!5m2!1sja!2sjp" width="100%" height="400px" frameborder="0" style="border:0;" allowfullscreen="" filter: hue-rotate(100deg);></iframe></p>
            <!--
                <small>より大きな地図で <a href="https://maps.google.co.jp/maps/ms?msa=0&amp;msid=201601300266466533221.00049382ec0294d023fc6&amp;gl=jp&amp;hl=ja&amp;brcurrent=3,0x60228484a83d682f:0x72ea03070733eefb,0&amp;ie=UTF8&amp;ll=35.627482,140.104206&amp;spn=0,0&amp;t=m&amp;start=0&amp;geocode=FbWOHwIdb85ZCClfEsDVnYQiYDFSL-lwNYZqoQ%3B&amp;source=embed" style="color:#0000FF;text-align:left">中口研究室　CFME A棟2階</a> を表示</small> -->
        </section>
    </main>
    <div class="line_bottom"></div>
    </main> <!-- main -->
    <?php get_footer(); ?>