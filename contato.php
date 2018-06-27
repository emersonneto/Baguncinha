<html>
	<head>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
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
					<li> <a href="index.php"> INICIO                 </a> </li>
					<li> <a href="contato.php"> CONTATO               </a> </li>
					<li> <a href="casa.php"> SOBRE A CASA           </a> </li>
					<li> <a href="trabalhe.php"> TRABALHE CONOCO    </a> </li>
					<?php if($menu){
						echo "<li> <a href='dash.php'> CADASTRAR  </a> </li>";
						echo "<li> <a href='logoff.php'> 	SAIR                 	</a> </li>";

					}?>
				</ul>
			</nav>

		</header>

		<div class="banner">
			<div class="title">

		<form action="<? $PHP_SELF; ?>" method="POST">

				<div class="form-group">
    			<label for="exampleInputEmail1">NOME:</label>
    			<input type="text" name="nome" class="form-control" id="exampleInputEmail1">
  			</div>

  			<div class="form-group">
    			<label for="exampleInputPassword1">E-MAIL:</label>
    			<input type="text" name="email" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp">
  			</div>

				<div class="form-group">
    			<label for="exampleInputPassword1">TELEFONE:</label>
    			<input type="number" name="telefone" class="form-control" id="exampleInputPassword1">
  			</div>

  			<div class="form-group">
    			<label for="exampleSelect1">TIPO DE CONTATO:</label>
    			<select class="form-control" id="exampleSelect1">
      			<option>RECLAMAÇÕES</option>
      			<option>INFORMAÇÕES</option>
      			<option>SUGESTÕES</option>
    			</select>
  			</div>

				<div class="form-group">
    			<label for="exampleTextarea">MENSAGEM:</label>
    			<textarea type="text" name="mensagem" class="form-control" id="exampleTextarea" rows="3"></textarea>
  			</div>


  			<button type="submit" class="btn btn-primary">Submit</button>

			  <div class="vtem-block-inside clearfix"> Baguncinha © 2018. Todos os direitos Reservados. </div> <br>
</form>

				</div>
			</div>
			<script src="js/script.js"></script>
		</body>
</html>
