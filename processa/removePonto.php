<?php
session_start();

include_once("../conexao.php");

$id = $_GET["id"];

$query = mysql_query("DELETE FROM ponto WHERE id = $id");

?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
	</head>

	<body>
		<?php
		if (mysql_affected_rows() != 0 ){	
			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL='>
				<script type=\"text/javascript\">
					alert(\"Ponto removido com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../plano/listarPlano.php'>
				<script type=\"text/javascript\">
					alert(\"Ponto não foi removido com Sucesso.\");
				</script>
			";		   

		}

		?>
	</body>
</html>