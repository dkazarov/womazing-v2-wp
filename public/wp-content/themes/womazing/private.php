<?php
/*
Template Name: Private
*/
?>

<?php get_header(); ?>

<body>

  <div class="wrapper">
    <main class="main">
      <div class="container">
        <div class="private">
          <div class="private__inner">
            <?php the_field('private_text') ?>
          </div>
        </div>
    </main>
  </div>
  </div>
</body>

<?php get_footer(); ?>