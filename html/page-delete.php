<?php

require_once "util.inc.php";
require_once "db.inc.php";


session_start();

$delList = $_SESSION["check"];
// var_dump($delList);

  $pdo = db_init();
  try {
//      $stmt = $pdo->prepare("SELECT * FROM tbm_admins
foreach ($delList as $del) {
     $stmt = $pdo->prepare("SELECT * FROM tbm_admins
     WHERE id = (?)");
     $stmt->execute(array($del));
     $userList[] = $stmt->fetch(PDO::FETCH_ASSOC);
}
  }
     catch (PDOException $e) {
     echo $e->getMessage();
     exit;
    }

if (isset($_POST["delete-done"])) {
foreach ($delList as $del) {
     $stmt = $pdo->prepare("DELETE FROM tbm_admins
     WHERE id = (?)");
     $stmt->execute(array($del));
     // $userList[] = $stmt->fetch(PDO::FETCH_ASSOC);

 }
   $_SESSION["process"] = "削除処理";
   header("Location: done");
   exit;
}
if (isset($_POST["cancel"])) {
   header("Location: admin");
   exit;
}

 ?>
<?php get_header(); ?>

<header></header>
<main>
    <section id="admin">
        <center>
            <h1><a href="top"><img src="<?php echo get_template_directory_uri(); ?>/images/hero_logo_color.png" alt=""></a></h1><br>
            <!--           <p><img src="<?php echo get_template_directory_uri(); ?>/images/point.gif" alt=""> ユーザIDとパスワードを入力して「ログイン」ボタンを押してください</p><br> -->

        <h3>削除対象一覧</h3><br>
        <a href="admin"><img src="<?php echo get_template_directory_uri(); ?>/images/point.gif" alt=""> 管理画面に戻る</a></center>
        <div class="h2-area-admin">

            <div>
              <form action="" method="post">
                <table class="admin-tbl">
                    <tr>
                      <!-- <th>選択</th> -->
                        <th>ユーザーID</th>
                        <th>ユーザー名</th>
                        <th>ログイン回数</th>
                        <th>最終ログイン日</th>
                    </tr>
                    <?php foreach ($userList as $user): ?>
                    <tr>
                        <td>
                            <?php echo h($user["login_id"]); ?>
                        </td>
                        <td>
                            <?php echo h($user["login_name"]); ?>
                        </td>
                        <td>
                            <?php echo h($user["login_count"]); ?>
                        </td>
                        <td>
                            <?php if($user[login_count] == 0): ?>
                            <?php echo " -"; ?>
                            <?php else: ?>
                            <?php echo h($user["updated_date"]); ?>
                            <?php endif; ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                <input type="submit" name="delete-done" class="btn" value="削除を確定する">　<input type="submit" name="cancel"  class="btn"  value="キャンセル">
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