<?php 		
	print_r($_POST);
	$db="id8089249_bd_gamification";		
	$user="id8089249_root";		
	$server="localhost";		
	$pwd="123456";
	$con= @mysqli_connect($server,$user, $pwd, $db) or die ("Falha na conexao".mysqli_error());		
	
	mysqli_select_db($con,$db) or die("Falha na conexao com banco de dados".mysqli_error($con));
	$nome_jogo	= $_POST ['nome_jogo'];			
	$avaliado	= $_POST ['avaliado'];		
	$genero	= $_POST ['genero'];
	$assiduidade	= $_POST ['assiduidade'];
	$atencao	= $_POST ['atencao'];
	$descricao	= $_POST ['descricao'];

error_reporting(E_ALL);

	if(empty($nome_jogo)){			
		echo "<script>alert('O campo NOME DO JOGO é obrigatório.'); history.back();</script>";	
		}elseif(empty($avaliado)){		
		echo "<script>alert('O campo avaliado é obrigatório.'); history.back();</script>";
		} 
		 else{ if(!empty($_POST['genero'])){
			$query1 = mysqli_query ($con, "INSERT INTO tb_avaliacao (nome_jogo, avaliado, genero, assiduidade, atencao, descricao)
			 VALUES ('$nome_jogo' , '$avaliado', '$genero', '$assiduidade', '$atencao', '$descricao')"); 
			/*echo $sql;*/
			print_r(error_get_last());

			echo "<script>alert('Cadastrado com Sucesso.');</script>"; 

					echo ("<script>window.location=\"Index.html?go=cadastrar\"</script>"); 
					
				}
		}
		
	

?> 