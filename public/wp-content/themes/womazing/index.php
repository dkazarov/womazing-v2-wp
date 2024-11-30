<!DOCTYPE html>
<html lang="ua">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100..900&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="./css/style.min.css">
  <title>Womazing</title>
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
      <main class="main">
         <section class="hero">
  <div class="container">
    <div class="hero__inner">

      <div class="hero-slider__left-inner">
        <div class="hero-slider__left">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <h1 class="hero__title">Новые поступления в этом сезоне</h1>
              <p class="hero__text">
                Утонченные сочетания и бархатные оттенки - вот то, что вы искали в этом сезоне. Время исследовать.
              </p>
            </div>
            <div class="swiper-slide">
              <h1 class="hero__title">Что-то новенькое. Мы заждались тебя.</h1>
              <p class="hero__text">
                Надоело искать себя в сером городе? Настало время новых идей, свежих красок и вдохновения с Womazing!
              </p>
            </div>
            <div class="swiper-slide">
              <h1 class="hero__title">Включай новый сезон с WOMAZING</h1>
              <p class="hero__text">
                Мы обновили ассортимент - легендарные коллекции и новинки от отечественных дизайнеров
              </p>
            </div>
          </div>
        </div>
        <div class="hero__btn">
          <a class="hero__btn--arrow" href="#new-collection"></a>
          <a class="hero__btn-link btn--full" href="#">Открыть магазин</a>
        </div>
        <div class="hero__pagination"></div>
      </div>

      <div class="hero-slider__right">
        <div class="swiper-wrapper">
          <div class="swiper-slide hero-slide__inner">
            <picture><source srcset="./assets/hero-main-person-01.webp" type="image/webp"><img class="hero__img" src="./assets/hero-main-person-01.jpg" alt="slider image woman"></picture>
          </div>
          <div class="swiper-slide">
            <picture><source srcset="./assets/hero-main-person-02.webp" type="image/webp"><img class="hero__img" src="./assets/hero-main-person-02.jpg" alt="slider image woman"></picture>
          </div>
          <div class="swiper-slide">
            <picture><source srcset="./assets/hero-main-person-03.webp" type="image/webp"><img class="hero__img" src="./assets/hero-main-person-03.jpg" alt="slider image woman"></picture>
          </div>
        </div>
        <picture><source srcset="./assets/hero-bottom-person.webp" type="image/webp"><img class="hero__img--bottom" src="./assets/hero-bottom-person.jpg" alt=""></picture>
      </div>

    </div>
  </div>
</section>
         <section id="new-collection" class="new-coll">
  <div class="container">

    <h2 class="new-coll-main__title title--main">Новая коллекция</h2>

    <div class="new-coll__inner">

      <article class="card">
        <a class="card__inner" href="#">
          <div class="card-img__inner">
            <picture><source srcset="./assets/new-coll-01.webp" type="image/webp"><img class="card__img" src="./assets/new-coll-01.jpg" alt="girl"></picture>
          </div>
          <h4 class="card__title title--second">Футболка USA</h4>
          <p class="card__price"><span class="card__price--old">$229</span>$129</p>
        </a>
      </article>
      <article class=" card">
        <a class="card__inner" href="#">
          <div class="card-img__inner">
            <picture><source srcset="./assets/new-coll-02.webp" type="image/webp"><img class="card__img" src="./assets/new-coll-02.jpg" alt="girl"></picture>
          </div>
          <h4 class="card__title title--second">Купальник Glow</h4>
          <p class="card__price"><span></span>$129</p>
        </a>
      </article>
      <article class="card">
        <a class="card__inner" href="#">
          <div class="card-img__inner">
            <picture><source srcset="./assets/new-coll-03.webp" type="image/webp"><img class="card__img" src="./assets/new-coll-03.jpg" alt="girl"></picture>
          </div>
          <h4 class="card__title title--second">Свитшот Sweet Shot</h4>
          <p class="card__price"><span></span>$129</p>
        </a>
      </article>

    </div>
    <!--Btn-->
    <div class="new-coll__btn-inner">
      <a class="new-coll__btn btn--transparent" href="#">Открыть магазин</a>
    </div>
    </div>
</section>
         <section class="important">
  <div class="container">

    <h2 class="important__title title--main">Что для нас важно</h2>

    <div class="important__inner">
      <article class="important__card">
        <picture><source srcset="./assets/grant.svg" type="image/webp"><img class="important__img" src="./assets/grant.svg" alt="grant-icon"></picture>
        <h4 class="important-card__title title--middle">Качество</h4>
        <p class="important__text">
          Наши профессионалы работают на лучшем оборудовании для пошива одежды беспрецедентного качества
        </p>
      </article>
      <article class="important__card">
        <picture><source srcset="./assets/settings.svg" type="image/webp"><img class="important__img" src="./assets/settings.svg" alt="settings-icon"></picture>
        <h4 class="important-card__title title--middle">Скорость</h4>
        <p class="important__text">
          Благодаря отлаженной системе в Womazing мы можем отшивать до 20-ти единиц продукции в наших собственных цехах
        </p>
      </article>
      <article class="important__card">
        <picture><source srcset="./assets/hand.svg" type="image/webp"><img class="important__img" src="./assets/hand.svg" alt="hand-icon"></picture>
        <h4 class="important-card__title title--middle">Ответственность</h4>
        <p class="important__text">
          Мы заботимся о людях и планете. Безотходное производство и комфортные условия труда - все это Womazing
        </p>
      </article>

    </div>
  </div>
</section>
         <div class="team">
  <div class="container">
    <div class="team__title title--main">Команда мечты Womazing</div>

    <div class="team__inner">
      <div class="team__slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="team__slider-img-inner">
              <picture><source srcset="./assets/team_01.webp" type="image/webp"><img class="team__slider-img" src="./assets/team_01.jpg" alt="womans cut"></picture>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="team__slider-img-inner">
              <picture><source srcset="./assets/team_02.webp" type="image/webp"><img class="team__slider-img" src="./assets/team_02.jpg" alt="womans jump"></picture>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="team__slider-img-inner">
              <picture><source srcset="./assets/team_03.webp" type="image/webp"><img class="team__slider-img" src="./assets/team_03.jpg" alt="team"></picture>
            </div>
          </div>
        </div>
      </div>

      <div class="team__content">
        <h4 class="team__content-title title--middle">Для каждой</h4>
        <p class="team__content-text">
          <span>Каждая девушка уникальна. Однако, мы схожи в миллионе мелочей</span>

          Womazing ищет эти мелочи и создает прекрасные вещи, которые выгодно подчеркивают достоинства каждой девушки.
        </p>
        <a class="team__link-about-page" href="#">Подробнее о бренде</a>
      </div>
      <div class="team-button-prev">
        <picture><source srcset="../assets/team-arrow-prev.svg" type="image/webp"><img class="team__arrow-prev" src="../assets/team-arrow-prev.svg" alt="arrow right"></picture>
      </div>
      <div class="team-button-next">
        <picture><source srcset="../assets/team-arrow-next.svg" type="image/webp"><img class="team__arrow-next" src="../assets/team-arrow-next.svg" alt="arrow left"></picture>
      </div>
    </div>

  </div>
</div>
      </main>
      <footer class="footer">
  <div class="footer__inner">
    <div class="container">
      <div class="footer__top">
        <picture><source srcset="./assets/logo.svg" type="image/webp"><img class="logo footer__logo" src="./assets/logo.svg" alt="womazing logo"></picture>

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
          <a class="action__phone footer__phone" href="tel:000000">+7 (495) 823-54-12</a>
          <a class="footer__mail" href="mailto:">hello@womazing.com</a>
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
                <picture><source srcset="./assets/instagram.svg" type="image/webp"><img class="social-icon" src="./assets/instagram.svg" alt="instagram icon"></picture>
              </a>
              <a class="social-link" href="#">
                <picture><source srcset="./assets/FB.svg" type="image/webp"><img class="social-icon" src="./assets/FB.svg" alt="fb icon"></picture>
              </a>
              <a class="social-link" href="#">
                <picture><source srcset="./assets/twitter.svg" type="image/webp"><img class="social-icon" src="./assets/twitter.svg" alt="twitter icon"></picture>
              </a>
            </li>
            <div class="visa">
              <a class="visa__link" href="#">
                <picture><source srcset="./assets/visa-mastercard.svg" type="image/webp"><img class="visa__img" src="./assets/visa-mastercard.svg" alt="visa"></picture>
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