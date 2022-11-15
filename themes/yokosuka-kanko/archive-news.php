<?php
/*
Template Name: お知らせ一覧
Template Post Type: news
*/

get_header(); ?>

<main class="main">

  <div class="TITLEContainer-ST">
    <div class="TITLE-ST">
      <img src="<?php echo get_template_directory_uri(); ?>/img/common/headline_icon.png" class="TITLEImg-ST">
      <h1 class="japaneseTITLE-ST">お知らせ</h1>
      <p class="englishTITLE-ST ">News</p>
      <div class="TITLELine-ST"></div>
    </div>
    <div class="TITLEContainerLine-ST"></div>
  </div>

  <div class="content_base">
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <a href="<?php the_permalink(); ?>">
          <div class="contentArea">
            <div class="grid">
              <div class="archiveEyeCatch">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail(); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/NoImage/NoImage.png" art="NoImage">
                <?php endif; ?>
              </div>
              <div class="archiveDate">
                <time datetime="<?php echo get_the_date('Y年n月j日'); ?>"><?php echo get_the_date(); ?></time>
              </div>
              <div class="archiveTerm">
                <p><?php if ($terms = get_the_terms($post->ID, 'news_type')) {
                      if ($terms) {
                        echo $terms[0]->name;
                      }
                    } ?></p>
              </div>
              <div class="archiveTitle">
                <h2><?php the_title(); ?></h2>
              </div>
            </div>
          </div>
        </a>
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