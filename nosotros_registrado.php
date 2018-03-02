<?php
//var_dump($_POST);

//var_dump($_FILES);

require_once ("autoload.php");


try{
	
	if(!isset($_POST['titulo']) || $_POST['titulo'] == '')
		die('debe indicar una titulo');
		
	 if($_FILES['imagen']['error']==0 && $_FILES['imagen']['size'] > 1048576)
        die('Archivo demasiado grande ( > 1MiB)');	
				
$descripcion = new Descripcion();

$descripcion->titulo = $_POST['titulo'];
$descripcion->descripcion = $_POST['descripcion'];

if($_FILES['imagen']['error']==0){
$descripcion->imagen = $_FILES['imagen']['name'];
$descripcion->imagen_tipo = $_FILES['imagen']['type'];
$descripcion->imagen_tamanio = $_FILES['imagen']['size'];
	
	 if (!file_exists(Constantes::RUTA_IMAGENES)) {
            mkdir(Constantes::RUTA_IMAGENES, 0777, true); 
        }

	move_uploaded_file($_FILES['imagen']['tmp_name'], Constantes::RUTA_IMAGENES . $_FILES['imagen']['name']);
	
}

DescripcionesDAO::registrar($descripcion);

Flash::success('Registro guardado satisfactoriamente');

header('location:nosotros.php');
		
	
	
	} catch (Exception $ex){
		die('Error: ' . $ex->getMessage());
		}
		
?>