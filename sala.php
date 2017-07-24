<?php
include('conexao_bd.php');
include('verifica_login.php');


$usuario = $_SESSION['usu'];





?>
<!DOCTYPE html>

<html>
    <head>
        <title>Siscon</title>
        <meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="js/jquery-2.2.3.min.js" type="text/javascript"></script>  
		
	<script>
		$(document).ready(function(){
			
				x = 1;
				$.post("msg.php",{entrar:x},function(data){
				$("#titulo").load(data);
				
				$("#input").val(" ");
				
				
				
				
				
					});
			
			$("#input").keypress(function(e){
				key = e.which;
				
				if(key == 13){
				x = $("#input").val();
				
				
				$.post("teste.php",{msg:x},function(data){
				$("#titulo").load(data);
				
				$("#input").val(" ");
				
				
				
				
				
					});
				}	
			});
			
			/*
			
			ref = document.getElementById("#batePapo").contentWindow.document.body.scrollHeight;
			document.getElementById("#batePapo").contentWindow.scrollTo(0,ref);*/
		});
		
		
		

		</script>
    </head>
    <body  onunload="alert('saiu da aba')">
	<center>
	<nav >
	
	<h1 id="titulo">SMR</h1>
	<h3> Sistemas de Mensagem por Rede</h3>
	<h3> Criado por Nathan Almeida</h3>
	</nav>
	</center>
	<center>
	<iframe id='batePapo' src='msg.php' width='80%' height='400px' border="0">
	
	
	</iframe><br>
	<!--<iframe id='mandaMSG' src='teste.php' width='900px' height='100px' border="0">
	
	
	</iframe>-->
	
				
					<Br><input id='input' type="text" placeholder=" Digite aqui sua mensagem " name="msg" autofocus><Br><br>
						
					
			
	
		
	</center>
	<!--<iframe style='
	position:absolute;
	top: 26%;
	left: 0%;
	' src='online.php' width='230px' height='300px' border="0">
	
	
	</iframe>		-->	
			
			


    </body>
</html>


