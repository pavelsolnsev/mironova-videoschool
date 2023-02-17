<header class="header">
  <div class="container">
    <div class="row">
      <div class="col-xl-3 col-lg-2 col-md-4 col-6">
        <div class="header__logo"><img data-src="img/common/skills_logo.png" alt="logo" class="lazy"></div>
      </div>
      <div class="col-xl-4 col-lg-4 d-lg-block d-none">
        {% include 'nav/block.php' %}
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