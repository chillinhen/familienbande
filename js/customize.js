jQuery(document).ready(function ($) {
    //alert("hallo");
    //enable Tabs
    $('#tabbedList a').on('click', function (e) {
        e.preventDefault()
        $(this).tab('show')
    })
    // sticky nav
    var stickyNavTop = $('#top-nav').offset().top;

        var stickyNav = function () {
            var scrollTop = $(window).scrollTop();

            if (scrollTop > stickyNavTop) {
                $('#top-nav').addClass('sticky');
            } else {
                $('#top-nav').removeClass('sticky');
            }
        };

        stickyNav();
        $(window).scroll(stickyNav);
});