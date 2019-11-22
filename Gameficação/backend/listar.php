<?php 		
	print_r($_POST);
	$db="id8089249_bd_gamification";		
	$user="id8089249_root";		
	$server="localhost";		
	$pwd="123456";
	$con= @mysqli_connect($server,$user, $pwd, $db) or die ("Falha na conexao".mysqli_error());		
	
	mysqli_select_db($con,$db) or die("Falha na conexao com banco de dados".mysqli_error($con));
		

error_reporting(E_ALL);

			$query1 = mysqli_query($con, "SELECT * FROM tb_avaliacao"); 
			/*echo $sql;*/

			while($rows_cursos = mysqli_fetch_array($query1)){
					echo (json_encode ($rows_cursos));
			}


					
				
		
		
	

?> 