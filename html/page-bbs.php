<?php
// require_once "util.inc.php";
require_once "db.inc.php";
// require_once "auth.inc.php";

$pdo = db_init();
try {
$stmt = $pdo->query("select * from tbmkg_bbs order by created desc limit 10");
$postList = $stmt->fetchAll(PDO::FETCH_ASSOC);

// var_dump($postList);
// exit;

}
 catch (PDOException $e) {
 echo $e->getMessage();
 exit;
 }

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $isValidated = TRUE;

    $user = $_POST["user"];
    $message = $_POST["message"];

    if ($user === "") {
      $userError = "なまえを入力してください";
      $isValidated = FALSE;
    }
    elseif (mb_strlen($user, "utf8") > 20) {
      $userError = "なまえは20文字以内にしてください。";
      $isValidated = FALSE;
    }

    if ($message === "") {
      $messageError = "メッセージを入力してください";
      $isValidated = FALSE;
    }

    if ($isValidated == TRUE) {
      $stmt = $pdo->prepare("INSERT INTO tbmkg_bbs (name, message, created) VALUES (?, ?, NOW())");
      $stmt->execute(array($user, $message));
      $user = "";
      $message = "";
    }
  }
?>
<?php get_header(); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>ひとこと掲示板</title>
<!--     <style>
        body {
  margin: 0;
  padding: 0;
}
h1 {
  margin: 0;
  background-color: #ccc;
  padding: 10px;
  font-size: 24px;
}
h2 {
  font-size: 20px;
  margin: 10px 0;
}
h3 {
  margin: 0 0 10px 0;
  font-size: 12px;
  font-weight: bold;
}
p {
  margin: 0;
}
#main {
  padding: 10px;
}
.error {
  color: #f00;
}
.post {
  border: solid 1px #999;
  padding: 10px;
  margin-top: 5px;
}
</style> -->
</head>

<body>
    <h>つぼみ掲示板</h1>

    <div id="main">
        <h3>メッセージの投稿</h3>
        <form action="" method="post">
            <table class="admin-tbl update-tbl">
                <tr>
                    <td>
                        <?php if(isset($userError)): ?>
                        <p class="error">
                            <?php echo $userError; ?>
                        </p>
                        <?php endif; ?>
                        <p>なまえ：<input type="text" name="user" size="30" value="<?php echo $user; ?>"></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <?php if(isset($messageError)): ?>
                        <p class="error">
                            <?php echo $messageError; ?>
                        </p>
                        <?php endif; ?>
                        <p><textarea name="message" cols="60" rows="5" value=""><?php echo $message; ?></textarea></p>
                    </td>
                </tr>
            </table>
            <p><input type="submit" value="送信"></p>
        </form>
        <?php foreach ($postList as $post): ?>
        <div class="post">
            <h3>
                <?php echo $post["user"]; ?> [
                <?php echo $post["created"]; ?>]</h3>
            <p class="message">
                <?php echo $post["message"]; ?>
            </p>
        </div>
        <?php endforeach; ?>
    </div>
</body>

</html>



