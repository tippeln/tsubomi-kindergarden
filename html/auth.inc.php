<?php
function auth_confirm()
{
    if($_SESSION["admin_login"] != TRUE) {
        header("Location: http://tsubomi.lomo.jp/tsubomi-kindergarden/");
        exit;
    }
}