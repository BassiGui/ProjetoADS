<?php
session_start();
include("conexao.php");

$nome 		= mysqli_real_escape_string($conexao, trim($_POST['nome']));
$usuario 	= mysqli_real_escape_string($conexao, trim($_POST['usuario']));
$senha 		= mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$cpf 		= mysqli_real_escape_string($conexao, trim($_POST['cpf']));
$endereco 	= mysqli_real_escape_string($conexao, trim($_POST['endereco']));
$rg 		= mysqli_real_escape_string($conexao, trim($_POST['rg']));
$cel 		= mysqli_real_escape_string($conexao, trim($_POST['cel']));

$sql = "select count(*) as total from usuario where usuario = '$usuario'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: 5.php');
	exit;
}

$sql = "INSERT INTO usuario (nome, usuario, senha, data_cadastro,cpf,endereco,rg,cel) VALUES ('$nome', '$usuario', '$senha', NOW(),'$cpf', '$endereco', '$rg', '$rg')";
if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: 5.php');
exit;
?>