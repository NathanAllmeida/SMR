<?php
include('conexao_bd.php');

?>
<!DOCTYPE html>

<html>
    <head>
        <title>Siscon</title>
        <meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="js/jquery-2.2.3.min.js" type="text/javascript"></script>   
	
    </head>
    <body>
	<nav>
	<center>
	<h1 id="titulo">SMR</h1>
	<h3> Sistemas de Mensagem por Rede</h3>
	</center>
	</nav>
	
			
			
			<div id="login">
				<center>	
				<form method="POST" action="autenticacao.php">
					
					Digite seu Nome: <Br><input type="text" placeholder="Nome" name="usuario" ><Br><br>
					<input type="submit" value="Inicar Sessão"><Br><br>
					
				
				</form>
					
				</center>
			</div> 

	</div>
    </body>
</html>


