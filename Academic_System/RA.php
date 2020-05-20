<?php

	require_once "conexao.php";
	 
	$acha = "SELECT * FROM NOTA WHERE COD_EST =".$est.";";

	
	$con = $mysqli->query($acha) or die ($mysli->error);
?>



<?php while($dado = $con->fetch_array())

//AQUI SE ENCONTRA A PARTE QUE IRÁ VERIFICAR O RA (COD_DIS) DO ALUNO NO BANCO DE DADOS, 
//E RETORNARÁ PARA A CLASSE "ALTERA_NOTA" PARA FINALIAR A ALTERAÇÃO
		
		 $est = @$_POST['estudante'];

				
			if(mysqli_query($mysqli, $acha)){
						
				echo '<label class="label-input" for="">
				  <i class="fas fa-sort-numeric-up icon-modify"></i>
				  <input type="number" id="txt_a1" placeholder="Primeira Avaliação" name="txt_a1 value="'. echo $dado['P_AVA']'/>
				  </label>
			
				  <label class="label-input" for="">
				  <i class="fas fa-sort-numeric-up icon-modify"></i>
				  <input type="number" id="txt_a2" placeholder="Segunda Avaliação" name="txt_a2 value="'. echo $dado['S_AVA']'/>
				  </label>
			
			      <label class="label-input" for="">
				  <i class="fas fa-sort-numeric-up icon-modify"></i>
				  <input type="number" id="txt_a3" placeholder="Terceira Avaliação" name="txt_a3 value="'. echo $dado['F_AVA']'/>
				  </label>
						  
				  <script>alert("Aluno Encontrado!"); window.location.href="Altera_Nota.php"</script>';
								
					}
			else{
						
				echo  "<script>alert('Erro!'); window.location.href='Altera_Nota.php'</script>";
			
			}
		 
		?>