<?php
/*
Template Name: プライバシーポリシー
Template Post Type: page
*/

get_header(); ?>

<main class="page-privacy">
  <div class="square">
    <div class="headline">
      <?php the_title()  ?>
    </div>
    <div class="info">
      <div class="infoContents">
        <?php echo get_the_content()  ?>
      </div>
    </div>
  </div>
  <div class="footer-space"></div>
</main>

<?php get_footer(); ?>