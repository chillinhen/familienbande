var stickyNav = function () {
        var scrollTop = $(window).scrollTop();
    
        if (scrollTop > stickyNavBar) {
            $('#top-nav').addClass('sticky');
        } else {
            $('#top-nav').removeClass('sticky');
        }
    };