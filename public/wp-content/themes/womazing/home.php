<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<main class="main">
  <section class="hero">
    <div class="container">
      <div class="hero__inner">

        <div class="hero-slider__left-inner">
          <div class="hero-slider__left">
            <div class="swiper-wrapper hero-slide">

              <?php
              global $post;

              $myposts = get_posts([
                // 'numberposts' => 5,
                // 'offset'      => 1,
                'category'    => 3
              ]);

              if( $myposts ){
                foreach( $myposts as $post ){
                  setup_postdata( $post );
                  ?>
                            <div class="swiper-slide">
                              <h1 class="hero__title"><?php the_title(); ?></h1>
                                <?php the_content() ?>
                            </div>
                  <?php	}} wp_reset_postdata(); ?>

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

                                <?php
              global $post;

              $myposts = get_posts([
                // 'numberposts' => 5,
                // 'offset'      => 1,
                'category'    => 4
              ]);

              if( $myposts ){
                foreach( $myposts as $post ){
                  setup_postdata( $post );
                  ?>
                  <div class="swiper-slide hero-slide__inner">
                    <picture>
                      <?php the_post_thumbnail(
                        array(1380,920),
                        array('class' => 'hero__img'),
                        ); ?>
                    </picture>
                  </div>
                  <?php	}} wp_reset_postdata(); ?>

          </div>
          <picture>
            <source srcset="<?php bloginfo('template_url'); ?>/assets/img/hero-bottom-person.webp" type="image/webp">
            <img class="hero__img--bottom" src="<?php bloginfo('template_url'); ?>/assets/img/hero-bottom-person.jpg"
              alt="">
          </picture>
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
              <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/new-coll-01.webp" type="image/webp"><img
                  class="card__img" src="<?php bloginfo('template_url'); ?>/assets/img/new-coll-01.jpg" alt="girl">
              </picture>
            </div>
            <h4 class="card__title title--second">Футболка USA</h4>
            <p class="card__price"><span class="card__price--old">$229</span>$129</p>
          </a>
        </article>
        <article class=" card">
          <a class="card__inner" href="#">
            <div class="card-img__inner">
              <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/new-coll-02.webp" type="image/webp"><img
                  class="card__img" src="<?php bloginfo('template_url'); ?>/assets/img/new-coll-02.jpg" alt="girl">
              </picture>
            </div>
            <h4 class="card__title title--second">Купальник Glow</h4>
            <p class="card__price"><span></span>$129</p>
          </a>
        </article>
        <article class="card">
          <a class="card__inner" href="#">
            <div class="card-img__inner">
              <picture>
                <source srcset="<?php bloginfo('template_url'); ?>/assets/img/new-coll-03.webp" type="image/webp"><img
                  class="card__img" src="<?php bloginfo('template_url'); ?>/assets/img/new-coll-03.jpg" alt="girl">
              </picture>
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
          <picture>
            <source srcset="<?php bloginfo('template_url'); ?>/assets/img/grant.svg" type="image/webp"><img
              class="important__img" src="<?php bloginfo('template_url'); ?>/assets/img/grant.svg" alt="grant-icon">
          </picture>
          <h4 class="important-card__title title--middle">Качество</h4>
          <p class="important__text">
            Наши профессионалы работают на лучшем оборудовании для пошива одежды беспрецедентного качества
          </p>
        </article>
        <article class="important__card">
          <picture>
            <source srcset="<?php bloginfo('template_url'); ?>/assets/img/settings.svg" type="image/webp"><img
              class="important__img" src="<?php bloginfo('template_url'); ?>/assets/img/settings.svg"
              alt="settings-icon">
          </picture>
          <h4 class="important-card__title title--middle">Скорость</h4>
          <p class="important__text">
            Благодаря отлаженной системе в Womazing мы можем отшивать до 20-ти единиц продукции в наших собственных
            цехах
          </p>
        </article>
        <article class="important__card">
          <picture>
            <source srcset="<?php bloginfo('template_url'); ?>/assets/img/hand.svg" type="image/webp"><img
              class="important__img" src="<?php bloginfo('template_url'); ?>/assets/img/hand.svg" alt="hand-icon">
          </picture>
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
                <picture>
                  <source srcset="<?php bloginfo('template_url'); ?>/assets/img/team_01.webp" type="image/webp"><img
                    class="team__slider-img" src="<?php bloginfo('template_url'); ?>/assets/img/team_01.jpg"
                    alt="womans cut">
                </picture>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="team__slider-img-inner">
                <picture>
                  <source srcset="<?php bloginfo('template_url'); ?>/assets/img/team_02.webp" type="image/webp"><img
                    class="team__slider-img" src="<?php bloginfo('template_url'); ?>/assets/img/team_02.jpg"
                    alt="womans jump">
                </picture>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="team__slider-img-inner">
                <picture>
                  <source srcset="<?php bloginfo('template_url'); ?>/assets/img/team_03.webp" type="image/webp"><img
                    class="team__slider-img" src="<?php bloginfo('template_url'); ?>/assets/img/team_03.jpg" alt="team">
                </picture>
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
          <picture>
            <source srcset="<?php bloginfo('template_url'); ?>/assets/img/team-arrow-prev.svg" type="image/webp">
            <img class="team__arrow-prev" src=".<?php bloginfo('template_url'); ?>/assets/img/team-arrow-prev.svg"
              alt="arrow right">
          </picture>
        </div>
        <div class="team-button-next">
          <picture>
            <source srcset="<?php bloginfo('template_url'); ?>/assets/img/team-arrow-next.svg" type="image/webp">
            <img class="team__arrow-next" src=".<?php bloginfo('template_url'); ?>/assets/img/team-arrow-next.svg"
              alt="arrow left">
          </picture>
        </div>
      </div>

    </div>
  </div>
</main>

<?php get_footer(); ?>