<footer class="footer">
  <div class="footer-content">
    <div class="footer-inner">
      <div class="footer-logo">
        <a href="<?php echo esc_url(home_url()); ?>">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo/logo1_en.png" alt="logo">
        </a>
      </div>
      <?php
      wp_nav_menu(array(
        'theme_location' => 'footer_menu_left',
        'menu_class' => 'footer_menu_left'
      ));
      wp_nav_menu(array(
        'theme_location' => 'footer_menu_right',
        'menu_class' => 'footer_menu_right'
      ));
      ?>
      <div class="copyright">
        <p>Copyright©2023. 一般社団法人横須賀市観光協会 All Rights Reserved.</p>
      </div>
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>