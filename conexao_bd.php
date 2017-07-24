<?php


	
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "chat";
	$dbc;


	
		
		$con = mysqli_connect($host,$user,$pass,$db);
		
		
		if(mysqli_error($con)){
				echo "Falha ao Conectar!".mysqli_connect_error(); 
		}else {
	
				}
		
	
	

?>