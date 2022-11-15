<?php
/*
Template Name: 後援案内
Template Post Type: page
*/

get_header(); ?>

<main class="page-support">
  <div class="square">
    <div class=" headline">
      <div class="headlineLeft">
        <p class="top">横須賀市観光協会<br class="sp">後援申請案内</p>
      </div>
      <div class="headlineRight">
        <img class="streetLamp" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about/street-lamp.png">
      </div>
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