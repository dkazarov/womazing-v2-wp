 <? wp_footer(); ?>
 
 <footer class="footer">
  <div class="footer__inner">
    <div class="container">
      <div class="footer__top">
        <picture>
          <?php the_custom_logo(); ?>
        </picture>

        <nav class="footer__nav">
          <ul class="footer__list">
            <li class="footer__item">
              <a class="footer__link" href="#">Главная</a>
            </li>
            <li class="footer__item">
              <a class="footer__link" href="#">Магазин</a>
            </li>
            <li class="footer__item">
              <a class="footer__link" href="#">О бренде</a>
            </li>
            <li class="footer__item">
              <a class="footer__link" href="#">Контакты</a>
            </li>
          </ul>
        </nav>

        <div class="action footer__action">
          <a class="footer__phone" href="tel:000000">
            <?php the_field('phone', 13); ?>
          </a>
          <a class="footer__mail" href="mailto:">
            <?php the_field('e-mail-footer', 13); ?>
          </a>

        </div>
      </div>

      <div class="footer__bottom">
        <div class="footer__bottom-left">
          <p class="copiright">© Все права защищены</p>
          <a class="private" href="#">Политика конфиденциальности</a>
          <a class="offerta" href="#">Публичная оферта</a>
        </div>

        <div class="footer__bottom-nav">
          <ul class="footer__bottom-nav-items">
            <li class="footer__bottom-nav-item">
              <a class="footer__bottom-nav-link" href="#">Пальто</a>
            </li>
            <li class="footer__bottom-nav-item">
              <a class="footer__bottom-nav-link" href="#">Свитшоты</a>
            </li>
            <li class="footer__bottom-nav-item">
              <a class="footer__bottom-nav-link" href="#">Кардиганы</a>
            </li>
            <li class="footer__bottom-nav-item">
              <a class="footer__bottom-nav-link" href="#">Толстовки</a>
            </li>
          </ul>
        </div>

        <div class="social">
          <ul class="social-items">
            <li class="social-item">
              <a class="social-link" href="#">
                <picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/instagram.svg" type="image/webp"><img class="social-icon" src="<?php bloginfo('template_url'); ?>/assets/img/instagram.svg" alt="instagram icon"></picture>
              </a>
              <a class="social-link" href="#">
                <picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/FB.svg" type="image/webp"><img class="social-icon" src="<?php bloginfo('template_url'); ?>/assets/img/FB.svg" alt="fb icon"></picture>
              </a>
              <a class="social-link" href="#">
                <picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/twitter.svg" type="image/webp"><img class="social-icon" src="<?php bloginfo('template_url'); ?>/assets/img/twitter.svg" alt="twitter icon"></picture>
              </a>
            </li>
            <div class="visa">
              <a class="visa__link" href="#">
                <picture><source srcset="<?php bloginfo('template_url'); ?>/assets/img/visa-mastercard.svg" type="image/webp"><img class="visa__img" src="<?php bloginfo('template_url'); ?>/assets/img/visa-mastercard.svg" alt="visa"></picture>
              </a>
            </div>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
   </div>

   <script type="module" src="js/main.min.js"></script>
</body>

</html>