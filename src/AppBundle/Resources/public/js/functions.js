$(document).ready(function(){

	/*slider intro 100% height responsive*/
	$introHeight = $(window).height();
	$('.owl-main-slider .item').css('height',$introHeight);

	//MAIN SLIDER
	var owlMainSlider = $(".owl-main-slider");
    owlMainSlider.owlCarousel({
        singleItem: true,
        pagination: false,
        slideSpeed: 1000,
        rewindSpeed: 1000,
        autoPlay: true,
        transitionStyle : "fade"
    });

    //CABAÑAS SLIDER
	var owlCabanasOne = $(".owl-cabanas-1");
    owlCabanasOne.owlCarousel({
        singleItem: true,
        slideSpeed: 1000,
        rewindSpeed: 1000
    });

	$(".controls-1 .icon-arrow-left").click(function(){owlCabanasOne.trigger('owl.prev');});
	$(".controls-1 .icon-arrow-right").click(function(){owlCabanasOne.trigger('owl.next');});

    var owlCabanasTwo = $(".owl-cabanas-2");
    owlCabanasTwo.owlCarousel({
        singleItem: true,
        slideSpeed: 1000,
        rewindSpeed: 1000
    });

    $(".controls-2 .icon-arrow-left").click(function(){owlCabanasTwo.trigger('owl.prev');});
    $(".controls-2 .icon-arrow-right").click(function(){owlCabanasTwo.trigger('owl.next');});

    var owlCabanasThree = $(".owl-cabanas-3");
    owlCabanasThree.owlCarousel({
        singleItem: true,
        slideSpeed: 1000,
        rewindSpeed: 1000
    });

    $(".controls-3 .icon-arrow-left").click(function(){owlCabanasThree.trigger('owl.prev');});
    $(".controls-3 .icon-arrow-right").click(function(){owlCabanasThree.trigger('owl.next');});

	/*SCROLL*/
    smoothScroll.init({
        offset: 45,
        easing: 'easeOutCubic',
        speed: 2000
    });

    /*HAMBURGER*/
    $('.hamburger').on('click', function(){
        if(!$('.hamburger').hasClass('is-active')) {
            $(this).addClass('is-active');
            $('nav').addClass('active');
            $('body').addClass('noScroll');
        } else {
            $(this).removeClass('is-active');
            $('nav').removeClass('active');
            $('body').removeClass('noScroll');
        }
    });

    /*MOBILE NAV*/
    $('body').on('click', 'nav.active ul li a', function(){
        $('nav').removeClass('active');
        $('.hamburger').removeClass('is-active');
        $('body').removeClass('noScroll');
    });

    /*SOLAPAS DEPARTAMENTOS*/
    $('.gal-2, .gal-3').hide();
    $('.apartamentos-nav li a').on('click', function(){
        if($(this).hasClass('one')) {
            $('.gal-2, .gal-3').removeClass('on');
            setTimeout(function(){
                $('.gal-2, .gal-3').hide();
            }, 300);
            setTimeout(function(){
                $('.gal-1').show();
                setTimeout(function(){
                    $('.gal-1').addClass('on');
                }, 100);
            }, 300);
            $('.apartamentos-nav li a').removeClass('active');
            $('.apartamentos-nav li a.one').addClass('active');
        } else if ($(this).hasClass('two')) {
           $('.gal-1, .gal-3').removeClass('on');
            setTimeout(function(){
                $('.gal-1, .gal-3').hide();
            }, 300);
            setTimeout(function(){
                $('.gal-2').show();
                setTimeout(function(){
                    $('.gal-2').addClass('on');
                }, 100);
            }, 300);
            $('.apartamentos-nav li a').removeClass('active');
            $('.apartamentos-nav li a.two').addClass('active');
        } else if ($(this).hasClass('three')) {
            $('.gal-1, .gal-2').removeClass('on');
            setTimeout(function(){
                $('.gal-1, .gal-2').hide();
            }, 300);
            setTimeout(function(){
                $('.gal-3').show();
                setTimeout(function(){
                    $('.gal-3').addClass('on');
                }, 100);
            }, 300);
            $('.apartamentos-nav li a').removeClass('active');
            $('.apartamentos-nav li a.three').addClass('active');
        } 
    });

});

$(window).scroll(function(){
    var scroll = $(window).scrollTop();

    if(scroll >= 200) {
        $('header').addClass('sticky');
        $('.social-nav, .contact-info').hide();
    } else {
        $('header').removeClass('sticky');
        $('.social-nav, .contact-info').show();
    }
});