<?php
require_once ("../common/Constantes.php");
require_once ("../common/Conexion.php");
require_once ("DescripcionesDAO.php");
require_once ("../dto/Descripcion.php");

//$lista = DescripcionesDAO::listar();

//var_dump($lista);


$descripcion = DescripcionesDAO::obtener(1);

var_dump($descripcion);