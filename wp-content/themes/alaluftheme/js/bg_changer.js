jQuery(document).ready(function($){
	
		
		function changer() {

			$("#fondos img").first().appendTo('#fondos').fadeOut(5000);
			$("#fondos img").first().fadeIn(5000);
			
			
			
			setTimeout(changer, 7000);
		}
	changer();
});