<?php get_header(); ?><?php

require_once "util.inc.php";
require_once "db.inc.php";
// require_once "auth.inc.php";

session_start();

$_SESSION["admin_login"] = "naomi";

  // if ($_SESSION["admin_login"] == TRUE) {
  //   header("Location: top");
  //   exit;
  // }

// del_session();
// auth_confirm();

$id = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {


   $isValidated = TRUE;
   // 入力値の取得
   $id = $_POST["id"];
   $pass = $_POST["pass"];
   $salt = $id;

   if ($id === "") {
   $idError = "ログインIDを入力してください";
   $isValidated = FALSE;
   }

   // お知らせのバリデーション
   if ($pass === "") {
   $passError = "パスワードを入力して下さい";
   $isValidated = FALSE;
   }

   if ($isValidated == TRUE) {

  $pdo = db_init();
  try {
     $stmt = $pdo->prepare("SELECT * FROM tbm_admins
     WHERE login_id = (?) and login_pass = (?)");
     $stmt->execute(array($id, hash("sha256", $pass .$salt)));
     $info = $stmt->fetch(PDO::FETCH_ASSOC);

// var_dump($info ["login_count"]);
// var_dump($count);
// exit;
     if ($info != FALSE) {
          $count = $info ["login_count"] + 1;
          $sql = "UPDATE tbm_admins SET login_count=? WHERE login_id=?";
          $stmt = $pdo->prepare($sql);
          $stmt->execute(array($count, $id));
          $_SESSION["admin_id"] = $id; //名前を登録して他頁で使用
          $_SESSION["admin_login"] = TRUE; //ログイン成功のフラグ
          header("Location: member_menu");
          exit;
     }
     else {
        $messageError = "ログインIDまたはパスワードに誤りがあります。";
     }
  }
     catch (PDOException $e) {
     echo $e->getMessage();
     exit;
    }
  } else {
   // header("Location: login.php");
  }
}

 ?>
<?php get_header(); ?>

<body>
    <header>
        <section id="main-visual">
            <!-- <div class="line-top"></div> -->
            <div class="common-hero">
                <!--         <div class="demo-innercontent">
            <h1><span>jQuery</span> . <span>zoomSlider</span></h1>
            <p>ZoomSlider creates slideshows with zoom effect using background-image and CSS3.</p>
        </div> -->
            </div>
            <?php get_sidebar(); ?>
        </section>
    </header>
    <main>
        <div class="h1-area">
            <h1 class="common-title">在園児専用ページ</h1>
        </div>

        <section id="s-nav" class="section">
            <p><a href="#meeting"><img src="<?php echo get_template_directory_uri(); ?>/images/point.gif" alt=""> 入園説明会について</a> | <a href="#admission"><img src="<?php echo get_template_directory_uri(); ?>/images/point.gif" alt=""> 2020年度 募集要項</a></p>
        </section>
    <section id="member-menu class="section fadein-bottom">
            <div class="container">
                <div class="h2-area">
                    <h2>書類ダウンロード<br><span class="h2-sub">Explanatory Meeting</span></h2>
                    <div class="meeting-text">
                            <ul>
                                <li>　　日程　：　<strong class="mkr_lime">9月7日（土）</strong></li>
                                <li>　　　　　　　午前　10:00 - 12:00</li>
                                <li>　　　　　　　午前　13:00 - 15:00</li>
                                <li>　　場所　：　つぼみ幼稚園 3階ホール</li>
                                <li>　　         ※上履きを持参ください<br></li>
                                <li><p><br>入園説明会への参加は事前お申し込みが必要です。<br>
お電話もしくはメールにて１週間前までにお申し込みをお願い致します。<br></p></li>
<li><br><center><a class="button" href="contact"><i class="fa fa-envelope-o" aria-hidden="true"></i> お問い合わせ</a></center></li>
                            </ul>
                            <img src="<?php echo get_template_directory_uri(); ?>/images/meeting.png" alt="" class="meeting-img">


                    </div>

                </div>
            </div>

        </section>
        <div class="line_bottom"></div>
    </main> <!-- main -->
    <?php get_footer(); ?>