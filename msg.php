<?php 
include('conexao_bd.php');
include('verifica_login.php');


$usu = $_SESSION['usu'];

$sql = "select  id,usuario, mensagem,horario,entrar from chat";
$result = $con->query($sql);

@$entrar = $_POST['entrar'];

if($entrar == 1){
	
	date_default_timezone_set("America/Sao_Paulo");
	$date = date('H:i:s');	
	
	$sql = "insert into chat (usuario,mensagem,horario,entrar) values ('$usu','$usu pegou o bonde andando!','$date','1');";
	$result = $con->query($sql);
}

?>

<!DOCTYPE html>

<html>
    <head>
        <title>Siscon</title>
        <meta charset="UTF-8">
		<!--<META HTTP-EQUIV="REFRESH" CONTENT="5; URL=msg.php">-->
	
		<link rel="stylesheet" type="text/css" href="style2.css">
		<script type="text/javascript">
		
				function Ajax(){
				var xmlHttp;
					try{    
						xmlHttp=new XMLHttpRequest();// Firefox, Opera 8.0+, Safari
					}
					catch (e){
						try{
							xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
						}
						catch (e){
							try{
								xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
							}
							catch (e){
								alert("No AJAX!?");
								return false;
							}
						}
					}

				xmlHttp.onreadystatechange=function(){
					if(xmlHttp.readyState==4){
						document.getElementById('chat').innerHTML=xmlHttp.responseText;
						setTimeout('Ajax()',990);
						setTimeout('window.scrollTo(0,document.body.scrollHeight)',0);
					}
				}
				xmlHttp.open("GET","msg.php",true);
				xmlHttp.send(null);
				}

				window.onload=function(){
					setTimeout('Ajax()',990);
					setTimeout('window.scrollTo(0,document.body.scrollHeight)',990);
				}
</script>
		<script language="Javascript">
			

		
		</script>
		<script src="js/jquery-2.2.3.min.js" type="text/javascript"></script>   
	<script>

		$(document).ready(function(){
			
			
			
					window.scrollTo(0,document.body.scrollHeight);
			
		
		
		
		
		});
		</script>
		
		

		
    </head>
    <body>
	<div id='chat'>
	<?php
			
			$x = 0;
			$date = date('g:i:s');
			
			
			while($row = $result->fetch_assoc()){
				
				$entrou = $row['entrar'];
				if($entrou == 1){
					echo "<div class='entrar' style='border: 1px solid'><p id=".$row['id']." class='Usu' ></p><span id=".$row['id']."x>".$row['mensagem']."</span></div><br>";
				}else{
					echo "<div class='msg' style='border: 1px solid'><p id=".$row['id']." class='Usu' > ".$row['usuario']."   </p><span id=".$row['id']."x>".$row['mensagem']."</span>|| ".$row['horario']."</div><br>";
				}	
				
							
			}
			



	
	
	
	?>
	</div>	
	
			
			
			<div id="login">
				<center>	
				
				
					
				</center>
			</div> 

	</div>
    </body>
</html>


