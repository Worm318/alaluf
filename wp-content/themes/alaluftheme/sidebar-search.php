

<div id="side-menu">
		
		<div id="busqueda">
			<h3 class="">Busqueda </h3>
			<div class="">
			
			<div id="operacion" class="opcion">
			<div class="etiqueta">Modalidad</div>
				<span id="buttons">
				<button id="venta-button" data-filter-value="venta" type="button">Venta</button>
				<button id="arriendo-button" data-filter-value="arriendo" type="button">Arriendo</button>
				</span>
			</div>

			<div class="opcion">
			<div class="etiqueta">Baños</div>
			<div class="layout">
			
				<div class="layout-slider">
					<input id="SliderBano" type="slider" name="bano" value="1;5" />
				</div>
				<div class="layout-checkbox">
					Activar<input id="bano-checkbox" type="checkbox" value="bano">
				</div>
			</div>
			</div>
			
			<div class="opcion">
			<div class="etiqueta">Habitaciones</div>
			<div class="layout">
			
				<div class="layout-slider">
				  <input id="SliderHab" type="slider" name="habitacion" value="1;5" />
				</div>
				<div class="layout-checkbox">
				Activar<input id="hab-checkbox" type="checkbox" value="habitacion">
				</div>
			</div>
			</div>
			
			<div class="opcion">
			<div class="etiqueta">Precio</div>
			<div class="layout">
			
				<div class="layout-slider">
				  <input id="SliderPrice" type="slider" name="habitacion" value="1000;100000" />
				</div>
				<div class="layout-checkbox">
				Activar<input id="price-checkbox" type="checkbox" value="precio">
				</div>
			</div>
			</div>
			
			<div class="opcion">
			<div class="etiqueta">Area</div>
			<div class="layout">
			
				<div class="layout-slider">
				  <input id="SliderArea" type="slider" name="habitacion" value="1;1000" />
				</div>
				<div class="layout-checkbox">
				Activar<input id="area-checkbox" type="checkbox" value="area">
				</div>
			</div>
			</div>
			
			
			<div class="opcion">
			<div id="tipo-et" class="etiqueta">Tipo de Propiedad</div>
			<div id="tipo">
				<input class="tipo-checkbox" type="checkbox" name="Casa" value="casa">Casa</input><br/>
				<input class="tipo-checkbox" type="checkbox" name="Oficina" value="oficina">Oficina</input><br/>
				<input class="tipo-checkbox" type="checkbox" name="Departamento" value="departamento">Departamento</input><br/>
				<input class="tipo-checkbox" type="checkbox" name="Local" value="local">Local</input><br/>
				<input class="tipo-checkbox" type="checkbox" name="Casa comercial" value="casacomercial">Casa comercial</input><br/>
				<input class="tipo-checkbox" type="checkbox" name="Terreno para proyecto" value="terrenoproyecto">Terrenos para proyectos</input><br/>
				<input class="tipo-checkbox" type="checkbox" name="Terreno Industrial" value="terrenoindustrial">Terrenos Industriales</input><br/>
				<input class="tipo-checkbox" type="checkbox" name="Galpon" value="galpon">Galpon</input><br/>
				<input class="tipo-checkbox" type="checkbox" name="Propiedades en renta" value="propiedadrenta">Propiedades en Renta</input><br/>
				<input class="tipo-checkbox" type="checkbox" name="Sitio" value="sitio">Sitio</input><br/>
				<input class="tipo-checkbox" type="checkbox" name="Parcelas y Fundos" value="parcela">Parcelas y Fundos</input><br/>
			</div>
		</div>
		
		
		<div class="opcion">
		<div class="etiqueta">Comuna</div>
		<input list="comunas" id="comuna" type="text" placeholder="La Florida, Maipu, Santiago, ">
			<datalist id="comunas">
			<option value="Alhué" /> <option value="Batuco" /> <option value="Buin" /> <option value="Cabildo" /> <option value="Calera" /> <option value="Calera de Tango" /> <option value="Cerrillos" /> <option value="Cerro Navia" /> <option value="Chicureo" /> <option value="Colina" /> <option value="Conchalí" /> <option value="Curacaví" /> <option value="El Bosque" /> <option value="El Monte" /> <option value="Estación Central" /> <option value="Farellones" /> <option value="Huechuraba" /> <option value="Independencia" /> <option value="Isla de Maipo" /> <option value="La Cisterna" /> <option value="La Florida" /> <option value="La Granja" /> <option value="Laguna de Aculeo" /> <option value="Lampa" /> <option value="La Pintana" /> <option value="La Reina" /> <option value="Las Condes" /> <option value="Lo Barnechea" /> <option value="Lo Espejo" /> <option value="Lo Prado" /> <option value="Macul" /> <option value="Maipú" /> <option value="María Pinto" /> <option value="Melipilla" /> <option value="Ñuñoa" /> <option value="Padre Hurtado" /> <option value="Paine" /> <option value="Pedro Aguirre Cerda" /> <option value="Peñaflor" /> <option value="Peñalolén" /> <option value="Pirque" /> <option value="Providencia" /> <option value="Pudahuel" /> <option value="Puente Alto" /> <option value="Quilicura" /> <option value="Quinta Normal" /> <option value="Recoleta" /> <option value="Renca" /> <option value="San Bernardo" /> <option value="San Joaquín" /> <option value="San José de Maipo" /> <option value="San Miguel" /> <option value="San Pedro" /> <option value="San Ramón" /> <option value="Santiago" /> <option value="Talagante" /> <option value="Tiltil" /> <option value="Vitacura" /> <option value="Algarrobo" /> <option value="Antofagasta" /> <option value="Aysén" /> <option value="Cartagena" /> <option value="Casablanca" /> <option value="Castro" /> <option value="Chillán" /> <option value="Chimbarongo" /> <option value="Concepción" /> <option value="Concón" /> <option value="Constitución" /> <option value="Copiapó" /> <option value="Coquimbo" /> <option value="Curicó" /> <option value="El Quisco" /> <option value="El Tabo" /> <option value="Hijuelas" /> <option value="Iquique" /> <option value="La Estrella" /> <option value="Las Cabras" /> <option value="La Serena" /> <option value="Limache" /> <option value="Linares" /> <option value="Litueche" /> <option value="Los Andes" /> <option value="Los Angeles" /> <option value="Los Vilos" /> <option value="Olmué" /> <option value="Osorno" /> <option value="Ovalle" /> <option value="Parral" /> <option value="Peñablanca" /> <option value="Pucón" /> <option value="Puerto Montt" /> <option value="Puerto Varas" /> <option value="Putaendo" /> <option value="Quillota" /> <option value="Quilpué" /> <option value="Quintay" /> <option value="Quintero" /> <option value="Rancagua" /> <option value="Rapel" /> <option value="Reñaca" /> <option value="Rinconada" /> <option value="San Antonio" /> <option value="San Felipe" /> <option value="San Fernando" /> <option value="Santa Cruz" /> <option value="Santo Domingo" /> <option value="Talca" /> <option value="Temuco" /> <option value="Valdivia" /> <option value="Valparaíso" /> <option value="Villarrica" /> <option value="Viña del Mar" />
			</datalist>
		</div>
		
		<div id="reset"><button class="reset-button" type="button">Reset</button></div>
			
		<div id="filtros-actuales">			
		<!-- Hay algunos filtros que son marcas de las cosas de arriba. Hay otros sin embargo que sirven para filtrar. -->
			
		</div> 
		<hr>
		</div>
		</div>


		
	</div>