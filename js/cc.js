
var $ = jQuery;

jQuery(function(){

	// lazyload images
	if (navigator.platform != "iPad") {
	  jQuery("article img").lazyload({
	    effect:"fadeIn",
	    placeholder: cc.template_url + "/images/lazyload_grey.gif"
	  });
	}
	
});


/*
* Functions
*/

