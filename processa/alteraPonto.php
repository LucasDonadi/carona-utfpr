<?php
session_start();
include_once("../conexao.php");
include_once("../seguranca.php");


$nomePonto = $_POST["nomePonto"];
$endereco = $_POST["endereco"];
$referencia = $_POST["referencia"];

$query = mysql_query("UPDATE plano SET nome = '$nomePonto', endereco = '$endereco', referencia = '$referencia' 
					  WHERE id='$id'");

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
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../plano/listarPlano.php'>
				<script type=\"text/javascript\">
					alert(\"Ponto editado com Sucesso.\");
				</script>
			";		   
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../plano/listarPlano.php'>
				<script type=\"text/javascript\">
					alert(\"Ponto não foi editado com Sucesso.\");
				</script>
			";		   

		}

		?>
	</body>
</html>