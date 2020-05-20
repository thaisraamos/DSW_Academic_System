<?php

	require_once "conexao.php";

	$consulta = "SELECT * FROM disciplina";
	
	$con = $mysqli->query($consulta) or die ($mysli->error);
?>

<html lang="pt-br">
<head>



<!-- AQUI SE ENCONTRA A TABELA PARA EXIBIR AS DISCIPLINAS CADASTRADAS, UTILIZADA NO CADASTRO DE ALUNOS PARA QUE
	O USUARIO POSSA VERIFICAR SE O ID DA DISCIPLINA ESTÁ CORRETO
-->




  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <title>Tabela de Disciplinas</title>
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body>
  <!--Top & Menu-->
  
<header>
<div id="logo">
<a href="index.html"><img src="imagens/Logo.jpeg"></a>
</div>
<div class="bnts">

  <a href="Cad_Disciplina.php"><button type="button" class="efeito efeito1"><b>Cadastrar Disciplina</b></button></a>
  <a href="Cad_Estudante.php"><button type="button" class="efeito efeito2"><b>Cadastrar Aluno</b></button></a>
  <a href="Cad_notas.php"><button type="button" class="efeito efeito2"><b>Cadastrar Notas<b></button></a>
  <a href="Altera_Nota.php"><button type="button" class="efeito efeito2"><b>Alterar Notas<b></button></a>  
  <a href="Tabela_Est.php"><button type="button" class="efeito efeito2"><b>Relação de Alunos<b></button></a>  
 

<!-- <a href="publicar.html"><button type="button" class="efeito efeito3"><b>Cadastrar Notas<b></button></a> 
	 <a href="publicar.html"><button type="button" class="efeito efeito3"><b>Relação de Alunos<b></button></a> -->
	 
	 
</div>
</header>
  <!--Fecha Top & Menu-->

<div class="container">
<div class="second-column">
  <h2 class="title title-second"><b>Verificar Disciplina</b></h2>
  
  <br>
<form action="Cad_Estudante.php" method="POST">
  <body>
  
	<table>
		<tr>
			<td>CÓDIGO</td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td>NOME</td>
			
		</tr>
		
		<?php while($dado = $con->fetch_array()){
		
			
			?>
			<tr>
				<td id="txt_a2"> <?php echo $dado["COD_DIS"];?> </td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td id="txt_a2"> <?php echo $dado["NOME"];?> </td>
			</tr>
			<?php
		}
		?>
	
	</table
  
</td><td><button type="submit" class="efeito efeito3"><b>Voltar</b></button>

</div>


</body>
</html>








