
jQuery(document).ready(function ($) {
    console.log("test");

    var image = $(".image-grid > figure");
    function squareGrid(item) {
        item.each(function () {
            var imgSize = $(this).width();
            console.log(imgSize);
            //var parent = $(this).parent('.img-container').parent('figure');
            $(this).css({'height': imgSize});
            return;
        });

    }
  squareGrid(image);


    function resizeWindow(e) {
        var newWindowWidth = $(window).width();

        // If width width is below 600px, switch to the mobile stylesheet
        if (newWindowWidth < 576) {
            $('#top-nav').removeClass('fixedsticky');
        }
        if (newWindowWidth > 376) {
           squareGrid(image);
        }

    }
    $('.carousel').carousel();
    stickybits('.fixedsticky', {useStickyClasses: true});
    $(window).bind("resize", resizeWindow);

    $('.dropdown-header').on("click", function (e) {
        $(this).next('ul').toggleClass('show');
        e.stopPropagation();
        e.preventDefault();
    });

    $('[class*="sub-cat-"] > div').each(function () {
        if ($(this).hasClass('d-flex')) {
            //console.log("Found");
            $(this).parent('div').addClass('sub-cat-large');
        }
    });
    $('.sub-cats ul li a:not([class*="carousel"])').each(function () {
        $(this).prepend('<i class="fas fa-arrow-circle-right"></i>');
    });
    
    $('#navbarSearch input#search').focus(function () {
        $(this).prev("i.btn-close").css("opacity", "1");
    });
    $("i.btn-close").click(function(){
        $('#navbarSearch').removeClass('show');
    });
    $('#top-nav .nav-item').each(function(){
        $(this).children('.nav-link.dropdown-toggle').append('<span class="triangle">▲</span>');
    });
    
    $('.nav-link.dropdown-toggle').click(function(){
        $(this).toggleClass('show');
    });
});
