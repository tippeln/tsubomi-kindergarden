<?php

require_once "util.inc.php";
require_once "db.inc.php";
require_once "auth.inc.php";

session_start();

$_SESSION["admin_login"] = "naomi";
// del_session();
auth_confirm();

$id = "";

// var_dump($_POST);
  $pdo = db_init();
  try {
//      $stmt = $pdo->prepare("SELECT * FROM tbm_admins

$stmt = $pdo->query("SELECT * from tbm_admins ORDER BY updated_date DESC, login_count DESC");
$userList = $stmt->fetchAll(PDO::FETCH_ASSOC);

  }
     catch (PDOException $e) {
     echo $e->getMessage();
     exit;
    }

$_SESSION["check"] = $_POST["check"];

if (isset($_POST["update"])) {
   header("Location: update");
   exit;
}
if (isset($_POST["delete"])) {
   header("Location: delete");
   exit;
}
if (isset($_POST["add"])) {
   header("Location: add");
   exit;
}


 ?>
<?php get_header(); ?>

<header></header>
<main>
    <section id="admin">
        <center>
            <h1><a href="top"><img src="<?php echo get_template_directory_uri(); ?>/images/hero_logo_color.png" alt="" width="100px"></a></h1><br>
            <!--           <p><img src="<?php echo get_template_directory_uri(); ?>/images/point.gif" alt=""> ユーザIDとパスワードを入力して「ログイン」ボタンを押してください</p><br> -->

        <h3>ログイン履歴</h3><br></center>
        <div class="h2-area-admin">

            <div>
              <form action="" method="post">
                <table class="admin-tbl update-tbl">
                <div class=btn-area><input type="submit" name="update" value="更新" class="btn">  <input type="submit" name="delete" value="削除"　 class="btn">  <input type="submit" name="add" value="追加" class="btn"> </div>
                    <tr>
                      <th>選択</th>
                        <th>ユーザーID</th>
                        <th>ユーザー名</th>
                        <th>ログイン回数</th>
                        <th>最終ログイン日</th>
                    </tr>
                    <?php foreach ($userList as $user): ?>
                    <tr>
                        <td><center><input type="checkbox" name="check[]" value="<?php echo h($user["id"]); ?>"></center>
                        </td>
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
<div class=btn-area><input type="submit" name="update" value="更新" class="btn">  <input type="submit" name="delete" value="削除"　 class="btn">  <input type="submit" name="add" value="追加" class="btn"> </div>
              </form>
            </div>
        </div>
    </section>
</main>
<footer>
    <center>
        <p>&copy;2019 Tsubomi Kindergarden. All rights reserved.</p>
    </center>
    <br><br>
</footer>
</div>
</body>

</html>