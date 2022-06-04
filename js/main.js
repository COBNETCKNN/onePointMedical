jQuery(document).ready(function (jQuery) {
  // mobile menu
  jQuery(".nav-toggler").click(function () {
    jQuery("#navigation").toggle("slide");
    jQuery('.navbar_grid__dropdown').addClass('open');
  });
  jQuery(".nav_close__button").click(function () {
    jQuery('.navbar_grid__dropdown').removeClass('open');
  });
});
