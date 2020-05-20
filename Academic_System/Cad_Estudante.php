<!DOCTYPE html>
<html lang="pt-br">



<!-- AQUI SE ENCONTRA A PARTE DE VERIFICAÇÃO DE CEP SEGUNDO O SITE https://viacep.com.br/ws/ E O PREENCHIMENTO DOS CAMPOS 
	COM OS DADOS RETORNADOS PELO SITE, O CADASTRO DO NOVO ESTUDANTE É FINALIZADO EM "Banco_estudante"
-->




<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <title>Cadastrar Estudante</title>
  
  <link rel="stylesheet" type="text/css" href="index.css">
  <link rel="stylesheet" href="menu.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>

<body>
	<?php

      $nome = @$_POST['txt_nome'];
      $telefone = @$_POST['txt_telefone'];
      $cep = @$_POST['cep'];
      $email = @$POST['txt_email'];
      $numero = @$_POST['txt_num'];
      $endereco = @$_POST['txt_end'];
      $bairro  = @$_POST['txt_bairro'];
      $cidade = @$_POST['txt_cidade'];
      $estado  = @$_POST['txt_estado'];
      $disciplina = @$_POST['txt_disciplina'];

      if ($nome != "" || $nome != NULL) {

        require_once "conexao.php";



        if ($cep != '') {

          $arq = file_get_contents('https://viacep.com.br/ws/' . $cep . '/json/');

          $json = json_decode($arq);

          $cep = @$_POST['cep'];
          $endereco = $json->logradouro;
          $bairro  = $json->bairro;
          $cidade = $json->localidade;
          $estado  = $json->uf;
        }
      }
      ?>


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
      <h2 class="title title-second"><b>Cadastrar Aluno</b></h2><br>
      <br>

      <form class="form" method="POST" action="Cad_Estudante.php">
        <b>Identificação do Aluno</b>
        <hr><br>

        <label class="label-input" for="">
          <i class="far fa-user icon-modify"></i>
          <input type="text" name="txt_nome" id="txt_nome" size="30" placeholder="Ex:Fulado" value="<?php echo $nome; ?>" required>
        </label>

        <label class="label-input" for="">
          <i class="far fa-envelope icon-modify"></i>
          <input type="email" name="txt_email" id="txt_email" placeholder="E-mail" maxlength="50" value="<?php echo $email; ?>">
        </label>

        <label class="label-input" for="">
          <i class="fas fa-sort-numeric-up icon-modify"></i>
          <input type="number" id="txt_telefone" name="txt_telefone" placeholder="Telefone (sem caracterés especiais)" min="0" maxlength="11" required value="<?php echo $telefone; ?>">
        </label>

        <br>
        <b>Endereço do Aluno</b>
        <hr>

        <label class="label-input" for="">
          <i class="fas fa-list-ol icon-modify"></i>
          <input type="number" id="txt_cep" name="cep" placeholder="CEP" value="<?php echo $cep; ?>">

        </label>

        </td>
        <td><button type="submit" class="efeito efeito3"><b>Verificar CEP</b></button>


        <?php

		require_once "conexao.php";
	
        $nome = @$_POST['txt_nome'];
        $telefone = @$_POST['txt_telefone'];
        $cep = @$_POST['cep'];
        $email = @$POST['txt_email'];
        $numero = @$_POST['txt_num'];
        $endereco = @$_POST['txt_end'];
        $bairro  = @$_POST['txt_bairro'];
        $cidade = @$_POST['txt_cidade'];
        $estado  = @$_POST['txt_estado'];
        $disciplina = @$_POST['txt_disciplina'];
		
        if ($cep != '') {

          $arq = file_get_contents('https://viacep.com.br/ws/' . $cep . '/json/');

          $json = json_decode($arq);

          $cep = @$_POST['cep'];
          $endereco = $json->logradouro;
          $bairro  = $json->bairro;
          $cidade = $json->localidade;
          $estado  = $json->uf;
		  
		  echo '<label class="label-input" for="">';
          echo '<i class="fas fa-map-marked-alt icon-modify"></i>';
          echo '<input type="text" id="txt_end" value="' . $endereco . '" disabled >';
          echo '</label>';
          echo '<label class="label-input" for="">';
          echo '<i class="fas fa-sort-numeric-up icon-modify"></i>';
          echo '<input type="number" id="txt_num" placeholder="Número" min="0" max="99999">';
          echo '</label>';
          echo '<label class="label-input" for="">';
          echo '<i class="fas fa-map-pin icon-modify"></i>';
          echo '<input type="text" id="txt_bairro" value="' . $bairro . '" disabled>';
          echo '</label>';
          echo '<label class="label-input" for="">';
          echo '<i class="fas fa-map-pin icon-modify"></i>';
          echo '<input type="text" id="txt_estado" value="' . $estado . '" disabled>';
          echo '</label>';
          echo '<label class="label-input" for="">';
          echo '<i class="fas fa-location-arrow icon-modify"></i>';
          echo '<input type="text" id="txt_cidade" value="' . $cidade . '" disabled>';
          echo '</label>';
          echo '<label class="label-input" for="">';
          echo '<i class="fas fa-sort-numeric-up icon-modify"></i>';
          echo '<input type="number" placeholder="Código da Disciplina" id="txt_disciplina" value="' . $disciplina . '" >';
          echo '</label>';
		  echo '<form class="form" method="POST" action="Tabela_Dis.php">';
		  echo '</td>';
		  echo '<td><button type="submit" class="efeito efeito3"><b>Verificar Disciplinas</b></button>';
		  echo '</form>';
		  
		}
        

        ?>
        </td>
		
		
		<form class="form" method="POST" action="Banco_estudante.php">
		
        <td><button type="submit" class="efeito efeito3"><b>Salvar</b></button>


      </form>
    </div>


</body>

</html>