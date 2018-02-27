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

  stickybits('.fixedsticky', { useStickyClasses: true });
});