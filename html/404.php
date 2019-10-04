<?php get_header(); ?>
<section class="leader">
    <div class="not-found">
        <center>
            <br><br>
            <img src="<?php echo get_template_directory_uri(); ?>/images/404.png" alt=""><br><br>
            <h3>ページが見つかりません</h3>
            <p>申し訳ございません。お探しのページが見つかりませんでした。 <br><br>
                <a href="<?php echo home_url(); ?>" style="color:#333;text-decoration:underline;">
                    トップページに戻る</a> <br><br>
            </p>
        </center>
    </div>
</section>
<?php get_footer(); ?>