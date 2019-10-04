<?php
function auth_confirm()
{
    if($_SESSION["admin_login"] != TRUE) {
        header("Location: http://zd3g15.sim.zdrv.com/tsubomi/");
        exit;
    }
}