<?php
session_start();
$usuariot = $_POST['id'];
$senhat = $_POST['senha'];

include_once("conexao.php");

$result = mysqli_query($conecta, "SELECT * FROM usuario WHERE id = '$usuariot' AND senha = '$senhat' LIMIT 1");
$resultado = mysqli_fetch_assoc($result);

echo $resultado['nome'];

if(empty($resultado)){

	//Mensagem de Erro
	$_SESSION['loginErro'] = "Id ou senha inválido.";

	//Redirecionamento
	header("Location: index.php");
}else{

	//Redirecionamento
	header("Location: select.php");

	//Define os valores atribuidos na sessao do usuario
	$_SESSION['usuarioId'] = $resultado['id'];
	$_SESSION['usuarioSenha'] = $resultado['senha'];
	$_SESSION['usuarioNome'] = $resultado['nome'];
	$_SESSION['usuarioEmail'] = $resultado['email'];
	$_SESSION['usuarioCurso'] = $resultado['curso'];
	$_SESSION['usuarioVeiculo'] = $resultado['veiculo'];
}
?>