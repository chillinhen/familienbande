jQuery(document).ready(function ($) {
    //alert("hallo");
    //enable Tabs
    $('#tabbedList a').on('click', function (e) {
        e.preventDefault()
        $(this).tab('show')
    })
});