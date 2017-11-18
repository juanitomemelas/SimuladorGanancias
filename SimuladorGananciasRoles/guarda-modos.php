<?php
	if (isset($_POST['simple'])) {
		$modoSencillo = $_POST["simple"];
		header('Location: simulador/sencillo.php');
	} elseif (isset($_POST['completo'])) {
		$modoCompleto = $_POST["completo"];
		
		echo $modoCompleto;
	}
?>