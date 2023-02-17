<footer class="footer" id="footer">
  <div class="footer__top">
    <div class="container">
      <div class="row">
        <div class="col-xl-4 col-lg-3 col-md-4 col-6">
          <div class="footer__logo"><img data-src="img/common/skills_logo.png" alt="logo" class="lazy"></div>
        </div>
        <div class="col-xl-5 col-lg-5 d-lg-block d-none">
          {% include 'nav/block.php' %}
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