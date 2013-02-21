jQuery(document).ready(function($){
	
		var $container = $('#isotope-container'),
        filters = {};
	
		$container.isotope({
			// options
			sortBy : 'precio',
			getSortData: {
				precio : function	( $elem ){
					console.log($elem.attr('data-precio'));
					return parseInt($elem.attr('data-precio'));
				}
			},
			itemSelector : '.propiedad'
		});
	
		
		function remove_filter(){
			var data = $(this).parent().attr("data-opcion");
			
			if($(this).parent().is(".filtro") ){
				

					$('.tipo-checkbox[value="'+$(this).parent().attr("data-filter-value")+'"]').removeAttr('checked');
				
			}else{
				console.log("no es filtro");
				
				switch(data){
					case "bano":
					case "hab":
					case "price":
					case "area":
						$('#'+data+'-checkbox').removeAttr('checked');
						break;
				}
				$(this).parent().remove();
				
			}
			
			$(this).parent().remove();
				filter();
		}
		
	
		function filter(){
			function obtainValue( slider, value ){
				return parseInt(slider.slider("value").split(';')[value]);
			}
			
			console.log("Operacion");
			console.log($(".selected").attr("data-filter-value"));
			
			console.log("Habitaciones");
			console.log( obtainValue( $("#SliderHab") , 0 ));
			console.log( obtainValue( $("#SliderHab") , 1 ));
			
			console.log("Baños");
			console.log( obtainValue( $("#SliderBano") , 0 ));
			console.log( obtainValue( $("#SliderBano") , 1 ));
			
			console.log("Precios");
			console.log( obtainValue( $("#SliderPrice") , 0 ));
			console.log( obtainValue( $("#SliderPrice") , 1 ));
			
			console.log("Area");
			console.log( obtainValue( $("#SliderArea") , 0 ));
			console.log( obtainValue( $("#SliderArea") , 1 ));
			
			filtros = document.getElementsByClassName("filtro");
			filtros_length = filtros.length;
				
			console.log(filtros);
			
			var selector = function(){
				var elem = $(this);
				var found = false;
			
				if (  $(".selected").attr("data-filter-value") != undefined  ){
				if ( !elem.hasClass( $(".selected").attr("data-filter-value")) ) return false;
				}
			
				if( $("#bano-checkbox").attr("checked")){
				if( obtainValue( $("#SliderBano"), 0) > parseInt(elem.attr("banos")) ) return false;
				if( obtainValue( $("#SliderBano"), 1) < 5 )
				if( obtainValue( $("#SliderBano"), 1) < parseInt(elem.attr("banos")) ) return false;
				}
				
				if( $("#hab-checkbox").attr("checked")){
				if( obtainValue( $("#SliderHab"), 0) > parseInt(elem.attr("habitaciones")) ) return false;
				if( obtainValue( $("#SliderHab"), 1) < 5 )
				if( obtainValue( $("#SliderHab"), 1) < parseInt(elem.attr("habitaciones")) ) return false;
				}
				
				if( $("#price-checkbox").attr("checked")){
				if( obtainValue( $("#SliderPrice"), 0) > parseInt(elem.attr("data-precio")) ) return false;
				if( obtainValue( $("#SliderPrice"), 1) < parseInt(elem.attr("data-precio")) ) return false;
				}
				
				if( $("#area-checkbox").attr("checked")){
				if( obtainValue( $("#SliderArea"), 0) > parseInt(elem.attr("data-area")) ) return false;
				if( obtainValue( $("#SliderArea"), 1) < 1000 )
				if( obtainValue( $("#SliderArea"), 1) < parseInt(elem.attr("data-area")) ) return false;
				}
				
				if( filtros_length > 0){
					found = false;
					for (var i = 0; i < filtros_length; i++) {
						if( elem.hasClass( filtros[i].getAttribute("data-filter-value") ) ){
							found = true;
							break;
						}
						
					}
					if ( !found) return false;
				}
				
				return true;
			}
			
			$container.isotope({
					filter: selector
			});
			
			console.log("fin de filtro");
		}
  
		//Filtro de baño
		function banoschange( value ){
				filter();
		}
		
		jQuery("#SliderBano").slider({
		  from: 1, to: 5, step: 1, 
		  scale: ['1','2','3','4','5 o más'],
		  limits:false,
		  round: 0, format: { format: '##' }, 
		  dimension: ' baños',
		  callback: banoschange
		});
		
		$("#bano-checkbox").change( function(){
			if ($(this).attr("checked") ) {
				
				$("<div class=\"fake-filtro\" data-opcion=\"bano\">Baños <button class=\"rem-filtro\">X</button></div>").appendTo("#filtros-actuales");
				
				$(".rem-filtro").click(remove_filter);
				
				filter();
				
			}else{
				$('.fake-filtro[data-opcion="bano"]').remove();
			
				filter();
			}
		});
		  
		//Filtro de habitacion
		function habchange( value ){
				
			filter();
		}
		
		jQuery("#SliderHab").slider({
		  from: 1, to: 5, step: 1, 
		  scale: ['1','2','3','4','5 o más'],
		  limits:false,
		  round: 0, format: { format: '##' }, 
		  dimension: ' habitaciones',
		  callback: banoschange
		});
		
		$("#hab-checkbox").change( function(){
			if ($(this).attr("checked") ) {
				
				$("<div class=\"fake-filtro\" data-opcion=\"hab\">Habitaciones <button class=\"rem-filtro\">X</button></div>").appendTo("#filtros-actuales");
				
				$(".rem-filtro").click(remove_filter);
				
				filter();
				
			}else{
				$('.fake-filtro[data-opcion="hab"]').remove();
			
				filter();
			}
		});
		  
		 //Filtro de precio
		function pricechange( value ){
			filter();
		}
		
		jQuery("#SliderPrice").slider({
		  from: 1000, to: 100000, step: 1000, 
		  scale: ['1000','50000','10000'],
		  limits:false,
		  round: 0, format: { format: '##' }, 
		  dimension: ' $',
		  callback: pricechange
		});
		
		$("#price-checkbox").change( function(){
			if ($(this).attr("checked") ) {
				
				$("<div class=\"fake-filtro\" data-opcion=\"price\">Precio <button class=\"rem-filtro\">X</button></div>").appendTo("#filtros-actuales");
				
				$(".rem-filtro").click(remove_filter);
				
				filter();
				
			}else{
				$('.fake-filtro[data-opcion="price"]').remove();
			
				filter();
			}
		});
		
		//Filtro de area
		function pricechange( value ){
			filter();
		}
		
		jQuery("#SliderArea").slider({
		  from: 10, to: 1000, step: 10, 
		  scale: ['10','500',' 1000+'],
		  limits: false,
		  round: 0, format: { format: '##' }, 
		  dimension: ' m2',
		  callback: pricechange
		});
		
		$("#area-checkbox").change( function(){
			if ($(this).attr("checked") ) {
				
				$("<div class=\"fake-filtro\" data-opcion=\"area\">Area <button class=\"rem-filtro\">X</button></div>").appendTo("#filtros-actuales");
				
				$(".rem-filtro").click(remove_filter);
				
				filter();
				
			}else{
				$('.fake-filtro[data-opcion="area"]').remove();
			
				filter();
			}
		});
		
		
  
		//Filtro por modalidad
		$("#operacion button").click(function(){
			$("#venta-button").removeClass("selected");
			$("#arriendo-button").removeClass("selected");
			$(this).toggleClass("selected");
			if( $(".selected").length == 0 ) $("#any-button").addClass("selected");
			$("#any-button").removeClass("selected");
			filter();
		});
	
		//Filtro por tipo
		$(".tipo-checkbox").change( function(){

			//window.alert( $("#tipo :checked").length );
			console.log( $(this).val() + ":");
			
			if ($(this).attr("checked") ) {
				// checked
				if( $(".filtro").length > 8 ){
					window.alert("No puedes agregar más filtros");
					return;
				}
				
				$("<div class=\"filtro\" data-filter-value="+$(this).val()+
					" data-filter-group=\"tipo\">"+$(this).attr("name")+"<button class=\"rem-filtro\">X</button></div>").appendTo("#filtros-actuales");
				
				$(".rem-filtro").click(remove_filter);
			}else{
				
			
				$(".filtro[data-filter-value="+$(this).val()+"]").remove();
			
			}
			
			filter();
		});
		
		//Filtro de comunas
		$("#comuna").change(function(){
			
			var exists = false, newvalue = $("#comuna").val().replace(' ','').toLowerCase();
			var letters = /^[a-zA-Z]+$/;
			if( $(".filtro").length > 8 ){
				window.alert("No puedes agregar más filtros");
				return;
			}
			
			if( !newvalue.match(letters) ){
				return;
			}
			
			$(".filtro").each(function(){
				if( $(this).attr("data-filter-value") == newvalue ) {
					exists = true;
					return;
				}
			});
			if(!exists){
				$("<div class=\"filtro\" data-filter-value="+newvalue+
				" data-filter-group=\"comuna\">"+$("#comuna").val()+"<button class=\"rem-filtro\">X</button></div>").appendTo("#filtros-actuales");
			}
			
			$(".rem-filtro").click(remove_filter);
			$("#any-comuna").removeClass("filtro");

			filter();
			
			$(this).val("");
		});
		
		//Remover propiedad
		$(".rem-propiedad").click( function() {
			$container.isotope(	'remove', $(this).parent() );
		});
		
		
		//Función de reseteo
		function reset(){
			$(".selected").removeClass("selected");
			
			$("#SliderBano").slider("value", 1, 5);
			$("#SliderHab").slider("value", 1, 5);
			$("#SliderPrice").slider("value", 1000, 100000);
			$("#SliderArea").slider("value", 1, 1000);
			
			$(":checked").removeAttr("checked");
			
			$("#comuna").val("");
			
			$(".filtro,.fake-filtro").remove();
			
			filter();
		}
		
		$("#reset-button").click( reset );
		
		reset();

	});