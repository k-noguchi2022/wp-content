<?php
/*
Template Name: 特集詳細
Template Post Type: feature
*/

get_header(); ?>

<main class="features">
  <div class="TITLEContainer-PO">
    <div class="headlineAsset-ST">
      <img src='<?php echo esc_url(get_template_directory_uri()); ?>\img\common\headline_asset.png' class="headlineImg-ST">
      <div class="contentLogo-ST">
        <p class="contentLogo-SK">Feature</p>
      </div>
    </div>
    <div class="TITLE-ST TITLE-PO">
      <?php the_title('<h2>', '</h2>'); ?>
    </div>
  </div>
  <div class="contents-ST ">
    <div class="thumbnail-ST">
      <?php if (has_post_thumbnail()) : ?>
        <?php the_post_thumbnail(); ?>
      <?php else : ?>
        <img src='<?php echo esc_url(get_template_directory_uri()); ?>\img\NoImage\NoImage.png'>
      <?php endif; ?>
    </div>
    <div class="article-ST">
      <?php the_content(); ?>
    </div>
  </div>
  <div class="footer-space"></div>
</main>

<?php get_footer(); ?>