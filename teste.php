<?php 
include('conexao_bd.php');
include('verifica_login.php');


@$msg = $_POST['msg'];




$usu = $_SESSION['usu'];

		if(!isset($_POST['msg'])){
			
			echo $msg;
			
		}else{
			date_default_timezone_set("America/Sao_Paulo");
			$date = date('H:i:s');
			$sql = "insert into chat (usuario,mensagem,horario) values ('$usu','$msg','$date');";
			$result = $con->query($sql);
				
			
			if($result){
				
			
			}else{
				echo "erro ao executar!";
			}
		}
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Siscon</title>
        <meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style2.css">
		<script src="js/jquery-2.2.3.min.js" type="text/javascript"></script>   
	<script>
		
		$(document).ready(function(){
			
			
			
		});
		

		</script>
    </head>
    <body>
	<nav>
	
	
	
	
	
			
			
			<div id="login">
				<center>	
				<form method="POST" action="teste.php">
				
					<Br><input type="text" placeholder=" Digite aqui sua mensagem " name="msg" ><Br><br>
						<input id='submit' type="submit" value=' Enviar '>
					
				</form>
				
					
				</center>
			</div> 

	</div>
    </body>
</html>


