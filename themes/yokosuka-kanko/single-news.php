<?php
/*
Template Name: お知らせ詳細
Template Post Type: news
*/

get_header(); ?>

<main class="main">
  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <div class="titleBorder-PO"></div>
      <div class="titleSetting-PO">
        <h1 class="newsTITLE-SK">
          <?php the_title(); ?>
        </h1>
        <p class="dateTimeTXT-SK">
          <time datetime="<?php echo get_the_date('Y年n月j日'); ?>"><?php echo get_the_date(); ?></time>
        </p>
      </div>
      <div class="titleBorder-PO"></div>

      <div class="eyeCatch-SK">
        <?php if (has_post_thumbnail()) : ?>
          <?php the_post_thumbnail(); ?>
        <?php else : ?>
          <img src="<?php echo get_template_directory_uri(); ?>/img/NoImage/NoImage.png" art="NoImage">
        <?php endif; ?>
      </div>
      <div class="titleEyeCatch-PO"></div>

      <div class="content-PO">
        <div class="content-ST"><?php the_content(); ?></div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>

  <a href="<?php echo esc_url(home_url()); ?>/news" class="returnBTN-SK">お知らせ一覧に戻る</a>
  <div class="footer-space"></div>
</main>

<?php get_footer(); ?>