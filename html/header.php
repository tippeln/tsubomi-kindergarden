<?php

require_once "util.inc.php";
require_once "db.inc.php";
require_once "auth.inc.php";
require_once __DIR__ . '/functions.php';

session_start();
auth_confirm();

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-148029606-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-148029606-1');
</script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <meta name="keywords" content="幼稚園、わくわく、楽しい、園庭が広い">
    <meta name="description" content="行動する力を持った子ども">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:title" content="" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="/" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <!-- <link rel="icon" href="images/favicon.ico" type="icon"> -->
    <!-- <link rel="icon" href="favicon.ico"> -->
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/images/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/zoomslider.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sanitize.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/slick.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/common.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/modernizr-2.6.2.min.js"></script>
    <?php wp_head(); ?>
</head>
<body>
    <div class="wrapper">