<?php
require_once ("autoload.php");

try{
	
	$id = $_GET['id'];
	
	$descripcion = DescripcionesDAO::obtener($id);
	
	$filename = Constantes::RUTA_IMAGENES . $descripcion->imagen;
	
	header("Content-type: ".$descripcion->imagen_tipo);
    header("Content-Length: ".$descripcion->imagen_tamanio); 
    header("Content-Disposition: inline; filename=".$descripcion->imagen); 
    
	echo file_get_contents($filename);

        
} catch (Exception $ex) {
   echo $exc->getTraceAsString();
}
