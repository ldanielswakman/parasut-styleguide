$(document).ready(function() {

  // if #anchor is present in url on page load, smoothscroll towards it (incl offset)
  if (window.location.hash) {
    $.smoothScroll({
      offset: -$('header').outerHeight(),
      scrollTarget: $(window.location.hash),
      speed: 1000,
    });
  }

  // initialising smooth scroll
  $('a[href*="#"]').smoothScroll({
    offset: -$('header').outerHeight()
  });

});