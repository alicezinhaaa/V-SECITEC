<?php

	$nome_atividade = $_POST['nome_atividade'];
	$conexao = new mysqli('localhost','ifpb','ifpb');

	if (!$conexao){
		die('Não foi possível conectar' .  mysql_error());
	}

	$conexao->select_db("secitec");

	$query = "INSERT INTO `secitec`.`atividades`(`nome_atividade`) VALUES ('" . $nome_atividade . "');";

	if($conexao->query($query) === TRUE){

		echo "Atividade cadastrada com sucesso!";

	}else{
		echo "Erro: " . mysql_error();
	}

	$conexao->close();

?>


<?php  
echo "Atividade cadastrada: " . $_POST['nome_atividade'];
?>