<?php

$roles = $_POST["roles"];
if (empty($roles)) {
	header('Location: index.php');
}elseif (!empty($roles)) {
	header('Location: seleccion-roles.php?roles='.urlencode($roles)); 
}
?>