<?php 
require('../../lib/recursos_model.php');
$recursos = new Recursos();


// ARRAY 
if ( !empty( $_POST['id_recursos'] ) ) {
 	$recursos->get( $_POST['id_recursos'] );
	
	$recursos_array = array(
 		'editor' => $recursos->rows_recursos[0]["editor"],
 		'ficha_a' => $recursos->rows_recursos[0]["ficha_a"],
 		'video' => $recursos->rows_recursos[0]["video"],
 		'descriptivo' => $recursos->rows_recursos[0]["descriptivo"]
 	);

 	echo json_encode( $recursos_array );
 } ?>