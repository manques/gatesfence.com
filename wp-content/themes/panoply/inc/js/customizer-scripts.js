jQuery(document).ready(function($) {
    "use strict";

    //FontAwesome Icon Control JS
    jQuery('body').on('click', '.panoply-icon-list li', function(){
        var icon_class = jQuery(this).find('i').attr('class');
        jQuery(this).addClass('icon-active').siblings().removeClass('icon-active');
        jQuery(this).parent('.panoply-icon-list').prev('.panoply-selected-icon').children('i').attr('class','').addClass(icon_class);
        jQuery(this).parent('.panoply-icon-list').next('input').val(icon_class).trigger('change');
    });

    jQuery('body').on('click', '.panoply-selected-icon', function(){
        jQuery(this).next().slideToggle();
    });

});