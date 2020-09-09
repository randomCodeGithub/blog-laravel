"use strict";
$('.scrollTop').fadeOut();
$(window).scroll(function () {
  if ($(this).scrollTop() > 800) {
    $(".scrollTop").fadeIn();
  } else {
    $(".scrollTop").fadeOut();
  }
});

$(".scrollTop").click(function () {
  $("html, body").animate({ scrollTop: 0 }, 800);
  return false;
});
