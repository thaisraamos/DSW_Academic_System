
<!DOCTYPE html>
<html lang="pt-br">
<head>



<!-- AQUI SE ENCONTRA A PARTE HTML DO CADASTRO DE DISCIPLINAS, A PARTE PHP ONDE SE LOCALIZA O BANCO ESTÁ EM "BANCO_DISCIPLINA"
-->



  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <title>Cadastrar Disciplina</title>
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

	</div>
</header>
  <!--Fecha Top & Menu-->

<div class="container">
<div class="second-column">
  <h2 class="title title-second"><b>Cadastrar Disciplina</b></h2>
  <br>

  <form class="form" method="POST"  action="Banco_disciplina.php">
    <b>Cadastre a Disciplina Aqui!</b>
      <hr><br>
	  
        <form action="Banco_disciplina.php" method="POST">
      <label class="label-input" for="">
        <i class="fas fa-book-open icon-modify"></i>
		
		<input type="text" id="txt_nome_dis" placeholder="Nome da Disciplina" name="txt_nome_dis" required="required"/>
	  </label>

	
      <div class="bnts">
      <button type="submit" class="efeito efeito3"><b>Salvar</b></button>
    </div>

</form>
</form>
</div>


</body>
</html>



