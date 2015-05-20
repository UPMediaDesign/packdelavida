jQuery(function(){
    jQuery('.green-nav').data('size','big');
});

jQuery(window).scroll(function(){
    if(jQuery(document).scrollTop() > 500)
    {
        if(jQuery('.green-nav').data('size') == 'big')
        {
            jQuery('.green-nav').data('size','small');
            jQuery('.green-nav').addClass('navbar-fixed-top');
			jQuery('.green-nav').animate({top: '60px'}, 300)
			
        }
    }
    else
    {
        if(jQuery('.green-nav').data('size') == 'small')
        {
            jQuery('.green-nav').data('size','big');
            jQuery('.green-nav').removeClass('navbar-fixed-top');
			jQuery('.green-nav').animate({top: '0'}, 300)
			
        }  
    }
});

jQuery(document).ready(function($) {
	$('.prevenir img').hover(function() {
		$(this).animate({marginTop: '-3px', marginBottom: '3px'}, 300)
	}, function() {
		$(this).animate({marginTop: '0px', marginBottom: '0px'}, 300)	
	});
});


jQuery(document).ready(function($) {
	$('.reasons img').hover(function() {
		$(this).animate({marginTop: '-3px', marginBottom: '3px'}, 300)
	}, function() {
		$(this).animate({marginTop: '0px', marginBottom: '0px'}, 300)	
	});
});

jQuery(document).ready(function($) {
	$('.clinic img').hover(function() {
		$(this).animate({marginTop: '-2px', marginBottom: '2px'}, 300)
	}, function() {
		$(this).animate({marginTop: '0px', marginBottom: '0px'}, 300)	
	});
});

jQuery(document).ready(function($) {
	$('.clicnics img').hover(function() {
		$(this).animate({opacity: .7}, 300)
	}, function() {
		$(this).animate({opacity: 1}, 300)	
	});
});