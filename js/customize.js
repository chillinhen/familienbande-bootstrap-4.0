jQuery(document).ready(function ($) {
            /*** responsive***/

        $(window).bind("resize", resizeWindow);
        function resizeWindow(e) {
            var newWindowWidth = $(window).width();

            // If width width is below 600px, switch to the mobile stylesheet
            if (newWindowWidth < 576) {
                //alert('hallo');
                $('#top-nav').removeClass('fixedsticky');
            }

        }
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
    

//jQuery(document).on('click', '.mega-dropdown', function(e) {
//  e.stopPropagation()
//})
});