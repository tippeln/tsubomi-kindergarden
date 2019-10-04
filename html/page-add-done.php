<?php

require_once "util.inc.php";
require_once "db.inc.php";


session_start();

 ?>
<?php get_header(); ?>

<header></header>
<main>
    <section id="admin">
        <center>
            <h1><a href="top"><img src="<?php echo get_template_directory_uri(); ?>/images/hero_logo_color.png" alt=""></a></h1><br>
            <!--           <p><img src="<?php echo get_template_directory_uri(); ?>/images/point.gif" alt=""> ユーザIDとパスワードを入力して「ログイン」ボタンを押してください</p><br> -->

        <h3>ユーザーを追加しました</h3><br><a href="add">ユーザー追加</a><br><a href="admin">管理画面</a></center>

    </section>
</main>
<footer>
    <center>
        <p>&copy;2019 Tsubomi Kindergarden. All rights reserved.</p>
    </center>
</footer>
</div>
</body>

</html>