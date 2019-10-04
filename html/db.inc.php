<?php
function db_init()
{
define("HOST", "localhost");
define("DBNAME", "DBzd3G15");
define("DBUSER", "zd3G15");
define("DBPASS", "MT5S3U");
try {
 $pdo = new PDO('mysql:host='.HOST.';dbname='.DBNAME, DBUSER, DBPASS);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 $pdo->exec("SET NAMES utf8");
return $pdo;
}
 catch (PDOException $e) {
 echo $e->getMessage();
 exit;
 }
}
?>