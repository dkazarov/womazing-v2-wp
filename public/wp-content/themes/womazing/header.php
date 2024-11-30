<!DOCTYPE html>
<html lang="ua">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <?php wp_head(); ?>

</head>

<body>

   <div class="wrapper">
      <header class="header">
  <div class="container">
    <div class="header__inner">
      <button class="burger btn--reset">    <span class="burger__line"></span></button>

      <picture><source srcset="./assets/logo.svg" type="image/webp"><img class="logo" src="./assets/logo.svg" alt="womazing logo"></picture>

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
        <a class="action__phone" href="tel:000000">+7 (495) 823-54-12</a>
        <picture><source srcset="./assets/cart.svg" type="image/webp"><img class="cart" src="./assets/cart.svg" alt="cart"></picture>
      </div>

    </div>
  </div>
</header>