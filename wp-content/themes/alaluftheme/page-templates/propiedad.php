<?php
/*
 * Template Name: Propiedad
 *
 */
get_header(); ?>

<div id="ficha-propiedad">
	<div id="info-propiedad">
		<table id="info-basica">
		<tr>
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
		
	<td id="slider-spot">
		
	</td>
	</tr>
	<tr><td colspan="2">
	<div id="gm-wrapper">
		Mapa de google maps
	</div>
	</td>
	</tr>
	</table>
	</div>
	<div id="ficha-side">
		<h1>Comparte</h1>
		<div id="share">
		Botones varios
		</div>
		<h1>¿Tienes preguntas?</h1>
		<div id="contacto">
		<div class="dato"><img src="<?php bloginfo('template_directory'); ?>/images/icons/user.png" alt="" />Tatiana Torres</div>
		
		<div class="dato"><img src="<?php bloginfo('template_directory'); ?>/images/icons/phone.png" alt="" />(56 2) 2 481 0181</div>
		
		<form id="formulario" action="mailto:contacto@reframe.cl">
			<input name="formnombre"	placeholder="Nombre" required />
			<input name="formemail"	placeholder="Email" required />
			
			<input name="formphone"	placeholder="Teléfono"/>
			
			<textarea></textarea>
			
			<input type="submit" value="Contactar">
			
		</form>
		
		</div>
		<h1>Propiedades cercanas</h1>
		
	</div>
	<hr>

</div>





<?php get_footer(); ?>

<?php var_dump($_GET); ?>