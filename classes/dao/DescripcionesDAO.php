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
		
		public static function registrar($descripcion){
		
		$con = Conexion::getConexion();
		
		$sql = "insert into nosotros (titulo, descripcion, imagen, imagen_tipo, imagen_tamanio)
				values (:titulo, :descripcion, :imagen, :imagen_tipo, :imagen_tamanio)";
				
				
		$stmt = $con->prepare($sql);		
		
		$stmt->bindParam(':titulo', $descripcion->titulo);
		$stmt->bindParam(':descripcion', $descripcion->descripcion);		
		$stmt->bindParam(':imagen', $descripcion->imagen);
		$stmt->bindParam(':imagen_tipo', $descripcion->imagen_tipo);
		$stmt->bindParam(':imagen_tamanio', $descripcion->imagen_tamanio);
		
		$stmt->execute();
		
		}	
		
		public static function obtener($id){
		
		$con = Conexion::getConexion();
		
		  $sql = "select id, titulo,descripcion, imagen, imagen_tipo, imagen_tamanio from nosotros
				  where id = :id";
				
		$stmt = $con->prepare($sql);
		
		$stmt->bindParam(':id', $id);
		
		$stmt->execute();
		
		if($registro = $stmt->fetchObject('Descripcion')){
			return $registro;
			}
		
		
		}
		
}