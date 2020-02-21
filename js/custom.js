jQuery(document).ready(function(){


    //Add class when scroll
    jQuery(window).scroll(function() {
        if(jQuery(this).scrollTop() > 100) {
            jQuery('#header').addClass('scrolled');
        } else {
            jQuery('#header').removeClass('scrolled');
        }
    });



});