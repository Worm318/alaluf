jQuery(document).ready(function($){
	$(".plegado").click( function(){		
		$(this).next(".plegable").toggleClass("hidden");
	});

	
});