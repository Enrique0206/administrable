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
		
			<div id="contenido" class="container">	
 
				<!-- Table -->
				<div class="panel">
    
					<div class="panel-heading">
                    	<h4>Administrar Nosotros</h4>
                  	</div>       
        
  					<div class="panel-body">   					 
  						<table class="table">
         					<thead>
                	 			<tr>
                    				<th>titulo</th>
                        			<th>descripcion</th>
                        			                           
                        			<th width="50"></th>
                        			<th width="50"></th>
                        			
                   				</tr>
            				</thead>
        		
                			<tbody>
                   			<?php foreach ($lista as $descripcion) {?>
                    			<tr>
                  					<td><?=$descripcion->titulo?></td>
                    				<td><?=$descripcion->descripcion?></td>
                        			                               
                        			<td><a href="#"><img src="descripcion_imagen.php?id=<?=$descripcion->id?>" height="32"/></a></td>                              
                        			
                                
                        			
									<td><a href="#" class="btn btn-info">Editar</a></td>                         			   
									<td><a href="eliminar_nosotros.php?id=<?=$descripcion->id?>" class="btn btn-danger"></i> Eliminar</a></td>            	                                         
                    			</tr>                   
       	     				<?php }?>
              				</tbody>      		    
        				</table>			
					</div>
        
        
                	<div class="panel-footer">
						<a href="registrar_nosotros.php" class="btn btn-primary">Nuevo</a>
                	</div>
         		 
				</div>	
    			<!-- Table -->
  			
			
	</div> 	
		
		
	</body>
</html>