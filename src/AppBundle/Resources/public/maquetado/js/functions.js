$(document).ready(function() {

  // Hamburger
  $('.hamburger').on('click', function(){
    $(this).find('i').toggleClass('fa-times');
    $('nav').toggleClass('--open');
    $('header').toggleClass('--open-nav');
    $('body').toggleClass('--no-scroll');
  });

  $('nav a').on('click', function(){
    $('nav').removeClass('--open');
    $('header').removeClass('--open-nav');
    $('body').removeClass('--no-scroll');
  });

  // Intro carousel
  var introOwl = $('.intro-carousel');
  introOwl.owlCarousel({
    items: 1,
    autoplay: true,
    autoplayTimeout: 5000,
    animateOut: 'fadeOut',
    stagePadding: 0,
    mouseDrag: false,
    touchDrag: false,
    loop: true,
    dots: false,
    nav: false
  });

  // Reviews carousel
  var reviewOwl = $('.review-carousel');
  reviewOwl.owlCarousel({
    items: 1,
    navSpeed: 500,
    stagePadding: 0,
    loop: true,
    dots: false,
    nav: true,
    navText: ["<i class='fas fa-chevron-left'></i>", "<i class='fas fa-chevron-right'></i>"]
  });

  // Lightbox  general
  $("#lightgallery").lightGallery(); 

  // Smooth scroll for the menu and links with .scrollto classes
  $('#footer a, .main-nav a, #mobile-nav a, .scrollto').on('click', function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        var top_space = 100;

        if ($('#header').length) {
          top_space = $('#header').outerHeight();

          if( ! $('#header').hasClass('header-fixed') ) {
            top_space = top_space - 100;
          }
        }

        $('html, body').animate({
          scrollTop: target.offset().top - top_space
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.nav-menu').length) {
          $('.nav-menu .menu-active').removeClass('menu-active');
          $(this).closest('li').addClass('menu-active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').fadeOut();
        }
        return false;
      }
    }
  });

  ///// ANIMATIONS /////

  // intro text animation

  $('.intro__item.one .intro__text span:first-child').addClass('fadeInDown animated');
  $('.intro__item.one .intro__text span:last-child').addClass('fadeInUp animated');
  introOwl.on('changed.owl.carousel', function(event) {
    var item = event.item.index - 2;
    $('.intro__text span').removeClass();
    $('.owl-item').not('.cloned').eq(item).find('.intro__item.one .intro__text span:first-child').addClass('fadeInDown animated');
    $('.owl-item').not('.cloned').eq(item).find('.intro__item.one .intro__text span:last-child').addClass('fadeInUp animated');
    $('.owl-item').not('.cloned').eq(item).find('.intro__item.two .intro__text span:first-child').addClass('fadeInRight animated');
    $('.owl-item').not('.cloned').eq(item).find('.intro__item.two .intro__text span:last-child').addClass('fadeInLeft animated');
  });

});

$(window).on("scroll", function() {
  if ($(this).scrollTop() > 1) {
    $("header").addClass("--scrolled");
  } else {
    $("header").removeClass("--scrolled");
  }
});