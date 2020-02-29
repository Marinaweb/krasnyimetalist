jQuery(document).ready(function(){


    //Add class when scroll
    jQuery(window).scroll(function() {
        if(jQuery(this).scrollTop() > 50) {
            jQuery('#header').addClass('scrolled');
        } else {
            jQuery('#header').removeClass('scrolled');
        }
    });

    jQuery("html:lang(en-us) .breadcrumbs li.home a.home span").text("Home");
    jQuery("html:lang(en-us) .breadcrumbs li.home a.home").attr("href", "/en/main/");

});