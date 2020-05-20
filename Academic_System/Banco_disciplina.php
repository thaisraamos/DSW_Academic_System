  <?php



	//AQUI SE ENCONTRA A PARTE DE CADASTRO DE DISCIPLINA, ESSA CLASSE QUE IRÁ DEVIDAMENTE PEGAR OS DADOS JÁ ARMAZENADOS
	// E ENVIAR AO BANCO
	
	
	
    require_once "conexao.php";
	$nome_disiplina = @$_POST['txt_nome_dis'];
	
	
	if($nome_disiplina != "" || $nome_disiplina!=NULL){
		
			$result_usuario = "INSERT INTO DISCIPLINA(NOME) VALUES('".$nome_disiplina."')";
	
			if(mysqli_query($mysqli, $result_usuario)){
				
				echo  "<script>alert('Disciplina Cadastrada!'); window.location.href='Cad_Disciplina.php'</script>";
				
			}
			else{
				
				echo  "<script>alert('Erro!'); window.location.href='Cad_Disciplina.html'</script>";
			}
	}
	
	else{
		
		echo  "<script>alert('Preencha o Campo!'); window.location.href='Cad_Disciplina.php'</script>";
	}

?>