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
	
	jQuery('.menu_mob_icon').click(function() {
		jQuery('#site-navigation').addClass('show_menu');
	});
	jQuery('i.close').click(function() {
		jQuery('#site-navigation').removeClass('show_menu');
	});

	jQuery(".tablepress").each(function() {
		jQuery(this).wrap("<div class='tablepress_wrap'></div>");
	});
	
	
});