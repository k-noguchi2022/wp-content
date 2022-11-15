jQuery("#js-hamburger").click(function () {
  jQuery("#js-hamburger").toggleClass('active');
  jQuery("#js-hamburger-close").toggleClass('active');
  jQuery("#g-nav").toggleClass('panel-active');
});

jQuery("#js-hamburger-close").click(function () {
  jQuery("#js-hamburger").toggleClass('active');
  jQuery("#js-hamburger-close").toggleClass('active');
  jQuery("#g-nav").toggleClass('panel-active');
});

jQuery("#g-nav a").click(function () {
  jQuery("#js-hamburger").removeClass('active');
  jQuery("#js-hamburger-close").removeClass('active');
  jQuery("#g-nav").removeClass('panel-active');
});