<!doctype html>
<html>

<head>
<meta charset="UTF-8">
<title> BAGUNCINHA </title>
<link rel="icon" href="../img/fire.png">

</head>

<body>

<h1>Xeila Samanta Raio Lazer </h1>
<!--img src="../img/asiatica1.jpg" alt="asiatica1" width="800" height="800"-->
<?php
		$conexao = mysqli_connect('localhost','root','','baguncinha');
		
		$query = "select * from produto p 
				inner join tipo t on t.id_tipo = p.id_tipo
				inner join especialidade e on e.id_especialidade = p.id_especialidade
				inner join status s on s.id_status = p.id_status
				where nome_produto = 'Xeila Samanta Raio Lazer'
				order by p.nome_produto asc;";
			
		$res = mysqli_query($conexao, $query);
		
		
		$dados = mysqli_fetch_assoc($res);
		
		mysqli_close($conexao);
	?>
	
	
	<table>
		<tr>
			<td>Nome</td>
			<td>Custo</td>
			<td>Quantidade</td>
			<td>Tipo</td>
		</tr>
		<tr>
			<td><?= $dados['nome_produto'] ?></td>
			<td><?= $dados['custo'] ?></td>
			<td><?= $dados['qtd_hora'] ?></td>
			<td><?= $dados['tipo'] ?></td>
		</tr>
	</table>



</body>

</html>