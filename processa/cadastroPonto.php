<?php
	session_start();
	include_once("../conexao.php");

	$nomePonto = $_POST['nomePonto'];
	$endereco = $_POST['endereco'];
	$referencia = $_POST['referencia'];

	$query = mysql_query("INSERT INTO ponto (nomePonto,endereco,referencia) 
						  VALUES ('".$nomePonto."','".$endereco."','".$referencia."')");
	if(mysql_affected_rows() != 0){
		//header("Location: ../plano/listarPlano.php");
	}
	?>