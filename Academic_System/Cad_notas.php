<!DOCTYPE html>
<html lang="pt-br">
<head>



<!-- AQUI SE ENCONTRA A PARTE DE CADASTRO DE NOTAS E SELEÇÃO DO ALUNO A QUAL AS NOTAS IRÃO PERTENCER
-->



  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <title>Cadastrar Notas</title>
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>

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
	   
	</div>
	</header>
  <!--Fecha Top & Menu-->

<div class="container">
<div class="second-column">
  <h2 class="title title-second"><b>Cadastrar Notas</b></h2>
  <br>

  <form class="form" method="POST" action="Cad_notas.php">
    <b>Cadastre As Notas Aqui!</b>
      <hr><br>
	  
        <form action="Cad_notas.php" method="POST">
     
		<label class="label-input" for="">
              <i class="fas fa-sort-numeric-up icon-modify"></i>
              <input type="number" id="txt_a1" placeholder="Primeira Avaliação" name="txt_a1"/>
        </label>
		
		<label class="label-input" for="">
              <i class="fas fa-sort-numeric-up icon-modify"></i>
              <input type="number" id="txt_a2" placeholder="Segunda Avaliação" name="txt_a2"/>
        </label>
		
		<label class="label-input" for="">
              <i class="fas fa-sort-numeric-up icon-modify"></i>
              <input type="number" id="txt_a3" placeholder="Terceira Avaliação" name="txt_a3"/>
        </label>
		
		<label class="label-input" for="">
              <i class="fas fa-sort-numeric-up icon-modify"></i>
              <input type="number" id="txt_a2" placeholder="Informe o RA do Aluno" name="txt_a3" />
        </label>
		
</form>
</form>
		
		<form class="form" method="POST" action="Tabela_Est.php">
		</td><td><button type="submit" class="efeito efeito3"><b>Verificar RA</b></button>
		</form>
		
		<?php
		
		 require_once "conexao.php";
	
			$a1 = @$_POST['txt_a1'];
			$a2 = @$_POST['txt_a2'];
			$a3 = @$_POST['txt_a3'];
			$est = @$_POST['estudante'];
			
		if($a1!=""|| $a2!="" || $a3!="" || $a1!=NULL || $a2!=NULL || $a3!=NULL){

		
			
			mysqli_free_result($resultado);
			
			
			$result_notas = "INSERT INTO NOTA(P_AVA, S_AVA, F_AVA, COD_EST) VALUES(".$a1.",".$a2.",".$a3.",".$est.")";
			
					if(mysqli_query($mysqli, $result_notas)){
						
						echo  "<script>alert('Notas inseridas!'); window.location.href='Cad_notas.php'</script>";
						
					}
					else{
						
						echo  "<script>alert('Erro!'); window.location.href='Cad_notas.php'</script>";
					}
			
		}	
			
		?>
		

		<form class= "form" action="Cad_notas.php" method="POST">
				</td><td><button type="submit" class="efeito efeito3"><b>Salvar</b></button>
		</form>		

</div>


</body>
</html>



