jQuery(document).ready(function ($) {
    //alert("hallo");
    //enable Tabs
    $('#tabbedList a').on('click', function (e) {
        e.preventDefault()
        $(this).tab('show')
    })
    //dropdown menus
    $('.dropdown-submenu a').on("click", function (e) {
        $(this).next('ul').toggle();
        e.stopPropagation();
        e.preventDefault();
    });
    
    stickybits('.fixedsticky', {useStickyClasses: true});
    
    // sticky Sidebar
    var stickySideBar = $('#infoblock').offset().top;
    var stickyNavBar = $('#top-nav').offset().top;

    var stickySide = function () {
        var scrollTop = $(window).scrollTop();
    
        if (scrollTop > stickySideBar) {
            $('#infoblock').addClass('sticky');
        } else {
            $('#infoblock').removeClass('sticky');
        }
    };
    var stickyNav = function () {
        var scrollTop = $(window).scrollTop();
    
        if (scrollTop > stickyNavBar) {
            $('#top-nav').addClass('sticky');
        } else {
            $('#top-nav').removeClass('sticky');
        }
        if (scrollTop > stickySideBar) {
            $('#infoblock').addClass('sticky');
        } else {
            $('#infoblock').removeClass('sticky');
        }
    };
    //stickyNav();
    //$(window).scroll(stickyNav);
    
    // Format attr
//    $(".dropdown-item").filter(function() {
//    return parseInt($(this).attr("tabindex")) > -1;
//}).css('border','1px solid orange');
});