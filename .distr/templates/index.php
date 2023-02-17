<?php
$partner = isset($_GET['partner']) ? trim($_GET['partner']) : '';
$version = isset($_GET['version']) ? trim($_GET['version']) : '';
require_once 'version.php';

//if ($_SERVER['SERVER_NAME'] != '127.0.0.1') {
date_default_timezone_set('Europe/Moscow');
$_REQUEST["eId"] = 19531343; // указываем актуальный eId для данного мероприятия

include_once('getinfo.php');

$JSONDATA = json_decode(file_get_contents('./content.json'));

include_once 'prices.php'; // подключаем файл
//}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?=$title;?>">
  <meta name="application-name" content="<?=$title;?>">
  <title><?=$title;?></title>

  <meta property="og:title" content="<?=$title;?>">
  <meta property="og:description" content="<?=$title;?>">
  <meta property="og:url" content="http://<?=$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'] ?>">
  <meta property="og:image" content="http://synergy.ru/img/logo.png">
  <meta property="og:type" content="article">

  <link href="http://synergy.ru/img/favicon.ico" type="image/x-icon" rel="icon">
  <link href="//synergy.ru/img/favicon.ico" type="image/x-icon" rel="shortcut icon">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

  <link href="css/style.css" rel="stylesheet">
  <link href="css/responsive.css" rel="stylesheet">

  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-N5FDT32');</script>
  <!-- End Google Tag Manager -->



</head>

<body>

  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N5FDT32" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->



  {% import 'form/macro.php' as form %}

  <div class="wrapper">

    {% block blocks %}

    {% include 'header/block.php' %}

    {% include 'main/block.php' %}

    {% include 'who/block.php' %}

    {# {% include 'reg/block.php' %} #}

    {% include 'about/block.php' %}

    {% include 'author/block.php' %}

    {% include 'skills/block.php' %}

    {% include 'program/block.php' %}

    {% include 'process/block.php' %}

    {% include 'cost/block.php' %}

    {% include 'bottom/block.php' %}

    {% include 'footer/block.php' %}


    {% endblock %}

  </div>
  <div hidden>

    {% block popups %}

    {% include 'popups/block.php' %}

    {% endblock %}

  </div>

  <!-- Плагины и хелперы -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer="defer"></script>

  <!-- Скрипт ALM Lander -->
  <script src="https://syn.su/js/lander.js" defer="defer"></script>
  <script src="js/script.js"></script>

</body>

</html>