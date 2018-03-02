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
		
		<div class="container-fluid"><?= Flash::show() ?></div>
		
		<div class="container">
			
			<h3 class="text-center">Cursos</h3>
			
			<?php foreach($lista as $descripcion) { ?>
			<div class="container">				
				<div class="row center-block">
					<div class="col-xs-12 col-md-6">						
						<!--<?=$descripcion->imagen?>-->
						<img src="descripcion_imagen.php?id=<?=$descripcion->id?>" height="200px">
					</div>
					<div class="col-xs-6 col-md-6 text-justify">
						<h3><?=$descripcion->titulo?></h3>
						<p><?=$descripcion->descripcion?></p>
					</div>
				</div>					
			</div>
			<?php } ?>
			
		</div>
		
		
	</body>
</html>