(function($) {
    "use strict";
    $('.form--control').on('click', function() {
        $(this).children('.sSelect').toggleClass('down  up');
    });
    $('.post_carousel').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        dots: true,
        items: 1,
        autoplayHoverPause: true,
        autoplaySpeed: 1000,
        nav: false,
        dotsSpeed: 1000,
        smartSpeed: 700,
    });
    $('.post_carousel2').owlCarousel({
        loop: true,
        margin: 0,
        autoplay: true,
        dots: true,
        items: 1,
        autoplayHoverPause: true,
        autoplaySpeed: 1000,
        smartSpeed: 700,
        nav: true,
        navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
        dotsSpeed: 1000
    });

    function SelectFirst(SelVal) {
        var arrSelVal = SelVal.split(",")
        if (arrSelVal.length > 1) {
            Valuetoselect = arrSelVal[0];
            document.getElementById("select1").value = Valuetoselect;
        }
    }
})(jQuery);
(function($) {
    "use strict";
        $('.loader-wrapper').fadeOut('slow');
    $(".nav-wrapper > ul > li, ul.dropdown_menu li").hover(function() {
        $(this).toggleClass("dropdwon")
    });
    $(".pixinav .search_button, .pixinav .search-close").click(function() {
        $('.search-form').toggleClass('search-open')
    });
    $('.responsive-nav .nav-icon, .responsive-nav .nav-button-close').click(function() {
        $('.nav-wrapper').toggleClass('right-canvas')
    });
    $(".responsive-nav ul.dropdown_menu ").click(function(e) {
        e.stopPropagation()
    });
    $('.responsive-nav .nav-wrapper  ul  li').click(function() {
        $(this).children('.mega_menu').slideToggle().css({
            "display": "flex"
        });
        $(this).children('ul').slideToggle()
    });
    $(".responsive-nav .nav-wrapper ul  li  a").click(function() {
        $(this).toggleClass("icon_rotated")
    });
    $('.offcanvas_btn, .canvas_cancel').on('click', function() {
        $('.single_canvas').toggleClass('open close')
    })
})(jQuery);