<?php
/*
 * Template Name: Buscador de Propiedades
 *
 */
get_header(); ?>

<?php get_sidebar('search'); ?>
	
			<div id="isotope-container">
				<div class="propiedad venta casa laflorida" habitaciones=1 banos=2 data-precio=10000 data-area="1000">
					<a href="propiedad?id=1">
					<img src="<?php bloginfo('template_url'); ?>/images/buscador_ph/casa.png" />
					<div class="info">Casa en La Florida</div>
					</a>
					<button class="rem-propiedad">X</button>
				</div>

				<div class="propiedad arriendo casa laflorida" habitaciones=1 banos=1 data-precio=20000 data-area="500">
					<a href="propiedad?id=1">
					<img src="<?php bloginfo('template_url'); ?>/images/buscador_ph/casa.png" />
					<div class="info">Casa en La Florida</div>
					</a>
					<button class="rem-propiedad">X</button>
				</div>

				<div class="propiedad venta casa providencia"  habitaciones=5 banos=4 data-precio=5000 data-area="2000">
					<a href="propiedad?id=1">
					<img src="<?php bloginfo('template_url'); ?>/images/buscador_ph/casa.png" />
					<div class="info">Casa en Providencia</div>
					</a>
					<button class="rem-propiedad">X</button>
				</div>

				<div class="propiedad venta oficina providencia" habitaciones=2 banos=1 data-precio=8000 data-area="3000">
					<a href="propiedad?id=1">
					<img src="<?php bloginfo('template_url'); ?>/images/buscador_ph/casa.png" />
					<div class="info">Oficina en Providencia</div>
					</a>
					<button class="rem-propiedad">X</button>
				</div>

				<div class="propiedad arriendo oficina santiago"  habitaciones=3 banos=3 data-precio=2000 data-area="20">
					<a href="propiedad?id=1">
					<img src="<?php bloginfo('template_url'); ?>/images/buscador_ph/casa.png" />
					<div class="info">Oficina en Santiago</div>
					</a>
					<button class="rem-propiedad">X</button>
				</div>

				<div class="propiedad venta sitio maipu" habitaciones=2 banos=2 data-precio=30000 data-area="300">
					<a href="propiedad?id=1">
					<img src="<?php bloginfo('template_url'); ?>/images/buscador_ph/casa.png" />
					<div class="info">Sitio en Maipu</div>
					</a>
					<button class="rem-propiedad">X</button>
				</div>

				<div class="propiedad arriendo casa maipu" habitaciones=4 banos=4 data-precio=9001 data-area="100">
					<a href="propiedad?id=1">
					<img src="<?php bloginfo('template_url'); ?>/images/buscador_ph/casa.png" />
					<div class="info">Casa en Maipu</div>
					</a>
					<button class="rem-propiedad">X</button>
				</div>

				<div class="propiedad venta casa maipu" banos=5 habitaciones=5 data-precio=31415 data-area="274">
					<a href="propiedad?id=1">
					<img src="<?php bloginfo('template_url'); ?>/images/buscador_ph/casa.png" />
					<div class="info">Casa en Maipu</div>
					</a>
					<button class="rem-propiedad">X</button>
				</div>
			</div>
			
<?php get_footer(); ?>