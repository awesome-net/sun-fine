jQuery(function(){
    jQuery("a#scroll_top[href^=#]").click(function(){
        var speed = 1200;
        var href = $(this).attr("href");
        var target = $(href == "#" || href == ""?"html" : href);
        var position = target.offset().top;

        jQuery("body, html").animate({scrollTop:position}, speed, "swing");
        return false;
    });
});
