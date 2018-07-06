<?php 
require_once("funcoes-login.php");


verificausuario();


if(isset($_GET['sucesso']) && $_GET['sucesso']==true){
	echo "Mensagem enviada";
}
if(isset($_GET['erro']) && $_GET['erro']==false){
	echo "Erro ao enviar a mensagem";
}


 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Contato</title>
 	<meta charset="utf-8">
 </head>
 <body>
<center><form action="envia-email.php" method="POST">
		<br><br><br><br><br><br><br>
		 		<table>
		 			<tr>
		 				<td>nome</td>
		 				<td><input type="text" name="nome"></td>
		 			</tr>
		 			<tr>
		 				<td>Email</td>
		 				<td><input type="email" name="email"></td>
		 			</tr>
		 			<tr>
		 				<td>Mensagem</td>
		 				<td><input type="textarea" name="mensagem"></td>
		 			</tr>
		 			<tr>
		 				<td><button type="submit">Enviar</button></td>
		 			</tr>
		 			<tr><tr></tr><tr></tr><tr><tr></tr></tr>
		 				<td>
	 						<a href="index.php">Voltar</a>
		 				</td>
		 			</tr>
		 		</table>
	 	</form></center>
	 
 </body>
 </html>