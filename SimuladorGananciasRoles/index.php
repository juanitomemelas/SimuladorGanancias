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
<!-- 						<option value="1">Director</option> -->
						<option value="2">Subdirector</option>
						<option value="3">Inversionista mayor</option>
						<option value="4">Inversionista menor</option>
					</select>
				</div>
				<div class="form-group">
					<label for="roles">Num. De vendedores</label> <select
						class="form-control" id="roles" name="roles"
						onchange="muestraRoles(this.value)">
						<option value=""></option>
<?php for ($x = 1; $x <= 100; $x++) {  echo "<option value=".$x.">$x</option>";	} ?>
					</select>
				</div> 
				<div class="form-group">
					<label for="invMen">Numero de inversionistas menores</label> 
					<select	class="form-control" id="invMen" name="invMen"
						onchange="muestraRoles(this.value)">
						<option value=""></option>
<?php for ($x = 1; $x <= 100; $x++) {  echo "<option value=".$x.">$x</option>";	} ?>
					</select>
				</div> 
				
				
				<div id="contenido" name="contenido" class="hidden">
					<div class="form-group">
						<label id="etiquetaSubs" name="etiquetaSubs" for="numSubs"></label>
						<select class="form-control" id="numSubs" name="numSubs">
							<option value=""></option>
<?php for ($x = 1; $x <= 45; $x++) {  echo "<option value=".$x.">$x</option>";	} ?>
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
    				<h3 id="gananciasTitulo" name="gananciasTitulo"></h3>
    				<p>Recuperación Mensual</p> <div name="ganancia1" id="ganancia1"></div>
    				<p>Recuperación Anual</p><div name="ganancia2" id="ganancia2"></div>	
    			</div>
    			<div class=" boton-siguiente">
    				<button type="submit" class="btn btn-default btn-lg">Continuar</button>
    			</div>
           	</div>					
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


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Seleccione el rol</h4>
        </div>
        <div class="modal-body">
       <div class="row">
		<div class="col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading">Descripción del modo sencillo</div>
					<div class="panel-body">
					Puede Mirar una Noción General sobre el período de todo un año, implica llenar unos pocos datos más, sin embargo le ofrece la opción de ver a detalle cualquiera de los meses del año.   
					</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading">Descripcion del modo completo</div>
					<div class="panel-body">
					Puede Seleccionar entre Consultar un Periodo Con sus variables para poder ver más detalles sobre el período, entre otros los fondos, las reparticiones entre los diversos roles.   
					</div>
			</div>
		</div>
	</div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Sencillo</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">completo</button>
        </div>
      </div>
    </div>
  </div>

<script>
window.onload = function(e){$('#myModal').modal('show');}
</script>
<?php include 'includes/footer.php';?>