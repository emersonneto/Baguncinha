<!doctype html>
<html>

<head>
<meta charset="UTF-8">
<title> BAGUNCINHA </title>

</head>

<body>
<h1>Fabíola Pinto </h1>
<!--img src="../img/morena1.jpg" alt="morena1" width="800" height="800"-->

<?php 	
		$conexao = mysqli_connect('localhost','root','','baguncinha');
		
		$query = "select * from produto p 
				inner join tipo t on t.id_tipo = p.id_tipo
				inner join especialidade e on e.id_especialidade = p.id_especialidade
				inner join status s on s.id_status = p.id_status
				where nome_produto = 'Fabiola Pinto'
				order by p.nome_produto asc;";
			
		$res = mysqli_query($conexao, $query);
		
		
		$dados = mysqli_fetch_assoc($res);
		
		echo($dados['nome_produto']); 
		echo($dados['custo']);
		echo($dados['qtd_hora']);
		echo($dados['tipo']);
		echo($dados['especialidade']);
		echo($dados['status']);
		mysqli_close($conexao);
	?>

</body>

</html>