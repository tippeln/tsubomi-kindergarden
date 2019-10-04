<?php
require_once "util.inc.php";
// session_start();
// // 既にログイン認証済みの場合は会員専用ページへ移動
// if($_SESSION["authenticated"] == TRUE) {
// header("Location: memberonly.php");
//  exit;
// }
s("member.php");
// ユーザIDを格納する変数（$user）の初期化
$user = "";
$loginError = "";
if ($_SERVER["REQUEST_METHOD"] === "POST") {
$user = $_POST["user"];
$pass = $_POST["pass"];


if ($_POST["user"] === "tippeln" and $_POST["pass"] === "abcd") {
 $_SESSION["authenticated"] = TRUE;
 $_SESSION["user"] = $user;
header("Location: _member.php");
 exit;
} else { // ログイン認証に失敗
 // $loginErrorにエラーメッセージを設定
    $loginError = "ユーザIDかパスワードが正しくありません";
}
}
var_dump($_SESSION["user"]);
var_dump($loginError);
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>つぼみ幼稚園 | すくすくのびるはじめのいっぽ</title>
    <meta name="keywords" content="幼稚園、わくわく、楽しい、園庭が広い">
    <meta name="description" content="行動する力を持った子ども">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="/" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="。" />
    <!-- <link rel="icon" href="images/favicon.ico" type="icon"> -->
    <!-- <link rel="icon" href="favicon.ico"> -->
    <link rel="icon" type="image/png" href="images/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/zoomslider.css" />
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slick.css">
    <!--     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script> -->
    <script src="js/common.js"></script>
    <script src="js/modernizr-2.6.2.min.js"></script>
</head>
<header>
<!-- <div class="common-hero" height="100px"></div> -->
</header>

<body>
    <main>
        <section id="login" class="section">
            <div class="container">
                <h1><a href="index.html"><img src="images/logo.png" alt="" height="50px"></a></h1><br>
                <div class="h2-area-php">
                    <h2>ログイン<br><span class="h2-sub"> Login</span></h2>
                    <div>
                        <?php if (isset($loginError)): ?>
                        <p class="error">
                            <?php echo h($loginError); ?>
                        </p>
                        <?php endif; ?>
                        <p>ユーザIDとパスワードを入力して「ログイン」ボタンを押してください</p><br>
                        <form action="" method="post" class="login">
                            <p>ユーザーID　<input type="text" name="user" value="<?php echo h($user); ?>"></p><br>
                            <p>パスワード　<input type="password" name="pass"></p><br>
                            <p><input type="submit" value="ログイン"></p>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>