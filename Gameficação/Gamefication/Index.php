<?php 
	
	$db="id8089249_bd_gamification";		
	$user="id8089249_root";
	$server="localhost";		
	$pwd="123456";
	$con= @mysqli_connect($server,$user, $pwd, $db) or die ("Falha na conexao".mysqli_error());		
	 
	mysqli_select_db($con,$db) or die("Falha na conexao com banco de dados".mysqli_error($con));
	
?>	

<!DOCTYPE HTML>

<html>
	<head>
		<title>Gamefication</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="../assets/css/main.css" />
		<link rel="stylesheet" href="../css/style.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	
	
	<body>

		<!-- Wrapper -->
			<div  id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<nav>
							<a  style="background-color: black; padding-left: 5%; " id="header" class="logo" href="../index.html"><strong>GAME</strong><span>FICATION</span></a>
						</nav>
					</header>			

				<!-- Main -->
					<body style="margin:5%">
					<?php
						include_once 'conexao_jogo.php';
						$sql="Select * from tb_avaliacao";
						$rs = mysqli_num_rows(mysqli_query($db,$con));		
					?>
											
						<section>
							<h1 class="heading wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms"> <span>CADASTRO DE JOGO</span></h1>	
								<form action="conexao_jogo.php?go=cadastrar" id='formulario' method="post">
								
									    <div class="field">
											<label for="nome_jogo">Nome do jogo</label>
											<input type="text" name="nome_jogo" id="nome_jogo" size=45 maxlength=45 />
										</div>
										
										<div>
										<select for ="avaliado" name="avaliado" id="avaliado">
											<option value='1'>Selecione uma Pessoa</option>
											<option value='2'>Danubia</option>
											<option value='3'>Joao</option>
											<option value='4'>Railton</option>
										</select>
										</div>
										
										<div>
												<label for="genero" name="genero" id="genero">Adaptabilidade</label>
												<input type="radio" name="genero" value="1" id="1"><label for="1"> 1 </label>
												<input type="radio" name="genero" value="2" id="2"><label for="2"> 2 </label>	
												<input type="radio" name="genero" value="3" id="3"><label for="3"> 3 </label>
												<input type="radio" name="genero" value="4" id="4"><label for="4"> Não se aplica </label>	
	
										</div>

										<div>
										
												<label for="assiduidade" name="assiduidade" id="assiduidade">Assiduidade</label>
													<input type="radio" name="assiduidade" value="1" id="assid1"><label for="assid1"> 1 </label>
													<input type="radio" name="assiduidade" value="2" id="assid2"><label for="assid2"> 2 </label>	
													<input type="radio" name="assiduidade" value="3" id="assid3"><label for="assid3"> 3 </label>
													<input type="radio" name="assiduidade" value="4" id="assid4"><label for="assid4"> Não se aplica </label>	
	
											</div>
											<div>
										
											<label for="atencao" name="atencao" id="atencao">Atenção</label>
												<input type="radio" name="atencao" value="1" id="aten1"><label for="aten1"> 1 </label>
												<input type="radio" name="atencao" value="2" id="aten2"><label for="aten2"> 2 </label>	
												<input type="radio" name="atencao" value="3" id="aten3"><label for="aten3"> 3 </label>
												<input type="radio" name="atencao" value="4" id="aten4"><label for="aten4"> Não se aplica </label>	

										</div>
			<div>
										
											<label for="comprometimento" name="comprometimento" id="comprometimento">Comprometimento</label>
												<input type="radio" name="comprometimento[]" value="1" id="acao"><label for="acao"> 1 </label>
												<input type="radio" name="comprometimento[]" value="2" id="aventura"><label for="aventura"> 2 </label>	
												<input type="radio" name="comprometimento[]" value="3" id="corrida"><label for="corrida"> 3 </label>
												<input type="radio" name="comprometimento[]" value="4" id="estrategia"><label for="estrategia"> Não se aplica </label>	

										</div>
										<div>
										
											<label for="comunicação" name="comunicação" id="comunicação">Comunicação</label>
												<input type="radio" name="comunicação[]" value="1" id="acao"><label for="acao"> 1 </label>
												<input type="radio" name="comunicação[]" value="2" id="aventura"><label for="aventura"> 2 </label>	
												<input type="radio" name="comunicação[]" value="3" id="corrida"><label for="corrida"> 3 </label>
												<input type="radio" name="comunicação[]" value="4" id="estrategia"><label for="estrategia"> Não se aplica </label>	

										</div>
										<div>
										
											<label for="dinamismo" name="dinamismo" id="dinamismo">Dinamismo</label>
												<input type="radio" name="dinamismo[]" value="1" id="acao"><label for="acao"> 1 </label>
												<input type="radio" name="dinamismo[]" value="2" id="aventura"><label for="aventura"> 2 </label>	
												<input type="radio" name="dinamismo[]" value="3" id="corrida"><label for="corrida"> 3 </label>
												<input type="radio" name="dinamismo[]" value="4" id="estrategia"><label for="estrategia"> Não se aplica </label>	

										</div>
										<div>
										
											<label for="flexibilidade" name="flexibilidade" id="flexibilidade">Flexibilidade</label>
												<input type="radio" name="flexibilidade[]" value="1" id="acao"><label for="acao"> 1 </label>
												<input type="radio" name="flexibilidade[]" value="2" id="aventura"><label for="aventura"> 2 </label>	
												<input type="radio" name="flexibilidade[]" value="3" id="corrida"><label for="corrida"> 3 </label>
												<input type="radio" name="flexibilidade[]" value="4" id="estrategia"><label for="estrategia"> Não se aplica </label>	

										</div>
										<div>
										
											<label for="iniciativa" name="iniciativa" id="iniciativa">Iniciativa</label>
												<input type="radio" name="iniciativa[]" value="1" id="acao"><label for="acao"> 1 </label>
												<input type="radio" name="iniciativa[]" value="2" id="aventura"><label for="aventura"> 2 </label>	
												<input type="radio" name="iniciativa[]" value="3" id="corrida"><label for="corrida"> 3 </label>
												<input type="radio" name="iniciativa[]" value="4" id="estrategia"><label for="estrategia"> Não se aplica </label>	

										</div>
										<div>
										
											<label for="inovação" name="inovação" id="inovação">Inovação</label>
												<input type="radio" name="inovação[]" value="1" id="acao"><label for="acao"> 1 </label>
												<input type="radio" name="inovação[]" value="2" id="aventura"><label for="aventura"> 2 </label>	
												<input type="radio" name="inovação[]" value="3" id="corrida"><label for="corrida"> 3 </label>
												<input type="radio" name="inovação[]" value="4" id="estrategia"><label for="estrategia"> Não se aplica </label>	

										</div>
										<div>
										
											<label for="interesse" name="interesse" id="interesse">Interesse</label>
												<input type="radio" name="interesse[]" value="1" id="acao"><label for="acao"> 1 </label>
												<input type="radio" name="interesse[]" value="2" id="aventura"><label for="aventura"> 2 </label>	
												<input type="radio" name="interesse[]" value="3" id="corrida"><label for="corrida"> 3 </label>
												<input type="radio" name="interesse[]" value="4" id="estrategia"><label for="estrategia"> Não se aplica </label>	

										</div>
										<div>
										
											<label for="postura" name="postura" id="postura">Postura</label>
												<input type="radio" name="postura[]" value="1" id="acao"><label for="acao"> 1 </label>
												<input type="radio" name="postura[]" value="2" id="aventura"><label for="aventura"> 2 </label>	
												<input type="radio" name="postura[]" value="3" id="corrida"><label for="corrida"> 3 </label>
												<input type="radio" name="postura[]" value="4" id="estrategia"><label for="estrategia"> Não se aplica </label>	

										</div>
										<div>
										
											<label for="organização" name="organização" id="organização">Organização</label>
												<input type="radio" name="organização[]" value="1" id="acao"><label for="acao"> 1 </label>
												<input type="radio" name="organização[]" value="2" id="aventura"><label for="aventura"> 2 </label>	
												<input type="radio" name="organização[]" value="3" id="corrida"><label for="corrida"> 3 </label>
												<input type="radio" name="organização[]" value="4" id="estrategia"><label for="estrategia"> Não se aplica </label>	

										</div>
										<div>
										
											<label for="comunicação" name="comunicação" id="comunicação">Comunicação</label>
												<input type="radio" name="comunicação[]" value="1" id="acao"><label for="acao"> 1 </label>
												<input type="radio" name="comunicação[]" value="2" id="aventura"><label for="aventura"> 2 </label>	
												<input type="radio" name="comunicação[]" value="3" id="corrida"><label for="corrida"> 3 </label>
												<input type="radio" name="comunicação[]" value="4" id="estrategia"><label for="estrategia"> Não se aplica </label>	

										</div>
										<div>
										
											<label for="produtividade" name="produtividade" id="produtividade">Produtividade</label>
												<input type="radio" name="produtividade[]" value="1" id="acao"><label for="acao"> 1 </label>
												<input type="radio" name="produtividade[]" value="2" id="aventura"><label for="aventura"> 2 </label>	
												<input type="radio" name="produtividade[]" value="3" id="corrida"><label for="corrida"> 3 </label>
												<input type="radio" name="produtividade[]" value="4" id="estrategia"><label for="estrategia"> Não se aplica </label>	

										</div>
										<div>
										
											<label for="trabalho" name="trabalho" id="trabalho">Trabalho em Equipe</label>
												<input type="radio" name="trabalho[]" value="1" id="acao"><label for="acao"> 1 </label>
												<input type="radio" name="trabalho[]" value="2" id="aventura"><label for="aventura"> 2 </label>	
												<input type="radio" name="trabalho[]" value="3" id="corrida"><label for="corrida"> 3 </label>
												<input type="radio" name="trabalho[]" value="4" id="estrategia"><label for="estrategia"> Não se aplica </label>	

										</div>

										<div class="field">
											<label for="descricao">DESCRIÇÃO</label>
											<input type="text" name="descricao" id="descricao" size=450 maxlength=450 />
										</div>
										
										<input class="btn btn-default wow bounceIn" data-wow-duration="500ms" data-wow-delay="1300ms" type="submit" name="enviar2" value="cadastrar" role="button" />
										<input type="button" class="btn btn-warning" id="btnUpdate" value="Alterar">
										<input type="button" class="btn btn-danger" id="btnDelete" value="Excluir">
										<input type="button" class="btn btn-secondary" id="btnList" value="Listar jogos">
								</form>
							
							<div class="row">
								<div class="col-sm-12">
									<table id="grid-contatos" class="table table-striped">
										<thead>
											<tr>
												<th scope="col">#</th>
												<th scope="col">NOME</th>
												<th scope="col">Avaliado</th>
												<th scope="col">#</th>
												<th scope="col">#</th>
											</tr>
										</thead>
										
										<tbody id="table-contatos">
											<?	$result = $obj_mysqli->query ("SELECT * FROM 'tb_avaliacao'"); 
											while ($aux_query = $result->fetch_assoc())     
											{   
												echo '<tr>';   
												echo ' <tr>'.$aux_query["id_avaliacao"].'</tr>';   
												echo ' <tr>'.$aux_query["nome_jogo"].'</tr>';   
												echo ' <tr>'.$aux_query["avaliado"].'</tr>';   
												echo ' <td><a href="'.$_SERVER["PHP_SELF"].'?id=' .$aux_query["Id"]. '">  Editar</a></td>';
												echo '</tr>'; 
											}
											?>
										</tbody>
									</table>
								</div>
							</div>
						</section>
					</body>
					<footer class="rodape">
							<div>
								<p>Copyright &copy; 2019 - Todos os direitos reservados. Design e Desenvolvido por Wagner Artur.</p>
							</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>