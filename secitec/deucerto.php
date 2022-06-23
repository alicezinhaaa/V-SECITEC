<?php

	$nome_pessoa = $_POST['nome_pessoa'];
	$email_pessoa = $_POST['email_pessoa'];
	$conexao = new mysqli('localhost','ifpb','ifpb');

	if (!$conexao){
		die('Não foi possível conectar' .  mysql_error());
	}

	$conexao->select_db("secitec");

	$query = "INSERT INTO `secitec`.`participante`(`nome`,`email`) VALUES ('" . $nome_pessoa . "','" .  $email_pessoa . "');";

	if($conexao->query($query) === TRUE){

		echo "Cadastrado com sucesso!";

	}else{
		echo "Erro: " . mysql_error();
	}

	$conexao->close();

?>


<?php  
echo "Seu cadastrado foi realizado com sucesso! ";
'<br/>';

echo "Nome cadastrado: " . $_POST['nome_pessoa'];
'<br/>';
echo "E-mail cadastrado: " . $_POST['email_pessoa'];
?>