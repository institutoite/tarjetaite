$(document).ready(function() {
    $(".logo").each(function(index) {
        $(this).delay(300 * index).animate({ opacity: 1 }, 800);
    });
    $(window).scroll(function() {
        var windowTop = $(window).scrollTop();
        var windowBottom = windowTop + $(window).height();
        var logoTop = $("#logo").offset().top;
        var logoBottom = logoTop + $("#logo").height();
        
        // Si el logotipo está dentro del viewport
        if ((logoBottom >= windowTop) && (logoTop <= windowBottom)) {
            $("#logo").addClass("animate-logo");
        }
    });
});