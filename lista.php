<!DOCTYPE html>
<html>
<head>
<title>wagner</title>
</head>

<body>

<?php

		if(include("conexao_jogo.php")){
		printf("Connect failed: %s\n", mysqli_connect_error());
		exit();
		}
		$sql = mysqli_query("Select * from tb_avaliacao");
	
		if(&result = $mysqli->sql($sql)){
			
		while($dados = $result-> fetch_assoc()){
		        printf ("%s (%s)\n", $row["avaliacao"], $row["nome_jogo"]);
		}
		    $result->close();
		}
		$mysqli->close();

        
        echo $dados["id_avaliacao"];
        echo $dados["nome_jogo"];
		endwhile;
		
?>
</body>

</html>
