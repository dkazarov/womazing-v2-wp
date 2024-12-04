<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <?php wp_head(); ?>

</head>

<body>

   <div class="wrapper">
      <header class="header">
  <div class="container">
    <div class="header__inner">
      <button class="burger btn--reset">
        <span class="burger__line"></span>
      </button>
      <?php the_custom_logo(); ?>
      <nav class="nav header__nav">
        <ul class="nav__list">
          <li class="nav__item">
            <a class="nav__link" href="#">Главная</a>
          </li>
          <li class="nav__item">
            <a class="nav__link" href="#">Магазин</a>
          </li>
          <li class="nav__item">
            <a class="nav__link" href="#">О бренде</a>
          </li>
          <li class="nav__item">
            <a class="nav__link" href="#">Контакты</a>
          </li>
        </ul>
      </nav>

      <div class="action">
        <a class="action__phone" href="tel:000000">
          <picture>
            <img class="action__phone-icon" src="<?php bloginfo('template_url'); ?>/assets/img/phone.svg" alt="phone icon">
          </picture>
          <picture>
            <img class="action__phone-icon--active" src="<?php bloginfo('template_url'); ?>/assets/img/active-phone.svg" alt="phone icon">
          </picture>
          <!-- +7 (495) 823-54-12 -->
          <?php the_field('phone', 13); ?>
        </a>
        <picture>
          <img class="cart" src="<?php bloginfo('template_url'); ?>/assets/img/cart.svg" alt="cart"></picture>
      </div>

    </div>
  </div>
</header>