jQuery(document).ready(function ($) {
    //alert("hallo");
    //enable Tabs
    $('#tabbedList a').on('click', function (e) {
        e.preventDefault()
        $(this).tab('show')
    })
    //dropdown menus
    $('.dropdown-submenu a').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
    // sticky nav
    var stickyNavTop = $('.bd-sidebar').offset().top;

        var stickyNav = function () {
            var scrollTop = $(window).scrollTop();

            if (scrollTop > stickyNavTop) {
                $('.bd-sidebar').addClass('sticky');
            } else {
                $('.bd-sidebar').removeClass('sticky');
            }
        };

        stickyNav();
        $(window).scroll(stickyNav);
});