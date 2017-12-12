<?php
	session_start();
	include_once("../conexao.php");

	$idRota = $_GET["idRota"];
	$idUsuario = $_SESSION['usuarioId'];
	$status = 0;

	$query = mysqli_query($conecta, "INSERT INTO carona (idRota, idUsuario, status) 
						  VALUES ('".$idRota."','".$idUsuario."','".$status."')");

			if (mysqli_affected_rows($conecta) != 0 ){

			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../status.php'>
				<script type=\"text/javascript\">
					alert(\"Solicitação enviada com sucesso! Aguarde a confirmação.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../status.php'>
				<script type=\"text/javascript\">
					alert(\"Ocorreu um erro, tente novamente!\");
				</script>
			";		   

		}

?>