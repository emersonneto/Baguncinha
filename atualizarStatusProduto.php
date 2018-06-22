<?php
	if (!isset($_SESSION)) session_start();
	if (!isset($_SESSION['usuario'])) {
	header("Location: index.php"); 
	exit;
	}
?>
<HTML>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> BAGUNCINHA </title>
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
		<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
		<link rel="icon" href="img/fire.png">
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"> </script>
	</head>
	
	<body>
		<form action="atualizar.php" method="POST" id="atualizar">
			<p>Produto:</p>
			<select name="produto" form="atualizar" required="true">
			    <option disabled selected value></option>
				<option value="1">Xeila Samanta Raio Lazer</option>
				<option value="2">Pamela Rodrigues</option>
				<option value="3">Amanda Barros</option>
				<option value="4">Fabiola Pinto</option>
				<option value="5">Mariana Oliveira</option>	
			</select>
			
			<p>Status:</p>
			<select name="status" form="atualizar" required="true">
			    <option disabled selected value></option>
				<option value="1">Disponível</option>
				<option value="2">Indisponível</option>
				<option value="3">Ocupada</option>
				<option value="4">Em Férias</option>	
			</select>
			
			<input type="submit" value="Atualizar Status">
		</form>
	</body>
</HTML>