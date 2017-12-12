<?php
	session_start();
	include_once("../conexao.php");

	$idCondutor = $_SESSION['usuarioId'];
	$origem = $_POST['origem'];
	$destino = $_POST['destino'];
	$dataHorario = $_POST['dataHorario'];
	$nroVagas = $_POST['nroVagas'];

	$query = mysqli_query($conecta, "INSERT INTO rota (idCondutor,idOrigem,idDestino,dataHorario,nroVagas) 
						  VALUES ('".$idCondutor."','".$origem."','".$destino."','".$dataHorario."','".$nroVagas."')");

			if (mysqli_affected_rows($conecta) != 0 ){

			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../addride.php'>
				<script type=\"text/javascript\">
					alert(\"Carona publicada com sucesso!\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../addride.php'>
				<script type=\"text/javascript\">
					alert(\"Ocorreu um erro, tente novamente!\");
				</script>
			";		   

		}

?>