<?php
session_start();
include('conexao.php');

if(empty($_POST['usuario']) || empty($_POST['senha'])) {
	header('Location: 3.php');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha']);

$sql = mysqli_query($conexao, "select nome, cliente_id from cliente where cliente = '{$usuario}' and senha = md5('{$senha}' )" );

$bd = mysqli_fetch_assoc($sql);


if (!empty($bd)) {
    $_SESSION["nome"]  = $bd["nome"];
    $_SESSION["cliente_id"]    = $bd["cliente_id"];
    header('location:2.php');
}

else{
    header('location:3.php');
}
?>