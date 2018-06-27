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
							<input value="Logoff" type="submit" id="cadastro">
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
		<form action="cadastrar.php" method="POST" id="cadastro3">
			<p>Nome:</p>
			<input class="ncad" type="text" name="name" required="true">

			<p>Especialidade:</p>
			<select class="esp" name="esp" form="cadastro" required="true">
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
			<input class="custo" type="number" name="cost" required="true" min="1">

			<p>Horas de Trabalho:</p>
			<input class="ht" type="number" name="time" required="true" min="1">

			<p>Tipo:</p>
			<select class="tipo" name="type" form="cadastro" required="true">
			<option disabled selected value></option>
				<option value="1">Loira</option>
				<option value="2">Morena</option>
				<option value="3">Ruiva</option>
				<option value="4">Asiática</option>
				<option value="5">Negra</option>
			</select>

			<p>Localidade:</p>
			<select class="local" name="place" form="cadastro" required="true">
			<option disabled selected value></option>
				<option value="1">Baguncinha Palace</option>
			</select> <br> <br>
			<input class="btn-cadfunc" type="submit" value="Cadastrar funcionário">
		</form>
		<div class="banner">

			<script>
			$(".btn-menu").on('click', function(){
				$('.menu').show();
			});
			$(".btn-close").on('click', function(){
				$(".menu").hide();
			});
			</script>
	</body>
</HTML>
