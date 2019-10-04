                        </tr>
<?php

require_once "util.inc.php";
require_once "db.inc.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {

if (isset($_POST["add-done"])) {
$isValidated = TRUE;

   $id = $_POST["id"];
   $username = $_POST["username"];
   $pass1 = $_POST["pass1"];
   $pass2 = $_POST["pass2"];

if ($id === "") {
   $idError = "※ユーザーIDを入力してください";
   $isValidated = FALSE;
   }
if ($username === "") {
   $nameError = "※ユーザー名を入力してください";
   $isValidated = FALSE;
   }
if ($pass1 === "") {
   $pass1Error = "※パスワードを入力してください";
   $isValidated = FALSE;
   }
if ($pass2 === "") {
   $pass2Error = "※パスワード(確認用)を入力してください";
   $isValidated = FALSE;
   }
// if ($pass1 == $pass2) {
//    $pass1Error = "※パスワードが確認用と一致しません";
//    $isValidated = FALSE;
//  }
if($isValidated) {

try {
   $pdo = db_init();
   $stmt = $pdo->prepare("INSERT INTO tbm_admins
   (login_id, login_name, login_pass, updated_date)VALUES
   (?, ?, ?, ?)");
   $stmt->execute(array($id, $username, hash("sha256", $pass1 . $id), ""));
   $_SESSION["process"] = "ユーザー追加処理";
   header("Location: done");
   exit;
   }
   catch (PDOException $e) {
   echo $e->getMessage();
   exit;
  }
}
}

if (isset($_POST["cancel"])) {
   header("Location: admin");
   exit;
}
}
 ?>
<?php get_header(); ?>
<header></header>
<main>
    <section id="admin">
        <center>
            <h1><a href="top"><img src="<?php echo get_template_directory_uri(); ?>/images/hero_logo_color.png" alt=""></a></h1><br>
            <h3>追加ユーザー入力フォーム</h3><br>
        <a href="admin"><img src="<?php echo get_template_directory_uri(); ?>/images/point.gif" alt=""> 管理画面に戻る</a></center>
        <div class="h2-area-admin">
            <div>
                <form action="" method="post">
                    <table class="admin-tbl update-tbl">
                        <tr>
                            <!-- <th>選択</th> -->
                            <th>ユーザーID</th>
                            <th>ユーザー名</th>
                            <th>パスワード</th>
                        </tr>
                        <tr>
                            <td>
                                <?php if (isset($idError)): ?>
                                <div class="error">
                                    <?php echo h($idError); ?>
                                </div>
                                <?php endif; ?>
                                <input type="text" name="id">
                            </td>
                            <td>
                                <?php if (isset($nameError)): ?>
                                <div class="error">
                                    <?php echo h($nameError); ?>
                                </div>
                                <?php endif; ?>
                                <input type="text" name="username">
                            </td>
                            <td>
                                <?php if (isset($pass1Error)): ?>
                                <div class="error">
                                    <?php echo h($pass1Error); ?>
                                </div>
                                <?php endif; ?>
                                <input type="password" name="pass1"><br>
                                <?php if (isset($pass2Error)): ?>
                                <div class="error">
                                    <?php echo h($pass2Error); ?>
                                </div>
                                <?php endif; ?>
                                <input type="password" name="pass2">
                            </td>
                        </tr>
                    </table>
                    <input type="submit" name="add-done" class="btn" value="ユーザー追加の確認">　<input type="submit" class="btn" name="cancel" value="キャンセル">
                </form>
            </div>
        </div>
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