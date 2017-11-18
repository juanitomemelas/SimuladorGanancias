<?php include 'includes/header.php';?>
<?php include 'includes/menu.php';?>

<div class="container">
    <form method="post" action="guarda-modos.php">	
    	<div class="row">
    	    <div class="col-sm-4 col-lg-4 "><strong>Rol seleccionado:</strong></div>
            	<div class="col-sm-8 col-lg-8">
              		<p class="text-primary"><?php echo $_GET["roles"]; ?></p>
            	</div>
        	 <div class="col-xs-12"><strong>Selecciona el modo a simular</strong></div>
    			<div class="col-xs-6">
    				<input type="submit" class="btn btn-default btn-lg" name="simple" value="Sencillo">
    			</div>
    			<div class="col-xs-6">
    				<input type="submit" class="btn btn-default btn-lg" name="completo" value="Completo">
    			</div>
    
    	</div>
    </form>
	<div class="row">
		<div class="col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading">Descripcion del modo sencillo</div>
					<div class="panel-body">
					Puede Mirar una Noci�n General sobre el per�odo de todo un a�o, implica llenar unos pocos datos m�s, sin embargo le ofrece la opci�n de ver a detalle cualquiera de los meses del a�o.   
					</div>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading">Descripcion del modo completo</div>
					<div class="panel-body">
					Puede Seleccionar entre Consultar un Periodo Con sus variables para poder ver m�s detalles sobre el per�odo, entre otros los fondos, las reparticiones entre los diversos roles.   
					</div>
			</div>
		</div>
	</div>

	</div>
<?php include 'includes/footer.php';?>