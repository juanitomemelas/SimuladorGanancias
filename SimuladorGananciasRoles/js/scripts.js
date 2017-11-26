function muestraRoles(valor){
	switch(valor) {
    case '1':
    case '2':
    case '3':
    	$('#contenido').removeClass('hidden');
    	$('#etiquetaSubs').text('Número de Subdirectores');
    	break;
    case '4':
    	$('#contenido').removeClass('hidden');
    	$('#etiquetaSubs').text('Total Certificados todos los Socios');
    	break;
    default:
    	$('#contenido').addClass('hidden');
    $('#etiquetaSubs').innerHTML('');
	}
}