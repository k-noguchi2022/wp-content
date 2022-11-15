<?php
/*
Template Name: 特集一覧
Template Post Type: feature
*/

get_header(); ?>

<main class="archive-features">
  <div class="TITLEContainer-ST">
    <div class="TITLE-ST">
      <img src='<?php echo esc_url(get_template_directory_uri()); ?>\img\common\headline_asset2.png' class="TITLEImg-ST">
      <h1 class="japaneseTITLE-ST">特集</h1>
      <p class="englishTITLE-ST ">Feature</p>
      <div class="TITLELine-ST"></div>
    </div>
    <div class="TITLEContainerLine-ST"></div>
  </div>
  <div class="mainContainer-PO">
    <?php if (have_posts()) : ?>
      <?php
      while (have_posts()) :
        the_post();
      ?>
        <article id="post-<?php the_ID(); ?>" class="posts-ST posts-PO">
          <a href="<?php the_permalink(); ?>" class="notAtagStyle">
            <div class="thumbnail-ST">
              <?php if (has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('archive_thumbnail'); ?>
              <?php else : ?>
                <img src='<?php echo esc_url(get_template_directory_uri()); ?>\img\NoImage\NoImage.png'>
              <?php endif; ?>
            </div>
            <div class="article-ST article-PO">
              <?php the_title('<H2>', '</H2>'); ?>
              <div class="TITLELine"></div>
              <?php echo custom_excerpt(70); ?>...
            </div>
          </a>
        </article>

      <?php endwhile; ?>
    <?php endif; ?>
  </div>
  <div class="pagination">
    <?php
    the_posts_pagination(
      array(
        'prev_text' => '&lt;',
        'next_text' => '&gt;'
      )
    );
    ?>
  </div>
  <div class="footer-space"></div>
</main>

<?php get_footer(); ?>