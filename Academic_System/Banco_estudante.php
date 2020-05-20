 <?php
 
 
 
	//AQUI SE ENCONTRA A PARTE DE CADASTRO DE ESTUDANTES, ESSA CLASSE QUE IRÁ DEVIDAMENTE PEGAR OS DADOS JÁ ARMAZENADOS
	// E ENVIAR AO BANCO PARA A TABELA "ESTUDANTE"
	
	

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

        if ($nome != "" || $nome != NULL && $endereco != "" || $endereco != NULL) {

          $query_aluno = "INSERT INTO estudante(NOME, CEP, RUA, NUMERO, BAIRRO, CIDADE, ESTADO, EMAIL, TELEFONE, COD_DIS) VALUES('" . $nome . "', " . $cep . " , '" . $endereco . "', " . $numero . ", '" . $bairro . "', '" . $cidade . "', '" . $estado . "', '" . $email . "', " . $telefone . "," . $disciplina . ")";


          if (mysqli_query($mysqli, $query_aluno)) {

            echo "<script>alert('Aluno(a) Cadastrado(a) com sucesso'); window.location.href='Cad_Disciplina.php'</script>";
          } else {

            echo "<script>alert('Erro'); window.location.href='Cad_Disciplina.php'</script>";
          }
        }

?>
