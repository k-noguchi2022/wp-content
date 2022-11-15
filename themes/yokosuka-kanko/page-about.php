<?php
/*
Template Name: 観光協会について
Template Post Type: page
*/

get_header(); ?>

<main class="about-ST">
  <div class="square-PO square-ST square-SK">
    <div class=" headline-PO headline-ST headline-SK">
      <div class="headlineLeft">
        <img class="logo-PO logo-ST logo-SK" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/logo/logo1_en.png">
        <p class="top-PO top-ST top-SK">横須賀市観光協会について</p>
      </div>
      <div class="headlineRight">
        <img class="streetLamp-PO streetLamp-ST streetLamp-SK" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/about/street-lamp.png"><!-- 街灯と柵の画像-->
      </div>
    </div>
    <div class="info-PO info-ST info-SK">
      <div class="infoContents-PO">
        <?php echo get_the_content()  ?>
        <div class="pdf-ST">
          <div class="pdfBox-PO pdfBox-ST pdfBox-SK">
            <a class="captionPdfBTN-PO captionPdfBTN-ST captionPdfBTN-SK" href="" download="">役員名簿</a>
          </div>
          <div class="pdfBox-PO pdfBox-ST pdfBox-SK">
            <a class="captionPdfBTN-PO captionPdfBTN-ST captionPdfBTN-SK" href="" download="">定款</a>
          </div>
          <div class="pdfBox-PO pdfBox-ST pdfBox-SK">
            <a class="captionPdfBTN-PO captionPdfBTN-ST captionPdfBTN-SK" href="" download="">経営状況説明書</a>
          </div>
        </div>
        <div class="underlineBox-PO underlineBox-ST underlineBox-SK">
          <a class="underlineBTN-PO underlineBTN-ST underlineBTN-SK" href="">ご利用にあたって</a>
          <a class="underlineBTN-PO underlineBTN-ST underlineBTN-SK" href="">プライバシーポリシー</a>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-space"></div>
</main>

<?php get_footer(); ?>