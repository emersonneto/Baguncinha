<?php
	if (!isset($_SESSION)) session_start();
	if (!isset($_SESSION['usuario'])) {
	header("Location: index.php"); 
	exit;
	}
?>
<HTML>
	<HEAD>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> BAGUNCINHA </title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
		<link rel="icon" href="img/fire.png">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"> </script>
		<script src="cadastrarProduto.php"></script>
		<script src="atualizarStatusProduto.php"></script>
		<script src="relatorios.php"></script>
		<script src="candidatos.php"></script>
	</HEAD>
	
	<BODY>	
		<form action="cadastrarProduto.php" method="POST">
			<input type="submit" value="Cadastrar produto">
		</form>
		
		<form action="atualizarStatusProduto.php" method="POST">
			<input type="submit" value="Atualizar Status Produto">
		</form>
		
		<form action="relatorios.php" method="POST">
			<input type="submit" value="Relatorios">
		</form>
		
	</BODY>
</HTML>