<?php get_header(); ?>

<section class="portfolio mt-5" id="portfolio">
  <div class="container">
    <?php if(have_posts()): ?>
      <?php while(have_posts()) : the_post(); ?>
    <h2 class="text-center text-uppercase text-secondary mb-0"><?php the_title(); ?></h2>
    <hr class="star-dark mb-5">
    <div class="row justify-content-md-center">

      <div class="col-md-12 col-lg-12">

        <?php
          if(has_post_thumbnail( )){
            the_post_thumbnail('post_thumnnaild', ['class' => 'img-fluid mx-auto d-block']);
          }
         ?>

      </div>

      <div class="content align-self-center col-md-12 col-lg-12">

        <?php
          the_content();
         ?>

      </div>

      <div class="meta align-self-center col-md-12 col-lg-12">

        <?php
          the_meta();
         ?>

      </div>

    </div>
  <?php endwhile; ?>
  <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
