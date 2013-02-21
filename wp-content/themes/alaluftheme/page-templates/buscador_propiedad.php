<?php
/*
 * Template Name: Buscador de Propiedades
 *
 */
get_header(); ?>

<table id="busqueda-old">
<tr>
	<th>BUSCADOR DE PROPIEDADES</th>
</tr>
<tr>
	<td>
		<form method="GET" action="resultados">

		<table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" class="content">
		<tr>
			<th width="30%">Tipo</th>
			<th width="30%">Comuna</th>
			<th>Operaci&oacute;n</th>
		</tr>
		<tr>
			<td>
				<select name="cod_tipo_prop[]" size="8" multiple>
					<option value='1' >Casas</option>
	<option value='2' >Departamentos</option>
	<option value='3' >Oficinas</option>
	<option value='4' >Locales</option>
	<option value='5' >Casas Comerciales</option>
	<option value='6' >Terrenos para Proyectos</option>
	<option value='7' >Terrenos Industriales</option>
	<option value='8' >Galpones</option>
	<option value='9' >Propiedades en Renta</option>
	<option value='10' >Sitios</option>
	<option value='11' >Parcelas y Fundos</option>
					</select>
			</td>
			<td>
				<select name="cod_com[]" size="8" multiple>
					<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /><option value=RM>[ Regi&oacute;n Metropolitana ]</option><option value=13502>Alhué</option><option value=13133>Batuco</option><option value=13402>Buin</option><option value=13606>Cabildo</option><option value=13607>Calera</option><option value=13403>Calera de Tango</option><option value=13102>Cerrillos</option><option value=13103>Cerro Navia</option><option value=13304>Chicureo</option><option value=13301>Colina</option><option value=13104>Conchalí</option><option value=13503>Curacaví</option><option value=13105>El Bosque</option><option value=13602>El Monte</option><option value=13106>Estación Central</option><option value=13135>Farellones</option><option value=13107>Huechuraba</option><option value=13108>Independencia</option><option value=13603>Isla de Maipo</option><option value=13109>La Cisterna</option><option value=13110>La Florida</option><option value=13111>La Granja</option><option value=13134>Laguna de Aculeo</option><option value=13302>Lampa</option><option value=13112>La Pintana</option><option value=13113>La Reina</option><option value=13114>Las Condes</option><option value=13115>Lo Barnechea</option><option value=13116>Lo Espejo</option><option value=13117>Lo Prado</option><option value=13118>Macul</option><option value=13119>Maipú</option><option value=13504>María Pinto</option><option value=13501>Melipilla</option><option value=13120>Ñuñoa</option><option value=13604>Padre Hurtado</option><option value=13404>Paine</option><option value=13121>Pedro Aguirre Cerda</option><option value=13605>Peñaflor</option><option value=13122>Peñalolén</option><option value=13202>Pirque</option><option value=13123>Providencia</option><option value=13124>Pudahuel</option><option value=13201>Puente Alto</option><option value=13125>Quilicura</option><option value=13126>Quinta Normal</option><option value=13127>Recoleta</option><option value=13128>Renca</option><option value=13401>San Bernardo</option><option value=13129>San Joaquín</option><option value=13203>San José de Maipo</option><option value=13130>San Miguel</option><option value=13505>San Pedro</option><option value=13131>San Ramón</option><option value=13101>Santiago</option><option value=13601>Talagante</option><option value=13303>Tiltil</option><option value=13132>Vitacura</option><option value=></option><option value=REG>[ Otras Regiones ]</option><option value=5602>Algarrobo</option><option value=2101>Antofagasta</option><option value=11201>Aysén</option><option value=5603>Cartagena</option><option value=5102>Casablanca</option><option value=10201>Castro</option><option value=8401>Chillán</option><option value=6303>Chimbarongo</option><option value=8101>Concepción</option><option value=5103>Concón</option><option value=7102>Constitución</option><option value=3101>Copiapó</option><option value=4102>Coquimbo</option><option value=7301>Curicó</option><option value=5604>El Quisco</option><option value=5607>El Tabo</option><option value=5503>Hijuelas</option><option value=1101>Iquique</option><option value=6202>La Estrella</option><option value=6107>Las Cabras</option><option value=4101>La Serena</option><option value=5505>Limache</option><option value=7401>Linares</option><option value=6203>Litueche</option><option value=5301>Los Andes</option><option value=8301>Los Angeles</option><option value=4203>Los Vilos</option><option value=5507>Olmué</option><option value=10301>Osorno</option><option value=4301>Ovalle</option><option value=7404>Parral</option><option value=5111>Peñablanca</option><option value=9115>Pucón</option><option value=10101>Puerto Montt</option><option value=10109>Puerto Varas</option><option value=5705>Putaendo</option><option value=5501>Quillota</option><option value=5106>Quilpué</option><option value=5112>Quintay</option><option value=5107>Quintero</option><option value=6101>Rancagua</option><option value=6118>Rapel</option><option value=5110>Reñaca</option><option value=5303>Rinconada</option><option value=5601>San Antonio</option><option value=5701>San Felipe</option><option value=6301>San Fernando</option><option value=6310>Santa Cruz</option><option value=5606>Santo Domingo</option><option value=7101>Talca</option><option value=9101>Temuco</option><option value=10501>Valdivia</option><option value=5101>Valparaíso</option><option value=9120>Villarrica</option><option value=5109>Viña del Mar</option>				</select>
			</td>
			<td valign="top">
				<input name="cod_obj[1]" type="checkbox" value="1,3" class="chkbox"> Venta<br>
				<input name="cod_obj[2]" type="checkbox" value="2,3" class="chkbox"> Arriendo
			</td>
		</tr>
		<tr>
			<th>C&oacute;digo de Propiedad</td>
			<th>Rango de Precios</th>
			<th>Ordenar por</td>
		</tr>
		<tr>
			<td valign="top"><input name='cod_prop' type='text' value='' size='15' maxlength='12'  onKeyPress='return enArreglo(event,49,50,51,52,53,54,55,56,57,48);' class='input-text'></td>
			<td valign="top">
				<select name="moneda">
					<option value="" selected></option>
					<option value="$">$</option>
					<option value="UF">UF</option>
					<option value="UF/M<sup>2</sup>">UF/M&sup2;</option>
					<option value="US$">US$</option>
				</select>
				<br>
				<input name='precio_ini' type='text' value='' size='9' maxlength='15' onblur='MoneyFormat(this)' onKeyPress='return enArreglo(event,49,50,51,52,53,54,55,56,57,48,44);' class='input-text'> a <input name='precio_fin' type='text' value='' size='9' maxlength='15' onblur='MoneyFormat(this)' onKeyPress='return enArreglo(event,49,50,51,52,53,54,55,56,57,48,44);' class='input-text'>				</td>
			<td>
				<select name="ordenar"style="width:100px">
					<option value="precio" selected>Precio</option>
					<option value="tipo">Tipo</option>
					<option value="codigo">C&oacute;digo</option>
					<option value="">Ninguno</option>
				</select>
				<br>
				<input name="sentido" type="radio" value="asc" checked class="chkbox"> De menor a mayor
				<br>
				<input name="sentido" type="radio" value="desc" class="chkbox"> De mayor a menor
			</td>
		</tr>
		</table>
		<table width="98%" border="0" align="center" cellpadding="0" cellspacing="1" class="content">
		<tr>
			<td colspan="4" class="comentario">Características</td>
		</tr>
		<tr>
			<th width="30%">M&sup2; Terreno</th>
			<th width="30%">M&sup2; Construidos</th>
			<th width="20%">Dormitorios</th>
			<th>Ba&ntilde;os</th>
		</tr>
		<tr>
			<td>
			<input name='terreno_ini' type='text' value='' size='9' maxlength='10' onblur='MoneyFormat(this)' onKeyPress='return enArreglo(event,48,49,50,51,52,53,54,55,56,57,44);' class='input-text'> a <input name='terreno_fin' type='text' value='' size='9' maxlength='10' onblur='MoneyFormat(this)' onKeyPress='return enArreglo(event,48,49,50,51,52,53,54,55,56,57,44);' class='input-text'>			</td>
			<td>
			<input name='construido_ini' type='text' value='' size='9' maxlength='10' onblur='MoneyFormat(this)' onKeyPress='return enArreglo(event,48,49,50,51,52,53,54,55,56,57,44);' class='input-text'> a <input name='construido_fin' type='text' value='' size='9' maxlength='10' onblur='MoneyFormat(this)' onKeyPress='return enArreglo(event,48,49,50,51,52,53,54,55,56,57,44);' class='input-text'>			</td>
			<td>
				<select name="dormitorios">
					<option value="" selected>Indiferente</option>
					<option value="1">Al menos 1</option>
					<option value="2">Al menos 2</option>
					<option value="3">Al menos 3</option>
					<option value="4">Al menos 4</option>
					<option value="5">Mï¿½s de 4</option>
				</select>
			</td>
			<td>
				<select name="banos">
					<option value="" selected>Indiferente</option>
					<option value="1">Al menos 1</option>
					<option value="2">Al menos 2</option>
					<option value="3">Al menos 3</option>
					<option value="4">Al menos 4</option>
					<option value="5">Mï¿½s de 4</option>
				</select>
			</td>
		</tr>
		<tr>
			<td align="center" height="30" colspan="4" valign="middle">
				<br><input type="submit" name="submit" value="Buscar" style="width:85px" class="boton">
			</td>
		</tr>
		</table>
		</form>
	</td>
</tr>
</table>

<?php get_footer(); ?>