<?php include ("includes/header.php"); include ("includes/menu.php"); ?>
<!--Contenido de la web -->
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1>Simulador de Gananacias</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-1"></div>
		<div class="col-sm-10 select-rol">
			<form method="post" action="modos-role.php">

				<div class="form-group">
					<label for="roles">Selecciona un rol:</label> <select
						class="form-control" id="roles" name="roles"
						onchange="muestraRoles(this.value)">
						<option value=""></option>
						<option value="1">Director</option>
						<option value="2">Subdirector</option>
						<option value="3">Inversionista mayor</option>
						<option value="4">Inversionista menor</option>
					</select>
				</div>
				<div id="contenido" name="contenido" class="hidden">
					<div class="form-group">
						<label id="etiquetaSubs" name="etiquetaSubs" for="numSubs"></label>

						<select class="form-control" id="numSubs" name="numSubs">
							<option value=""></option>
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
        	<h2>Ingresa las ganancias semales de ventas</h2>
        	<div class="form-group col-sm-8">
                <label for="A1">Facturación Semanal de Ventas por Internet Impresión 3D	</label><input type="text" class="form-control" name="A1" id="A1"></input>	
                <label for="A2">Facturación Semanal de Ventas por Internet Electrónica	</label><input type="text" class="form-control" name="A2" id="A2"></input>	
                <label for="A3">Facturación Semanal de Ventas por Internet Textiles	</label><input type="text" class="form-control" name="A3" id="A3"></input>	
                <label for="A4">Facturación Semanal de Ventas por Internet Muebles y EcoHábitats	</label><input type="text" class="form-control" name="A4" id="A4"></input>	
                <label for="A5">Conversiones de Autos Eléctricos por Semana por Internet	</label><input type="text" class="form-control" name="A5" id="A5"></input>	
                <label for="A6">Facturación Semanal de Estampado por Internet	</label><input type="text" class="form-control" name="A6" id="A6"></input>	
                <label for="A7">Facturación Semanal de Ventas por Catálogo Impresión 3D	</label><input type="text" class="form-control" name="A7" id="A7"></input>
                <label for="A8">Facturación Semanal de Ventas por Catálogo Electrónica	</label><input type="text" class="form-control" name="A8" id="A8"></input>	
                <label for="A9">Facturación Semanal de Ventas por Catálogo Textiles	</label><input type="text" class="form-control" name="A9" id="A9"></input>	
                <label for="A10">Facturación Semanal de Ventas por Catálogo Muebles y EcoHábitats	</label><input type="text" class="form-control" name="A10" id="A10"></input>	
                <label for="A11">Conversiones de Autos Eléctricos por Semana por Catálogo	</label><input type="text" class="form-control" name="A11" id="A11"></input>	
                <label for="A12">Facturación Semanal de Estampado por Catálogo	</label><input type="text" class="form-control" name="A12" id="A12"></input>
                <label for="A13">Monto Ventas Semanalesrealizadas por Director	</label><input type="text" class="form-control" name="A13" id="A13"></input>	
                <label for="A14">Comisiones de Diseño 3D  y otros servicios(promedio de $80 x diseño)	</label><input type="text" class="form-control" name="A14" id="A14"></input>	
        	</div>					
		</div>
				</div>
				<div class=" boton-siguiente">
					<button type="submit" class="btn btn-default btn-lg">Continuar</button>
				</div>
			</form>
		</div>
		<div class="col-sm-1"></div>

	</div>

	<div class="row">
		<div class="col-sm-12 cuadro-descriptivo">
			<div class="panel panel-default">
				<div class="panel-heading">Información</div>
				<div class="panel-body">
					<p>Con este simulador puedes jugar con los valores de diversas
						variables, tanto de la organizacion, como de las ventas y
						visualizar diversos escenarios y las ganacias por rol.</p>
					<p>En este cuadro negro encontraras una guia de ayuda para
						facilitar la manipulacion de estas variables y el entedimiento de
						las mismas...</p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'includes/footer.php';?>