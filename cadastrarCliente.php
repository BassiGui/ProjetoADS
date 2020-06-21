<?php
session_start();
include("conexao.php");

$nome 		= mysqli_real_escape_string($conexao, trim($_POST['nome']));
$cliente 	= mysqli_real_escape_string($conexao, trim($_POST['cliente']));
$senha 		= mysqli_real_escape_string($conexao, trim(md5($_POST['senha'])));
$cpf 		= mysqli_real_escape_string($conexao, trim($_POST['cpf']));
$endereco 	= mysqli_real_escape_string($conexao, trim($_POST['endereco']));
$rg 		= mysqli_real_escape_string($conexao, trim($_POST['rg']));
$cel 		= mysqli_real_escape_string($conexao, trim($_POST['cel']));

$sql = "select count(*) as total from cliente where cliente = '$cliente'";
$result = mysqli_query($conexao, $sql);
$row = mysqli_fetch_assoc($result);

if($row['total'] == 1) {
	$_SESSION['usuario_existe'] = true;
	header('Location: 6.php');
	exit;
}

$sql = "INSERT INTO cliente (nome, cliente, senha, data_cadastro,cpf,endereco,rg,cel) VALUES ('$nome', '$cliente', '$senha', NOW(),'$cpf', '$endereco', '$rg', '$cel')";
if($conexao->query($sql) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();

header('Location: 6.php');
exit;
?>