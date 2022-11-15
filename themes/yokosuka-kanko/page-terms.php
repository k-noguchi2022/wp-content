<?php
/*
Template Name: 利用規約
Template Post Type: page
*/

get_header(); ?>

<main class="page-terms">
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