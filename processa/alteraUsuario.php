<?php
session_start();
include_once("../conexao.php");
	
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	$senha = isset($_POST['senha']) ? $_POST['senha'] : '';
	$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
	$email = isset($_POST['email']) ? $_POST['email'] : '';
	$curso = isset($_POST['curso']) ? $_POST['curso'] : '';
	$veiculo = isset($_POST['veiculo']) ? $_POST['veiculo'] : '';

$query = mysqli_query($conecta, "UPDATE usuario SET senha = '$senha', nome = '$nome', email = '$email', curso = '$curso', veiculo = '$veiculo' WHERE id='$id'");

	//Define os valores atribuidos na sessao do usuario
	$_SESSION['usuarioId'] = $id;
	$_SESSION['usuarioSenha'] = $senha;
	$_SESSION['usuarioNome'] = $nome;
	$_SESSION['usuarioEmail'] = $email;
	$_SESSION['usuarioCurso'] = $curso;
	$_SESSION['usuarioVeiculo'] = $veiculo;

if (mysqli_affected_rows($conecta) != 0 ){

			echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../perfil.php'>
				<script type=\"text/javascript\">
					alert(\"Usuário editado com sucesso!\");
				</script>
			"; 
		}
		 else{ 	
				echo "
				<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=../perfil.php'>
				<script type=\"text/javascript\">
					alert(\"Ocorreu um erro, tente novamente!\");
				</script>
			";		   

		}
?>