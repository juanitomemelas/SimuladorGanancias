function muestraRoles(valor){
	switch(valor) {
    case '1':
    	$('#contenido').removeClass('hidden');
    	$('#etiquetaSubs').text('Número de Subdirectores');
    	$('#gananciasTitulo').text('GANANCIAS COMO DIRECTOR');
    	break;
    case '2':
    	$('#contenido').removeClass('hidden');
    	$('#etiquetaSubs').text('Número de Subdirectores');
    	$('#gananciasTitulo').text('GANANCIAS COMO SUBDIRECTOR');
    	break;
    case '3':
    	$('#contenido').removeClass('hidden');
    	$('#etiquetaSubs').text('Número de Subdirectores');
    	$('#gananciasTitulo').text('GANANCIAS COMO INVERSIONISTA MAYOR');
    	break;
    case '4':
    	$('#contenido').removeClass('hidden');
    	$('#etiquetaSubs').text('Total Certificados todos los Socios');
    	$('#gananciasTitulo').text('GANANCIAS COMO INVERSIONISTA MENOR');
    	break;
    default:
    	$('#contenido').addClass('hidden');
    $('#etiquetaSubs').innerHTML('');
	}
}
function generaResultados(){
	
}