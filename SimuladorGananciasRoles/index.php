<?php include 'includes/header.php';?>
<?php include 'includes/menu.php';?>
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
				<form method="post" action="modos-role.php" style="text-align: center;">
				
				<div class="form-group">
  					<label for="sel1">Selecciona un rol:</label>
  					<select class="form-control" id="roles" name="roles">
						<option value=""></option>
						<option value="director">Director</option>
						<option value="subdirector">Subdirector</option>
						<option value="inversionista-mayor">Inversionista mayor</option>
						<option value="inversionista-menor">Inversionista menor</option>
					  </select>
				</div>
				<div class="row boton-siguiente">
				<div class="col-sm-12">
				<button type="submit" class="btn btn-default btn-lg">Continuar</button>
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
					<p>Con este simulador puedes jugar con los valores de diversas variables, tanto de la organizacion, como de las ventas y visualizar diversos escenarios	y las ganacias por rol.
					</p>
					<p>En este cuadro negro encontraras una guia de ayuda para facilitar la manipulacion de estas variables y el entedimiento de las mismas...
    				</p>
					</div>
			</div>
		</div>
	</div>
</div>
<?php include 'includes/footer.php';?>