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
		<form action="cadastrar.php" method="POST" id="cadastro">
			<p>Nome:</p>
			<input type="text" name="name" required="true">
			
			<p>Especialidade:</p>
			<select name="esp" form="cadastro" required="true">
			    <option disabled selected value></option>
				<option value="1">Oral</option>
				<option value="2">Anal</option>
				<option value="3">Beijo Grego</option>
				<option value="4">Espanhola</option>
				<option value="5">Inversão</option>
				<option value="6">Dominação</option>
				<option value="7">Banho dourado</option>
				<option value="8">Vaginal</option>		
			</select>
			
			<p>Custo:</p>
			<input type="number" name="cost" required="true" min="1">
			
			<p>Horas de Trabalho:</p>
			<input type="number" name="time" required="true" min="1">
			
			<p>Tipo:</p>
			<select name="type" form="cadastro" required="true">
			<option disabled selected value></option>
				<option value="1">Loira</option>
				<option value="2">Morena</option>
				<option value="3">Ruiva</option>
				<option value="4">Asiática</option>
				<option value="5">Negra</option>
			</select>
			
			<p>Localidade:</p>
			<select name="place" form="cadastro" required="true">
			<option disabled selected value></option>
				<option value="1">Baguncinha Palace</option>
			</select>
			<input type="submit" value="Cadastrar funcionário">
		</form>
	</body>
</HTML>