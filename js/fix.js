jQuery(function($) {
	        $(window).scroll(function(){
	            if($(this).scrollTop()>0){
	                $('.navbar').addClass('fixed');
	            }
	            else if ($(this).scrollTop()<0){
	                $('.navbar').removeClass('fixed');
	            }
	        });
	    });
