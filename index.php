
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
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
          <a href="index.html"> <h1 class="logo"> BAGUNCINHA </h1> </a>
					<?php
						if (!isset($_SESSION)) session_start();

						if (isset($_SESSION['usuario'])) {
							echo "Bem vindo, " . $_SESSION['usuario'];

							echo
								'<form method="post" action="logoff.php">
									<input value="Logoff" type="submit">
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
			<nav class="menu">
				<a class="btn-close"> x </a>
				<ul>
					<li> <a href="index.php"> INICIO                 </a> </li>
					<li> <a href="series.php"> GÊNEROS               </a> </li>
					<li> <a href="acao.php"> FISK BALL CAT           </a> </li>
					<li> <a href="animacao.php"> ASS                 </a> </li>
					<li> <a href="comedia.php"> MASSAGEM ESPANHOLA 	 </a> </li>
					<li> <a href="ficcao.php"> INVERSÃO              </a> </li>
					<li> <a href="guerra.php"> DOMINAÇÃO             </a> </li>
					<li> <a href="romance.php"> BANHO DOURADO        </a> </li>
					<li> <a href="terror.php"> PUSSV                 </a> </li>
			</nav>
		</header>
		<div class="banner">
			<div class="title">
				<h5> BAGUNCINHA </h5>
				<h2> Os conteúdos que você pretende vizualizar podem incluir<br> texto, imagens ou outros materiais para adultos </h2>
        <h3> Esses conteúdos são dirigidos especificamente para pessoas maiores de idade e que, segundo a <br> legislação aplicável, tenham plena capacidade para acessar produtos
        relacionados a sexo e outros.<br> Fica terminantimente proibido o acesso a esses materiais por aqueles que não cumpram <br>tais requisitos. Caso você não atenda a algum dos requesitos anteriormente
      expostos fica obrigado a clicar <br>em Sair. Para acessar o conteudo, é obrigatorio fazer o login. </h3>
			</div>
		</div>

	<script>
	$(".btn-menu").on('click', function(){
		$('.menu').show();
	});
	$(".btn-close").on('click', function(){
		$(".menu").hide();
	});
	</script>
	</body>
</html>
