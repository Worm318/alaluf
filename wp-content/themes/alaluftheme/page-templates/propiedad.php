<?php
/*
 * Template Name: Propiedad
 *
 */
get_header(); ?>

	    <script type="text/javascript">
		var mapOptions;
		var map;
		var geocoder;
		var marker;
		var thePanorama;
		
		function codeAddress( sAddress) {
			//var sAddress = document.getElementById("address").value;
			geocoder.geocode( { 'address': sAddress , 'region': 'CL'}, function(results, status) { 
				if (status == google.maps.GeocoderStatus.OK) {					
					map.setCenter(results[0].geometry.location);
					 marker = new google.maps.Marker({
					 map: map,
					 position: results[0].geometry.location
					});
					
					thePanorama.setPosition( results[0].geometry.location );
				}
				else{
					console.log("No se pudo encontrar la dirección: " + status);
					
				}
				
			});
		}
		
		function initialize() {
			mapOptions = {
			  center: new google.maps.LatLng(-33.5454123,-70.6007167),
			  zoom: 15,
			  mapTypeId: google.maps.MapTypeId.ROADMAP
			};
			console.log(mapOptions);
			map = new google.maps.Map(document.getElementById("map_canvas"),
				mapOptions);
			geocoder = new google.maps.Geocoder();			
			thePanorama = map.getStreetView();
			
			codeAddress("Roman Diaz 170");
			//thePanorama.setVisible(true);
		}
		
		function loadScript() {
		  var script = document.createElement("script");
		  script.type = "text/javascript";
		  script.src = "http://maps.googleapis.com/maps/api/js?key=AIzaSyCE4meqybuEPBD3rvHc8tYpv9I00tQsCR4&sensor=true&region=CL&callback=initialize";
		  document.body.appendChild(script);
		}

	   window.onload = loadScript; 
	   
		jQuery(document).ready(function($){
			$('#gm-viewgm').click( function(){
				console.log(marker);
				console.log("google map");
			
				$("#mapa .pestana").removeClass("selected");
				$(this).addClass("selected");
				
				if( thePanorama.getVisible() ){
					thePanorama.setVisible(false);
				}
				
				map.setCenter(marker.position);
				map.setZoom(15);
				
				
			});
			
			$('#gm-viewstreet').click( function(){
				console.log(marker);
				console.log("street view");
				
				$("#mapa .pestana").removeClass("selected");
				$(this).addClass("selected");
				
				if( !thePanorama.getVisible() ){
					thePanorama.setVisible(true);
				}
				
				thePanorama.setPosition(marker.position);
			
			});
			
		});
	   
    </script>
	
	<script language="javascript" type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/galleria-1.2.9.min.js"></script>
	<script>
	jQuery(document).ready(function($){
		Galleria.loadTheme('<?php bloginfo('template_url'); ?>/js/galleriatheme/galleria.alaluf.js');
		Galleria.run('#slider-spot',{
			autoplay: 5000,
			imageCrop: 'width',			
			_thumbnails: true,
			_toggleInfo: true,
			_bgcolor: 'white'
		});
	});
	</script>
	
<?php get_sidebar(); ?>

<div id="ficha-propiedad">
	<table id="info-propiedad">
		<tr>
		<td id="slider-spot">
			<img src="<?php bloginfo('template_url');?>/images/casa_ph/1.jpg" />
			<img src="<?php bloginfo('template_url');?>/images/casa_ph/2.jpg" />
			<img src="<?php bloginfo('template_url');?>/images/casa_ph/3.jpg" />
		</td>
		<td id="info-basica">
			<h1>Santo Domingo / Mac-Iver / Bellas Artes</h1>

			<span id="operacion"><img src="<?php bloginfo('template_directory'); ?>/images/icons/home.png" alt="" /> Departamento en Arriendo</span><br/>
			<span id="interesados"><img src="<?php bloginfo('template_directory'); ?>/images/icons/users.png" alt="" />Hay 2345 interesados</span><br/>
			<span id="fec-publicacion">Publicada el 07-08-2012</span><br/>

			<h2>Precio: $ 170.000 (CLP)</h2>
			<ul>
			<li> Habitaciones: 1 </li>
			<li> Baños: 1 </li>
			<li> Dimensiones: 22 m2 </li>
			<li> Código: p2762 </li>
			</ul>

			<p>Excelente estudio en extraordinaria ubicación, pequeña terraza, baño, cocina americana. Edificio moderno y full equipado, piscina, gimnasio, lavandería. Bajo gasto común. Estacionamiento opcional, costo adicional</p>
		
		</td>
		</tr>
		<tr>
		
		<td id="video-spot">
			<iframe width="395" height="300" src="http://www.youtube.com/embed/omLgv9lJ9jE" frameborder="0" allowfullscreen></iframe>
		</td>
		<td id="mapa">
			<span id="gm-viewgm" class="pestana selected clickable">Mapa</span><span id="gm-viewstreet" class="pestana clickable">Street View</span>
			<div id="gm-container">
				<div id="map_canvas" style="width:100%; height:100%">
					
				</div>
			</div>
		</td>
		</tr>
		</table>
	</div>
<hr >
<?php get_footer(); ?>