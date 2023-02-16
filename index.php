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



  

  <div class="wrapper">

    

    <header class="header">
  <div class="container">
    <div class="row">
      <div class="col-xl-3 col-lg-2 col-md-4 col-6">
        <div class="header__logo"><img data-src="img/common/skills_logo.png" alt="logo" class="lazy"></div>
      </div>
      <div class="col-xl-4 col-lg-4 d-lg-block d-none">
        <nav class="nav">
  <ul class="nav__list">
    <li class="nav__item"><a href="#program" rel="noopener noreferrer" class="scroll">Программа</a></li>
    <li class="nav__item"><a href="#cost" rel="noopener noreferrer" class="scroll">стоимость</a></li>
    <li class="nav__item"><a href="#author" rel="noopener noreferrer" class="scroll">Автор курса</a></li>
  </ul>
</nav>
      </div>
      <div class="col-xl-5 col-lg-6 col-md-8 col-6">
        <div class="header__contacts">
          <a class="header__wts" href="https://api.whatsapp.com/send?phone=79774910129&text=%d0%a3%d0%b7%d0%bd%d0%b0%d1%82%d1%8c%20%d0%bf%d0%be%d0%b4%d1%80%d0%be%d0%b1%d0%bd%d0%be%d1%81%d1%82%d0%b8&source=&data=&app_absent=">
            <img src="img/common/h-phone.png" alt="">
          </a>
          <a href="tel:+<?=$phone_link?>" class="header__phone"><?=$phone?></a>
          <a href="#popup-call" class="header__button button-link button-link_yellow" data-fancybox>Заказать звонок</a>
        </div>
      </div>
    </div>
  </div>
</header>

    <section class="main" id="main">
  <video preload="auto" autoplay="" loop="" muted="" playsinline="" webkit-playinginline="" poster="img/main/main_bg.png">
    <source src="video/intro.mp4" type="video/mp4">
  </video>
  <div class="container">
    <div class="row">
      <div class="col-xl-7 col-lg-8 col-md-10 col-12">
        <div class="main__content">
          <h1 class="main__title">
            <div>Онлайн-курс</div>
            MIRONOVA <br>VIDEOSCHOOL
          </h1>
          <h3 class="main__descr">Научитесь снимать коммерчески-успешные видеопроекты на&nbsp;курсе известного режиссера-клипмейкера Ирины Мироновой</h3>
          <a href="#popup-reg" class="main__button button-link button-link_yellow" data-fancybox>Зарегистрироваться</a>
        </div>
      </div>
    </div>
  </div>
</section>



    <section class="who lazy" id="who">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-12 order-lg-1 order-2">
        <h2 class="who__title">MIRONOVA VIDEOSCHOOl <br>для вас, если вы...</h2>
        <div class="who__descr">...хотите разбираться в&nbsp;съемках и&nbsp;монтаже, снять собственное кино или музыкальный клип, научиться снимать видео для YouTube и&nbsp;Instagram</div>
      </div>
      <div class="col-lg-6 col-12 order-lg-2 order-1">
        <div class="who__speaker"><img data-src="img/who/who_speaker.png" alt="speaker" class="lazy"></div>
      </div>
    </div>
  </div>
</section>

    

    <section class="about" id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 col-12 order-lg-1 order-2">
        <h2 class="about__title">Авторский курс</h2>
        <ul class="about__list">
          <li>24&nbsp;видеолекции</li>
          <?php /*<li>50&nbsp;дополнительных материалов</li>*/ ?>
          <li>Обратная связь от&nbsp;тьюторов</li>
          <li>24&nbsp;творческих задания</li>
        </ul>
      </div>
      <div class="col-lg-5 col-12 order-lg-2 order-1">
        <div class="about__logo"><img data-src="img/about/about_logo.png" alt="logo" class="lazy"></div>
      </div>
    </div>
  </div>
</section>

    <section class="author lazy" id="author">
  <div class="container">
    <div class="row">
      <div class="col-xl-5 col-lg-6 col-12">
        <div class="author__logo"><img data-src="img/author/author.png" alt="author" class="lazy"></div>
      </div>
      <div class="offset-xl-1 col-xl-6 col-lg-6 col-12">
        <h2 class="author__title">
          <div class="author__title_big">Автор</div>
          Ирина <br>Миронова
          <div class="author__title_small">Режиссер-клипмейкер</div>
        </h2>
        <p class="author__descr">Сняла более 800&nbsp;видеопроектов: фильмы, ТВ-передачи, клипы.</p>
        <p class="author__descr">Среди заказчиков: <br>Би-2, Тимати, Земфира, Арбенина и&nbsp;многие другие звезды.</p>
      </div>
    </div>
  </div>
</section>

    <section class="skills" id="skills">
  <div class="skills__left">
    <div class="skills__left-content">
      <h2 class="skills__title">Чему вы <br>научитесь</h2>
      <ul class="skills__list">
        <li>Создавать креативную концепцию видео</li>
        <li>Работать с&nbsp;заказчиком и&nbsp;съемочной группой</li>
        <li>Разбираться в&nbsp;качестве и&nbsp;видах съемки</li>
        <li>Реализовать художественную идею в&nbsp;видео</li>
        <li>Контролировать процесс монтажа</li>
        <li>Руководить съемочным процессом</li>
      </ul>
      <a href="#popup-reg" class="skills__button button-link button-link_yellow" data-fancybox>Хочу участвовать!</a>
    </div>
  </div>
  <div class="skills__right">
    <video width="100%" height="auto" preload="auto" autoplay="autoplay" loop="loop" poster="img/skills/skills_poster.png" controls>
      <source src="video/showreel1.mp4" type="video/mp4">
    </video>
  </div>
</section>

    <section class="program" id="program">
  <div class="container">
    <h2 class="program__title">
      <div class="program__title-logo"><img data-src="img/program/program_logo.png" alt="logo" class="lazy"></div>
      Программа <br>обучения
    </h2>
    <div class="program__content">
      <div class="program__block">
        <div class="program__block-title">Базис для работы режиссера: от&nbsp;истории кино до&nbsp;модных тенденций</div>
        <div class="program__block-controls"></div>
        <div class="program__block-descr">
          <ul>
            <li>Краткая история мирового Российского кино</li>
            <li>Схожести и&nbsp;различия производства различных киноформ (видео для соцсетей, рекламные ролики, музыкальные клипы, документальные фильмы, большое кино)</li>
            <li>Тенденции и&nbsp;тренды</li>
            <li>Психология экранного восприятия</li>
            <li>Методы воздействия на&nbsp;зрителя</li>
          </ul>
        </div>
      </div>
      <div class="program__block">
        <div class="program__block-title">Философия работы с&nbsp;клиентом: как наладить контакт и&nbsp;создать образ артиста</div>
        <div class="program__block-controls"></div>
        <div class="program__block-descr">
          <ul>
            <li>Психология работы с&nbsp;клиентом</li>
            <li>Работа с&nbsp;клиентом</li>
            <li>Создание образа артиста (заказчика)</li>
            <li>Психология работы с&nbsp;артистом на&nbsp;съемочной площадке и&nbsp;вне</li>
            <li>Как реализовать мечту</li>
          </ul>
        </div>
      </div>
      <div class="program__block">
        <div class="program__block-title">Креативная концепция: как генерировать идеи</div>
        <div class="program__block-controls"></div>
        <div class="program__block-descr">
          <ul>
            <li>Формирование креативной концепции</li>
            <li>Правила написания сценария</li>
            <li>Драматургия</li>
            <li>Провокационные идеи</li>
          </ul>
        </div>
      </div>
      <div class="program__block">
        <div class="program__block-title">Организация съемок: как контролировать процессы от&nbsp;А до&nbsp;Я</div>
        <div class="program__block-controls"></div>
        <div class="program__block-descr">
          <ul>
            <li>Бюджетирование</li>
            <li>Формирование состава съемочной группы</li>
            <li>Режиссерский сценарий</li>
            <li>Раскадровка</li>
            <li>Поиск локейшена</li>
            <li>Кастинг</li>
            <li>Съемочный график</li>
            <li>Работа со&nbsp;съемочной группой</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

    <section class="process" id="process">
  <div class="container">
    <h2 class="process__title">Как <br>проходит <br>обучение</h2>
    <div class="process__content">
      <div class="process__block">
        <div class="process__block-number"></div>
        <div class="process__block-logo"><img data-src="img/process/process_icon_01.png" alt="icon" class="lazy"></div>
        <div class="process__block-descr">Вы&nbsp;получаете доступ к&nbsp;курсу</div>
      </div>
      <div class="process__block">
        <div class="process__block-number"></div>
        <div class="process__block-logo"><img data-src="img/process/process_icon_02.png" alt="icon" class="lazy"></div>
        <div class="process__block-descr">В&nbsp;удобное вам время и&nbsp;на&nbsp;любом устройстве смотрите видеолекции</div>
      </div>
      <div class="process__block">
        <div class="process__block-number"></div>
        <div class="process__block-logo"><img data-src="img/process/process_icon_03.png" alt="icon" class="lazy"></div>
        <div class="process__block-descr">Выполняете творческие задания и&nbsp;отправляете на&nbsp;проверку тьютору в&nbsp;общий чат</div>
      </div>
      <div class="process__block">
        <div class="process__block-number"></div>
        <div class="process__block-logo"><img data-src="img/process/process_icon_04.png" alt="icon" class="lazy"></div>
        <div class="process__block-descr">Получаете обратную связь в&nbsp;течение суток</div>
      </div>
    </div>
  </div>
</section>

    <section class="cost" id="cost">
  <div class="cost__left">
    <div class="cost__left-content">
      <h2 class="cost__title">Стоимость <br>участия</h2>
      <ul class="cost__list">
        <li>24&nbsp;авторских видеолекции</li>
        <li>50&nbsp;дополнительных материалов</li>
        <li>Обратная связь от&nbsp;тьютора проекта</li>
        <li>Сертификат о&nbsp;прохождении курса</li>
        <li>24&nbsp;творческих задания</li>
      </ul>
      <div class="cost__price"><span><?=$PRICE_STANDARD?></span> ₽</div>
      <a href="#popup-pay" class="cost__button button-link button-link_yellow" data-fancybox>Оплатить</a>
    </div>
  </div>
  <div class="cost__right">
    <video width="100%" height="auto" preload="auto" autoplay="autoplay" loop="loop" poster="img/cost/cost_poster.png" controls>
      <source src="video/showreel2.mp4" type="video/mp4">
    </video>
  </div>
</section>

    <section class="bottom" id="bottom">
  <div class="container">
    <div class="bottom__form">
      
<form action="<?=$action?>&form=sub" class="form form_vertical">
  <div class="form__wrapper">
    
    <div class="form__title ">Есть <br>предложение:</div>
    

    
    <div class="form__text">Вы&nbsp;подписываетесь на&nbsp;нашу рассылку, а&nbsp;мы&nbsp;присылаем вам <span>только полезные материалы</span> про съемку, монтаж и&nbsp;поиск идей для создания видео</div>
    

    <div class="form__items">
      
      
<div class="form__item form__item_text ">
  
  <input name="name" type="text" placeholder="Ваше имя" class="form__input"  required value="">
  
</div><!-- form__item -->

      

      
      
<div class="form__item form__item_text ">
  
  <input name="phone" type="text" placeholder="+7(_ _ _)_ _ _-_ _-_ _" class="form__input"  required value="">
  
</div><!-- form__item -->

      

      
      
<div class="form__item form__item_email ">
  
  <input name="email" type="email" placeholder="E-MAIL" class="form__input"  required value="">
  
</div><!-- form__item -->

      

      

      <div class="form__item form__item_button"><button class="gtm-button" type="submit">Подписаться</button></div>

      <div class="form__more">
        <label class="form__footer">
          <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
            <div class="form__footer-checkbox-icon lazy"></div>
          </div>
          <div class="form__footer-text">Нажимая на кнопку, я&nbsp;даю согласие на&nbsp;обработку персональных данных, получение рассылок, а&nbsp;также соглашаюсь c&nbsp;<a href="#privacy" class="fancybox">политикой конфиденциальности</a>.</div>
        </label>
      </div>
    </div><!-- form__items -->
  </div>


</form>

    </div>
    <div class="bottom__descr">
      <div class="bottom__logo"><img data-src="img/bottom/bottom_dog.png" alt="dog" class="lazy"></div>
      <div class="bottom__socials">
        <div class="bottom__socials-descr">Каждый раз, когда вы&nbsp;заходите в&nbsp;наши соцсети, SMM-щик улыбается!</div>
        <div class="bottom__socials-links">
          
          <a href="http://instagram.com/bisinst" class="bottom__socials-link" target="_blank"><img data-src="img/bottom/socials_inst.png" alt="inst" class="lazy"></a>
          
        </div>
      </div>
    </div>
  </div>
</section>

    <footer class="footer" id="footer">
  <div class="footer__top">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-3 col-md-4 col-6">
          <div class="footer__logo"><img data-src="img/common/skills_logo.png" alt="logo" class="lazy"></div>
        </div>
        <div class="col-xl-5 col-lg-5 d-lg-block d-none">
          <nav class="nav">
  <ul class="nav__list">
    <li class="nav__item"><a href="#program" rel="noopener noreferrer" class="scroll">Программа</a></li>
    <li class="nav__item"><a href="#cost" rel="noopener noreferrer" class="scroll">стоимость</a></li>
    <li class="nav__item"><a href="#author" rel="noopener noreferrer" class="scroll">Автор курса</a></li>
  </ul>
</nav>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-8 col-6">
          <div class="footer__contacts">
            <a href="tel:+<?=$phone_link?>" class="footer__phone"><?=$phone?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer__bottom">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-12">
          <div class="footer__develop">Разработка и продвижение – <a href="//sydi.ru" target="_blank">Synergy Digital</a></div>
        </div>
        <div class="col-md-2 col-12">
          <div class="footer__copyright">&copy;&nbsp;Synergy Skills</div>
        </div>
        <div class="col-md-4 col-12">
          <div class="footer__privacy"><a href="#privacy" class="fancybox">Политика конфиденциальности</a></div>
        </div>
        <div class="col-md-3 col-12">
          <div class="footer__public-offer"><a href="docs/public_offer.pdf" data-fancybox data-type="iframe" class="public-offer fancybox">Публичная оферта</a></div>
        </div>
      </div>
    </div>
  </div>
</footer>


    

  </div>
  <div hidden>

    

    <div class="popup popup-reg" id="popup-reg">
  
<form action="<?=$action?>&form=reg" class="form form_vertical">
  <div class="form__wrapper">
    
    <div class="form__title ">Регистрация</div>
    

    
    <div class="form__text">на курс</div>
    

    <div class="form__items">
      
      
<div class="form__item form__item_text ">
  
  <input name="name" type="text" placeholder="Ваше имя" class="form__input"  required value="">
  
</div><!-- form__item -->

      

      
      
<div class="form__item form__item_text ">
  
  <input name="phone" type="text" placeholder="+7(_ _ _)_ _ _-_ _-_ _" class="form__input"  required value="">
  
</div><!-- form__item -->

      

      
      
<div class="form__item form__item_email ">
  
  <input name="email" type="email" placeholder="E-MAIL" class="form__input"  required value="">
  
</div><!-- form__item -->

      

      

      <div class="form__item form__item_button"><button class="form__button button" type="submit">Зарегистрироваться</button></div>

      <div class="form__more">
        <label class="form__footer">
          <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
            <div class="form__footer-checkbox-icon lazy"></div>
          </div>
          <div class="form__footer-text">Нажимая на кнопку, я&nbsp;даю согласие на&nbsp;обработку персональных данных, получение рассылок, а&nbsp;также соглашаюсь c&nbsp;<a href="#privacy" class="fancybox">политикой конфиденциальности</a>.</div>
        </label>
      </div>
    </div><!-- form__items -->
  </div>


</form>

</div>

<div class="popup popup-call" id="popup-call">
  
<form action="<?=$action?>&form=callme" class="form form_vertical">
  <div class="form__wrapper">
    
    <div class="form__title ">Заполните заявку</div>
    

    
    <div class="form__text">мы вам перезвоним</div>
    

    <div class="form__items">
      
      
<div class="form__item form__item_text ">
  
  <input name="name" type="text" placeholder="Ваше имя" class="form__input"  required value="">
  
</div><!-- form__item -->

      

      
      
<div class="form__item form__item_text ">
  
  <input name="phone" type="text" placeholder="+7(_ _ _)_ _ _-_ _-_ _" class="form__input"  required value="">
  
</div><!-- form__item -->

      

      
      
<div class="form__item form__item_email ">
  
  <input name="email" type="email" placeholder="E-MAIL" class="form__input"  required value="">
  
</div><!-- form__item -->

      

      

      <div class="form__item form__item_button"><button class="form__button button" type="submit">Отправить</button></div>

      <div class="form__more">
        <label class="form__footer">
          <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
            <div class="form__footer-checkbox-icon lazy"></div>
          </div>
          <div class="form__footer-text">Нажимая на кнопку, я&nbsp;даю согласие на&nbsp;обработку персональных данных, получение рассылок, а&nbsp;также соглашаюсь c&nbsp;<a href="#privacy" class="fancybox">политикой конфиденциальности</a>.</div>
        </label>
      </div>
    </div><!-- form__items -->
  </div>


</form>

</div>

<div class="popup popup-pay" id="popup-pay">
  
<form action="<?=$action?>&form=ticketless" class="form form_vertical">
  <div class="form__wrapper">
    
    <div class="form__title ">Оплатить</div>
    

    
    <div class="form__text">курс</div>
    

    <div class="form__items">
      
      
<div class="form__item form__item_text ">
  
  <input name="name" type="text" placeholder="Ваше имя" class="form__input"  required value="">
  
</div><!-- form__item -->

      

      
      
<div class="form__item form__item_text ">
  
  <input name="phone" type="text" placeholder="+7(_ _ _)_ _ _-_ _-_ _" class="form__input"  required value="">
  
</div><!-- form__item -->

      

      
      
<div class="form__item form__item_email ">
  
  <input name="email" type="email" placeholder="E-MAIL" class="form__input"  required value="">
  
</div><!-- form__item -->

      

      
      
      
<div class="form__item form__item_hidden d-none">
  
  <input name="product_id" type="hidden" placeholder="" class="form__input"   value="5320977">
  
</div><!-- form__item -->

      
      
<div class="form__item form__item_hidden d-none">
  
  <input name="form" type="hidden" placeholder="" class="form__input"   value="ticketless">
  
</div><!-- form__item -->

      
      

      <div class="form__item form__item_button"><button class="form__button button" type="submit">Оплатить</button></div>

      <div class="form__more">
        <label class="form__footer">
          <div class="form__footer-checkbox"><input type="checkbox" name="personalDataAgree" checked>
            <div class="form__footer-checkbox-icon lazy"></div>
          </div>
          <div class="form__footer-text">Нажимая на кнопку, я&nbsp;даю согласие на&nbsp;обработку персональных данных, получение рассылок, а&nbsp;также соглашаюсь c&nbsp;<a href="#privacy" class="fancybox">политикой конфиденциальности</a>.</div>
        </label>
      </div>
    </div><!-- form__items -->
  </div>


</form>

</div>

<div class="popup popup-success" id="popup-success">

  <div class="popup-success__content">
    <div class="popup-success__logo"><img src="img/popups/popup_check.png" alt="check"></div>
    <div class="popup-success__text">Ваша заявка принята, мы&nbsp;отправляем чек-лист на&nbsp;вашу почту!</div>
    <button class="button-link button-link_yellow popup-success__button" id="ok">ок</button>
  </div>

</div>

    

  </div>

  <!-- Плагины и хелперы -->

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js" defer="defer"></script>

  <!-- Скрипт ALM Lander -->
  <script src="https://syn.su/js/lander.js" defer="defer"></script>
  <script src="js/script.js"></script>

</body>

</html>