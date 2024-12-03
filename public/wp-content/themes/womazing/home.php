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
                        <?php the_content(
                          
                        ) ?>
                      </div>
                  <?php	}} wp_reset_postdata(); ?>

            </div>
          </div>
            <div class="hero__btn">
              <a class="hero__btn--arrow" href="#new-collection">
                <picture>
                  <img class="hero__btn--arrow-img" src="<?php bloginfo('template_url'); ?>/assets/img/hero-btn-arrow.svg" alt="arrow down">
                </picture>
              </a>
              <a class="hero__btn-link btn--full" href="#"><?php the_field('hero-btn-text', 13); ?></a>
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
                        array(410,646),
                        array('class' => 'hero__img'),
                        ); ?>
                    </picture>
                  </div>
                  <?php	}} wp_reset_postdata(); ?>

          </div>
          <picture>
            <source srcset="<?php bloginfo('template_url'); ?>/assets/img/hero-bottom-person.webp" type="image/webp">
            <img class="hero__img--bottom" src="<?php bloginfo('template_url'); ?>/assets/img/hero-bottom-person.jpg" alt="">
          </picture>
        </div>

      </div>
    </div>
  </section>

  <section id="new-collection" class="new-coll">
    <div class="container">
        <?php the_field('phone'); ?>
      <h2 class="new-coll-main__title title--main"><?php the_field('new-coll-main-title', 13); ?></h2>

      <div class="new-coll__inner">

        <article class="card">
          <a class="card__inner" href="#">
            <div class="card-img__inner">
              <picture>
                <img class="card__img" src="<?php the_field('new-coll-card-01-img', 13); ?>">
              </picture>
            </div>
              <h4 class="card__title title--second"><?php the_field('new-coll-card-01-title', 13); ?></h4>
            <p class="card__price">
              <span class="card__price--old"><?php the_field('new-coll-card-01-full-price', 13); ?></span>
              <?php the_field('new-coll-card-01-sale-price', 13); ?>
            </p>
          </a>
        </article>

        <article class="card">
          <a class="card__inner" href="#">
            <div class="card-img__inner">
              <picture>
                <img class="card__img" src="<?php the_field('new-coll-card-02-img', 13); ?>">
              </picture>
            </div>
              <h4 class="card__title title--second"><?php the_field('new-coll-card-02-title', 13); ?></h4>
            <p class="card__price">
              <span class="card__price--old"><?php the_field('new-coll-card-02-full-price', 13); ?></span>
              <?php the_field('new-coll-card-02-sale-price', 13); ?>
            </p>
          </a>
        </article>

        <article class="card">
          <a class="card__inner" href="#">
            <div class="card-img__inner">
              <picture>
                <img class="card__img" src="<?php the_field('new-coll-card-03-img', 13); ?>">
              </picture>
            </div>
              <h4 class="card__title title--second"><?php the_field('new-coll-card-03-title', 13); ?></h4>
            <p class="card__price">
              <span class="card__price--old">
                <?php the_field('new-coll-card-03-full-price', 13); ?>
              </span>
              <?php the_field('new-coll-card-03-sale-price', 13); ?>
            </p>
          </a>
        </article>

      </div>
      <!--Btn-->
      <div class="new-coll__btn-inner">
        <a class="new-coll__btn btn--transparent" href="#"><?php the_field('new-coll-btn-text', 13); ?></a>
      </div>
    </div>
  </section>
  
  <section class="important">
    <div class="container">

      <h2 class="important__title title--main"><?php the_field('important_title',13)?></h2>

      <div class="important__inner">
        
        <?php
global $post;

$myposts = get_posts([
  // 'numberposts' => 3,
	// 'offset'      => 1,
	'category'    => 8
]);

if( $myposts ){
  foreach( $myposts as $post ){
    setup_postdata( $post );
		?>
      <article class="important__card">
            <?php the_post_thumbnail(61,61, array(
               'class' => "important__img",
            )); ?>
         <h4 class="important-card__title title--middle"><?php the_title(); ?></h4>
         <p class="important__text">
            <?php the_content(); ?>
         </p>
       </article>
     <?php
	}} wp_reset_postdata(); ?>

      </div>
    </div>
  </section>
  <div class="team">
    <div class="container">
      <h4 class="team__title title--main"><?php the_field('team_main_title', 13); ?></h4>

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