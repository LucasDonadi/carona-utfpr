<?php
	session_start();
	include_once("../conexao.php");

	$idCarona = $_GET["idCarona"];

	$query = mysqli_query($conecta, "UPDATE carona SET status = '2'
					  WHERE id='$idCarona'");

			if (mysqli_affected_rows($conecta) != 0 ){

			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../suas-caronas.php'>
				<script type=\"text/javascript\">
					alert(\"Você recusou a solicitação!\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../suas-caronas.php'>
				<script type=\"text/javascript\">
					alert(\"Ocorreu um erro, tente novamente!\");
				</script>
			";		   

		}

?>