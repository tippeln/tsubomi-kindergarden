<?php

require_once "util.inc.php";
require_once "db.inc.php";
// require_once "auth.inc.php";

session_start();

$_SESSION["admin_login"] = "dummy";

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
          header("Location: top");
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
<header></header>
<main>
    <section id="login">
        <center>
            <h1><img src="<?php echo get_template_directory_uri(); ?>/images/hero_logo_color.png" alt=""></h1><br>
            <p><img src="<?php echo get_template_directory_uri(); ?>/images/point.gif" alt=""> ユーザIDとパスワードを入力して「ログイン」ボタンを押してください</p><br>
        </center>
        <div class="h2-area-login">
            <h2>ログイン<br><span class="h2-sub"> Login</span></h2>
            <div>
                <?php if (isset($messageError)): ?>
                <p class="error">
                    <?php echo h($messageError); ?>
                </p>
                <?php endif; ?>
                <form action="" method="post" class="login">
                    <?php if (isset($idError)): ?>
                    <p class="error">
                        <?php echo h($idError); ?>
                    </p>
                    <?php endif; ?>
                    <p>ユーザーID　<input type="text" name="id" value="<?php echo h($user); ?>"></p><br>
                    <?php if (isset($passError)): ?>
                    <p class="error">
                        <?php echo h($passError); ?>
                    </p>
                    <?php endif; ?>
                    <p>パスワード　<input type="password" name="pass"></p><br>
                    <p class="right">
                        <input type="submit" value="ログイン"></p>
                </form>
            </div>
        </div>
    </section>
</main>
<footer>
    <p><a href="login"><small>admin</small></a></p>
    <center>
        <p>&copy;2019 Tsubomi Kindergarden. All rights reserved.</p>
    </center>

</footer>
</div>

</body>

</html>