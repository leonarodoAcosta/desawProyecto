<?php 

try 
{
	$conexion = new PDO('mysql: host=localhost; dbname=formulario','root','');	

	#echo "ok";

} 
catch (PDOException $e) 
{
	echo "Error".$e->getMessage();
}


 ?>