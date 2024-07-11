<?php get_header(); ?>
<!-- <?php get_template_part('template-parts/mainvisual'); ?>
<?php get_template_part('template-parts/breadcrumb'); ?> -->
<?php $theme_options = get_option('theme_option_name'); ?>
<main id="single">
  <section class="section single-news">
    <div class="page-width">
      <article class="section_inner single-content">


        <div class="single-content__time date">
          <p class="title-cat__date"><?= get_the_date(); ?></p>
          <?php the_category(',') ?>
        </div>
        <div class="single-content__title">
          <p class="h2_text"><?php the_title(); ?></p>
        </div>

        <div class="single-content__text">
          <?= the_content(); ?>
        </div>

      </article>
    </div>
  </section>
  <?php get_template_part('template-parts/index-online'); ?>

</main>

<?php get_footer(); ?>