<div id="page_top" class="img_box"><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/back.png" alt=""><br><span>Back</span></a></div>
<footer id="footer">
    <div class="footer_line"></div>
    <div class="container">
        <div class="footer-link">
            <div>
                <p><img src="<?php echo get_template_directory_uri(); ?>/images/hero_logo.png" alt=""class="footer-link__img"></p>
            </div>

        <div><h3 class="footer-title">つぼみ幼稚園</h3><br>〒145-1234<br>
            東京都大田区つぼみ台1丁目2番3号<br>
            <i class="fa fa-phone" aria-hidden="true"></i> 03-1234-5678<br><br>
            <a class="button" href="contact"><i class="fa fa-envelope-o" aria-hidden="true"></i> お問い合わせ</a>

        </div>
        <div class="pc-mode">
            <iframe src="https://www.google.com/maps/embed?pb=!4v1567853547318!6m8!1m7!1s5MId_r0W2qOnZ0q5y_-sPA!2m2!1d35.58996490638577!2d139.6978685089798!3f120.40468736333898!4f-0.5084432367942355!5f0.7820865974627469" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
    </div>
</div>
<center><div class="footer-crt">&copy;2019 Tsubomi Kindergarden. All rights reserved.</div></center>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.zoomslider.min.js"></script>
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/slick.js" type="text/javascript" charset="utf-8"></script>
<?php
    $ua=$_SERVER['HTTP_USER_AGENT'];
    $browser = ((strpos($ua,'iPhone')!==false)||(strpos($ua,'iPod')!==false)||(strpos($ua,'Android')!==false));
        if ($browser == true){
        $browser = 'sp';
    }
    if($browser == 'sp'){
?>
<script>
$('.autoplay').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    arrows: true,
    vertical: true,
    dots: true,
    zIndex: 100
});
</script>
<?php }else{ ?>
<script>
$('.autoplay').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    arrows: true,
    dots: true,
    zIndex: 100
});
</script>
<?php } ?>
<script>
jQuery(function() {
    var pagetop = $('#page_top');
    pagetop.hide();
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) { //100pxスクロールしたら表示
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
        }
    });
    pagetop.click(function() {
        $('body,html').animate({
            scrollTop: 0
        }, 500); //0.5秒かけてトップへ移動
        return false;
    });
});
</script>
<?php wp_footer(); ?>
</div>
</body>
</html>