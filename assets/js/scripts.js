$(document).ready(function() {

  $('a[href*="#"]').smoothScroll({
    offset: -$('header').outerHeight(),
    preventDefault: true
  });

});