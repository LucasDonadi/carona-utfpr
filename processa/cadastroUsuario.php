<?php
	session_start();

	include_once("../conexao.php");

	$id = $_POST['id'];
	$senha = $_POST['senha'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$curso = $_POST['curso'];
	$veiculo = $_POST['veiculo'];

	$query = mysqli_query($conecta, "INSERT INTO usuario (id,senha,nome,email,curso,veiculo) 
						  VALUES ('".$id."','".$senha."','".$nome."','".$email."','".$curso."','".$veiculo."')");

if (mysqli_affected_rows($conecta) != 0 ){

			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../index.php'>
				<script type=\"text/javascript\">
					alert(\"Usuário cadastrado com sucesso! Faça login para entrar.\");
				</script>
			"; 
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../index.php'>
				<script type=\"text/javascript\">
					alert(\"Ocorreu um erro, tente novamente!\");
				</script>
			";		   

		}
	?>