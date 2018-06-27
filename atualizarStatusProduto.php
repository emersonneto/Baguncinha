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

		<header class="cabecalho">
			<a href="index.php"> <h1 class="logo"> BAGUNCINHA </h1> </a>
			<button class="btn-menu"> <img src="https://png.icons8.com/menu/ios7/25"> </button>

	<div class="bnv">
	<?php
				if (!isset($_SESSION)) session_start();

				if (isset($_SESSION['usuario'])) {
					$menu = true;
					echo "Bem vindo, " . $_SESSION['usuario'];

					echo
						'<form method="post" action="logoff.php">
						<input value="Logoff" type="submit" id="cadastro2">
						</form>';
				}
				else{
					echo
						' <form class="login" method="POST" action="login.php">
							<label>Usuário:</label>
							<input type="text" name="usuario">

							<label>Senha:</label>
							<input type="password" name="senha">

							<input type="submit" id="cadastro">
						</form>
						';

				}
			?>
	</div>
	<nav class="menu">
		<a class="btn-close"> x </a>
		<ul>
			<li> <a href="index.php"> 	 INICIO             </a> </li>
			<li> <a href="contato.php">  CONTATO            </a> </li>
			<li> <a href="casa.php"> 	 SOBRE A CASA       </a> </li>
			<li> <a href="trabalhe.php"> TRABALHE CONOCO    </a> </li>
			<?php if($menu){
				echo "<li> <a href='dash.php'> CADASTRAR  </a> </li>";
				echo "<li> <a href='logoff.php'> 	SAIR                 	</a> </li>";

			}?>
		</ul>
	</nav>
</header>

		<div class="banner">
		<form action="atualizar.php" method="POST" id="atualizar">
			<p>Produto:</p>
			<select class="prod" name="produto" form="atualizar" required="true">
			    <option disabled selected value></option>
				<option value="1">Xeila Samanta Raio Lazer</option>
				<option value="2">Pamela Rodrigues</option>
				<option value="3">Amanda Barros</option>
				<option value="4">Fabiola Pinto</option>
				<option value="5">Mariana Oliveira</option>
			</select>

			<p>Status:</p>
			<select class="status" name="status" form="atualizar" required="true">
			    <option disabled selected value></option>
				<option value="1">Disponível</option>
				<option value="2">Indisponível</option>
				<option value="3">Ocupada</option>
				<option value="4">Em Férias</option>
			</select> <br> <br>

			<input class="btn-cadfunc" type="submit" value="Atualizar Status">
		</form>
	</div>
	</body>
</HTML>
