

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Primeiro teste</title>
	<link rel="stylesheet" type="text/css" href="/css/adm.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
	<input type="checkbox" id="check">
	<label>
		<i class="fa fa-bars"></i>
		<i class="fa fa-times"></i>
	</label>
	<div class="menu">
		<p class="logo">NAVEGAÇÃO</p>
		<ul>
			<li>
				<a href="#">Cadrastro de servidores</a>
			</li>
			<li>
				<a href="#">Relatorio</a>
			</li>
			<li>
				<a href="#">Pedidos</a>
			</li>
			<li>
				<a href="#">Contato DATI</a>
			</li>
		</ul>
	</div>
</body>
</html>

<?php
	session_start();
	echo "Usuario: ". $_SESSION['usuarioNome'];	
?>
<br>
<a href="sair.php">Sair</a><!DOCTYPE html>