<?php
require_once "util.inc.php";
// session();
session_start();
if ($_SESSION["authenticated"] != TRUE) {
 header("Location: login.php");
 exit;
}

// require_once "util.inc.php";
// session("memberonly.php","login.php");
 $user = $_SESSION["user"];

 ?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>会員専用ページ</title>
</head>
<body>
    <h1>会員専用ページへようこそ</h1>
    <p>あなたのユーザーIDは<?php echo h($user);  ?>です。</p>
    <p>このページでは会員専用の情報が閲覧できます。</p>
    <p><a href="logout.php">ログアウトする</a></p>

</body>
</html>