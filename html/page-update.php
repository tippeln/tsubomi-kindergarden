<?php

require_once "util.inc.php";
require_once "db.inc.php";


session_start();

$updateList = $_SESSION["check"];

// var_dump($delList);

  $pdo = db_init();
  try {
//      $stmt = $pdo->prepare("SELECT * FROM tbm_admins
 $count = 0;
foreach ($updateList as $update) {
     $stmt = $pdo->prepare("SELECT * FROM tbm_admins
     WHERE id = (?)");
     $stmt->execute(array($update));
     $id[] = $update;
     $userList[] = $stmt->fetch(PDO::FETCH_ASSOC);
     $count += 1;

}
  }
     catch (PDOException $e) {
     echo $e->getMessage();
     exit;
    }

if ($_SERVER["REQUEST_METHOD"] === "POST") {

if (isset($_POST["update-done"])) {
$isValidated = TRUE;

for ($j=1; $j<=$count; $j++ ) {
   $userid[$j] = $_POST["userid$j"];
   $username[$j] = $_POST["username$j"];
   $pass1[$j] = $_POST["pass1$j"];
   $pass2[$j] = $_POST["pass2$j"];

   $sql = "UPDATE tbm_admins SET login_id=?, login_name=?, login_pass=? WHERE id=?";
          $stmt = $pdo->prepare($sql);
          $stmt->execute(array($userid[$j], $username[$j], hash("sha256", $pass1[$j] . $userid[$j]), $id[$j-1]));
}
   $_SESSION["process"] = "更新処理";
   header("Location: done");
exit;
}
// foreach ($updateList as $update) {
//      $stmt = $pdo->prepare("DELETE FROM tbm_admins
//      WHERE id = (?)");
//      $stmt->execute(array($del));
     // $userList[] = $stmt->fetch(PDO::FETCH_ASSOC);

  // header("Location: delete-done");
   // exit;

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
            <!--           <p><img src="<?php echo get_template_directory_uri(); ?>/images/point.gif" alt=""> ユーザIDとパスワードを入力して「ログイン」ボタンを押してください</p><br> -->
            <h3>編集対象一覧</h3><br><a href="admin">管理画面へ</a>
        </center>
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
                        <?php $i = 0; ?>
                        <?php foreach ($userList as $user): ?>
                        <?php $i += 1; ?>
                        <tr>
                            <td>
                                <input type="text" name="userid<?php echo h($i); ?>" value="<?php echo h($user[" login_id"]); ?>">
                            </td>
                            <td>
                                <input type="text" name="username<?php echo h($i); ?>" value="<?php echo h($user[" login_name"]); ?>">
                            </td>
                            <td>
                                <input type="password" name="pass1<?php echo h($i); ?>"><br>
                                <input type="password" name="pass2<?php echo h($i); ?>">
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                    <input type="submit" name="update-done" class="btn" value="更新を確定する">　<input type="submit" name="cancel" value="キャンセル" class="btn">
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