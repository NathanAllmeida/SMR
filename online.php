<?php 
include('conexao_bd.php');
include('verifica_login.php');


	$usuario = $_SESSION['usu'];
	date_default_timezone_set("America/Sao_Paulo");
	$tempo = '00:00';
	
	$ip = $_SERVER['REMOTE_ADDR'];

   $sql = "SELECT * FROM online WHERE ip ='$ip' and usuario = '$usuario'";
   
   $verifica = $con->query($sql);
	
   
   $linhas  = mysqli_num_rows($verifica); 

   
   if($linhas == 0)
   { 
      $sql = "INSERT INTO online (ip, tempo,usuario) VALUES ('$ip','$tempo','$usuario')";
	  $acrescenta = $con->query($sql);
	  
   }
   else
   { 
     $sql = "UPDATE online SET tempo ='$tempo' WHERE ip='$ip'";
	  
      $atualiza = $con->query($sql); 
   }
   

   $sql = "SELECT usuario FROM online";
   $online = $con->query($sql); 
   
   $agora = mysqli_num_rows($online);
   
   if($agora==1)
   {
      
			

   }
   else
   {
	   echo "Usuarios Online:<br><br> ";
	   
	   echo "<div id='userOnline'>";
      while($row = $online->fetch_assoc()){
								
				echo "<li style='font-family: arial;'>".$row['usuario']."</li>";
							
			}
		echo "</div>";
   
   }
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Siscon</title>
        <meta charset="UTF-8">
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
						document.getElementById('userOnline').innerHTML=xmlHttp.responseText;
						setTimeout('Ajax()',990);
					}
				}
				xmlHttp.open("GET","online.php",true);
				xmlHttp.send(null);
				}

				window.onload=function(){
					setTimeout('Ajax()',990);
				}
</script>
		<script src="js/jquery-2.2.3.min.js" type="text/javascript"></script>   
	<script>
		
		$(document).ready(function(){
		
		
		});
		

		</script>
		<script language="JavaScript"> 
			valor = 0;
			 
			function baixo(acao) {
				
				acao2 = acao;
				
			if(acao2=="para") {
				valor = 0;
				return false;
			} else {
				setTimeout("baixo(acao2)", 100);
				window.frames['iframe'].scrollBy(0,valor+3);
				return false;
			}
				return false;
			} 
			 
			function cima(acao) {
			
				acao2 = acao;
			
			if(acao2=="para") {
				valor = 0;
				return false;
			} else {
				setTimeout("cima(acao2)", 100);
				window.frames['iframe'].scrollBy(0,valor-3);
				return false;
			}
			return false;
			}
 
</script>
    </head>
    <body>
	<nav>
	
	
	
	
	
			
			
			

	</div>
    </body>
</html>


