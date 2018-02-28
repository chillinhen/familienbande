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
    
    // sticky Sidebar
    var stickySideBar = $('aside.sidebar').offset().top;

        var stickyNav = function () {
            var scrollTop = $(window).scrollTop();

            if (scrollTop > stickySideBar) {
                $('aside.sidebar').addClass('sticky');
            } else {
                $('aside.sidebar').removeClass('sticky');
            }
        };

        stickyNav();
        $(window).scroll(stickyNav);
});