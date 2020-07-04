
(function($) {
    "use strict";

    // Add active state to sidbar nav links
    var path = window.location.href; // because the 'href' property of the DOM element is the absolute path
        $("#layoutSidenav_nav .sb-sidenav a.nav-link").each(function() {
            if (this.href === path) {
                $(this).addClass("active");
            }
        });

    // Toggle the side navigation
    $("#sidebarToggle").on("click", function(e) {
        e.preventDefault();
        $("body").toggleClass("sb-sidenav-toggled");
    });
})(jQuery);

//Input Tag Hide Show in Post
$('#video_or_post').change(function(){
    if ($('#video_or_post').val() == 1) 
    {
        $('#video_link').show();
        $('#image').hide();
    }
    else {
        $('#image').show();
        $('#video_link').hide();
    }
})

$(document).ready(function(){
    $('#video_link').show();
    $('#image').hide();
})

