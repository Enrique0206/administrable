<?php
require_once './autoload.php';

$lista = DescripcionesDAO::listar();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>web administrable</title>		
		<?php include './includes/head.php'; ?>    
    </head>
	
    <body>	
		
		<?php include './includes/header.php'; ?>
		
		
		<div class="container">
			
			<h3 class="text-center">Cursos</h3>
			
			<div class="container">
            
				<form action="nosotros_registrado.php" method="POST" enctype="multipart/form-data">
            
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h3 class="panel-title">Registro</h3>
                    </div>

                    <div class="panel-body">                        
                        
                        <div class="form-group">
                            <label for="titulo">Titulo</label>
                            <input type="text" id="nombre" name="titulo" class="form-control" required="" maxlength="100" placeholder="Ingrese el Titulo">
                        </div>
                                                                        
                        <div class="form-group"><!--se agrega la palabra ckeditor a la classs form control para convertirlo en un editor de texto-->
                            <label for="descripcion">Descripción</label>
                            <textarea id="descripcion" name="descripcion" class="form-control ckeditor"></textarea>
                        </div>
                        
                        <div class="form-group">
                            <label for="imagen">Imagen</label>
                            <input type="file" id="imagen" name="imagen" class="form-control">
                        </div>                     
                      

                    </div>

                    <div class="panel-footer">
                        <input type="submit" value="Registrar" class="btn btn-primary"/>
                    </div>

                </div>
                
            </form>
            
			</div>
			
		</div>
		
		
	</body>
</html>