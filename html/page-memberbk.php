<?php
require_once "db.inc.php";
require_once "auth.inc.php";

session_start();

$id = $_SESSION["id"];
$login_id = $_SESSION["login_id"];
$name = $_SESSION["name"];
$sex = $_SESSION["sex"];
$birth = $_SESSION["birth"];
$class = $_SESSION["class"];
$class_number = $_SESSION["class_number"];
$bus = $_SESSION["bus"];

var_dump($bus);

$pdo = db_init();
try {
$stmt = $pdo->prepare("SELECT COUNT(*) AS hits FROM tbm_bbs WHERE class = (?)");
$stmt->execute(array($class));
$res = $stmt->fetch(PDO::FETCH_ASSOC);
$hits = $res["hits"];
 // ページ数の計算
$numPages = ceil($hits / 10);

if (isset($_GET["p"])) {
 $page = $_GET["p"];
 }
 else {
 $page = 1;
 }
 $offset = ($page - 1) * 10;

$stmt = $pdo->prepare("SELECT name, message, login_id, class_number, DATE_FORMAT(created,' %Y.%m.%d %a %H:%i:%S ') AS created FROM tbm_bbs WHERE class = (?) ORDER BY created DESC LIMIT {$offset},10");
$stmt->execute(array($class));
$postList = $stmt->fetchAll(PDO::FETCH_ASSOC);

}
 catch (PDOException $e) {
 echo $e->getMessage();
 exit;
 }


  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $isValidated = TRUE;
    $message = $_POST["message"];

    // if ($user === "") {
    //   $userError = "なまえを入力してください";
    //   $isValidated = FALSE;
    // }
    // elseif (mb_strlen($user, "utf8") > 20) {
    //   $userError = "なまえは20文字以内にしてください。";
    //   $isValidated = FALSE;
    // }

    if ($message === "") {
      $messageError = "メッセージを入力してください";
      $isValidated = FALSE;
    }

    if ($isValidated == TRUE) {


      $stmt = $pdo->prepare("INSERT INTO tbm_bbs (name, message, class, login_id, class_number,created) VALUES (?, ?, ?, ?, ?, NOW())");
      $stmt->execute(array($name, $message, $class, $id, $class_number));
      // $name = "";
      $message = "";
      header("Location: member");
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
            <p><img src="<?php echo get_template_directory_uri(); ?>/images/point.gif" alt="">
                <?php echo h($class); ?>組　<?php echo h($name); ?>さんのページ 【ID:<?php echo h($login_id); ?>】</p>
        </section>
        <section id="member-menu">
          <div class="member">
                         <div class="member-text__left">
                    <h3>つぼみ掲示板</h3><br>



                    <form action="" method="post">
                        <table>
                            <tr>
                                <td>
                                    <?php if(isset($messageError)): ?>
                                    <p class="error">
                                        <?php echo $messageError; ?>
                                    </p>
                                    <?php endif; ?>
                                    <p><textarea name="message" rows=5 value="" class="post-message"><?php echo $message; ?></textarea></p>
                                </td>
                            </tr>
                            <tr class="right">
                                <td>
                                    <p><input type="submit" value="メッセージを投稿する" class="btn right"></p>
                                </td>
                            </tr>
                        </table>
                    </form>
                    <p>
<?php for ($i = 1; $i <= $numPages; $i++): ?>
<a href="?p=<?php echo $i; ?>"><?php echo $i; ?></a>
|
<?php endfor; ?>
</p>
                    <?php foreach ($postList as $post): ?>
<?php if ($post[class_number] == 0): ?>
                      <div class="post post-bl">
<?php elseif($post[login_id] == $id): ?>
                      <div class="post post-pk">
<?php else: ?>
                      <div class="post post-gr">
  <?php endif; ?>

                        <strong><?php echo $post["name"]; ?></strong>  <small><?php echo $post["created"]; ?></small>
                        <p class="message">
                            <?php echo $post["message"]; ?>
                        </p>
                    </div>
                    <?php endforeach; ?>
                </div>

                <!--              <center><h3>書類ダウンロード<br><span class="h2-sub">Download</span></h3></center> -->
                <!-- <div class="h2-area"> -->
                <div class="pc-mode w30">

                  <?php if($bus !== ""): ?>
                  <div class="member-text__right">
                    <h3>バス位置情報サービス</h3><br>
                    <p>コース： ふじいろバス</p><br>
                    <ul>
                      <li>　つぼみ幼稚園（出発）</li>
                      <li>　　　↓　</li>
                      <li>　花咲駅駅前</li>
                      <li>　　　↓　<i class="fa fa-bus" aria-hidden="true"></i></li>
                      <li>　つぼみ団地前</li>
                      <li>　　　↓　</li>
                      <li>　さくら病院前</li>
                      <li>　　　↓　</li>
                      <li>　つぼみ幼稚園（到着）</li>
                    </ul>
                </div>
              <?php endif; ?>
                  <div class="member-text__right">

                  <h3>各種ダウンロード</h3><br>
                    <ul>
                      <li><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <a href="#">今月のスケジュール(256KB/PDF)</a></li>
                      <li><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <a href="<?php echo get_template_directory_uri(); ?>/files/kondate.pdf" target=”_blank”>給食献立表(184KB/PDF)</a></li>
                      <li><i class="fa fa-file-pdf-o" aria-hidden="true"></i> <a href="<?php echo get_template_directory_uri(); ?>/files/2017_11_12_PTA.pdf" target=”_blank”>園だより(2.31MB/PDF)</a></li>
                        <li><i class="fa fa-file-excel-o" aria-hidden="true"></i></i> <a href="#">登園証明書(256KB/Excel)</a></li>
                        <li><i class="fa fa-file-excel-o" aria-hidden="true"></i></i> <a href="#">忌引届け(128KB/Excel)</a></li>
<!--                         <p>当ページに関するお問い合わせはこちらまでお願い致します。</p>
                        </li>
                        <li><br>
                            <center><a class="button" href="contact"><i class="fa fa-envelope-o" aria-hidden="true"></i> お問い合わせ</a></center>
                        </li> -->
                    </ul>
                  </div>
                  <div class="member-text__right">
                    test
                </div>

            </div>
          </section>
                    <?php get_footer(); ?>