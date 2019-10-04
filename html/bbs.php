<?php

try {
 // MySQL への接続
 $pdo = new PDO("mysql:host=localhost;dbname=mybbs",
"bbsuser", "abcd");
 // エラーモードを例外モードに設定
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 // 文字コードの設定
 $pdo->exec("SET NAMES utf8");

$stmt = $pdo->query("select * from posts order by created desc limit 10;");
$postList = $stmt->fetchAll(PDO::FETCH_ASSOC);

}
 catch (PDOException $e) {
 echo $e->getMessage();
 exit;
 }


// フォームが送信された時のみデータを登録する
if ($_SERVER["REQUEST_METHOD"] === "POST") {
 // バリデーションフラグ
 $isValidated = TRUE;
 // 入力値の取得
 $name = $_POST["name"];
 $message = $_POST["message"];

     // 氏名のバリデーション
     if ($name === "") {
     $nameError = "なまえを入力してください";
     $isValidated = FALSE;
     }
     elseif (mb_strlen($name, "utf8") > 100) {
     $nameError = "なまえは10文字以内で入力してください";
     $isValidated = FALSE;
     }

     // メッセージのバリデーション
     if ($message === "") {
     $messageError = "メッセージを入力してください";
     $isValidated = FALSE;
     }
}

 // バリデーションで問題が無ければデータベースに登録
 if ($isValidated == TRUE) {

   try {

   $stmt = $pdo->prepare("INSERT INTO  posts
   (name, message, created)VALUES
   (?, ?, NOW())");
   $stmt->execute(array($name, $message));
   $name = "";
   $message = "";
   header("Location: index.php");
   }
   catch (PDOException $e) {
   echo $e->getMessage();
   exit;
   }
} else {
 $isValidated = FALSE;
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8" />
    <title>ひとこと掲示板</title>
    <style>
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
</style>
</head>

<body>
    <h1>ひとこと掲示板</h1>
    <div id="main">
        <h2>メッセージの投稿</h2>
        <form action="" method="post">
            <table>
                <tr>
                    <td>
                        <?php if(isset($nameError)): ?>
                        <p class="error">
                            <?php echo $nameError; ?>
                        </p>
                        <?php endif; ?>
                        <p>なまえ：<input type="text" name="name" size="30" value="<?php echo $name; ?>"></p>
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
            <p><input type="submit" value="送信" /></p>
        </form>
        <?php foreach ($postList as $post): ?>
        <div class="post">
            <h3>
                <?php echo $post["name"]; ?> [
                <?php echo $post["created"]; ?>]</h3>
            <p class="message">
                <?php echo $post["message"]; ?>
            </p>
        </div>
        <?php endforeach; ?>
    </div>
</body>

</html>



