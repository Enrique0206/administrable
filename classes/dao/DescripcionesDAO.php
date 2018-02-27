<?php 

class DescripcionesDAO {	
	
	public static function listar (){
		
		$con = Conexion::getConexion();
		
		$sql = "select id, titulo, descripcion, imagen 
				from nosotros";
				
		$stmt = $con->prepare($sql);
		$stmt->execute();		
		
		$registro = [];		
		
		while($registro = $stmt->fetchObject('Descripcion')){			
			$lista[] = $registro;			
			}			
			return $lista;		
		}	
}