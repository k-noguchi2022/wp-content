<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="header">
    <div class="container">
      <a href="<?php echo esc_url(home_url()); ?>" class="header-logo">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo/logo3.png" alt="<?php bloginfo('name'); ?>">
      </a>
      <div class="menu pc">
        <?php
        wp_nav_menu(array(
          'theme_location' => 'header_menu',
          'menu_class' => 'menu-wrapper'
        ));
        ?>
      </div>
      <div class="pc">
        <?php get_search_form() ?>
      </div>

      <!-- spメニュー -->
      <!-- ハンバーガーメニュー -->
      <div class="menu-hamburger active" id="js-hamburger">
        <img class="sp" src="<?php echo get_template_directory_uri(); ?>/img/menu/menu_sp.png" alt="">
      </div>

      <nav id="g-nav">
        <div id="g-nav-list">
          <!-- メニュー閉じる✖ボタン -->
          <div class="menu-hamburger" id="js-hamburger-close">
            <img src="<?php echo get_template_directory_uri(); ?>/img/menu/menu_sp_close.png" alt="">
          </div>
          <div class="menu_sp">
            <?php
            wp_nav_menu(array(
              'theme_location' => 'header_menu',
              'menu_class' => 'menu-wrapper'
            ));
            ?>
            <div class="search-form_sp">
              <?php get_search_form() ?>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <div class="header-space"></div>