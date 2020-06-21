<?php
session_start();
include("conexao.php");

echo "Bem vindo, ".$_SESSION["nome"];

$usuariologado = $_SESSION["cliente_id"];


$tipo_servico 		= mysqli_real_escape_string($conexao, trim($_POST['tipo_servico']));
$tipo_local 		= mysqli_real_escape_string($conexao, trim($_POST['tipo_local']));
$qtdQuartos 		= mysqli_real_escape_string($conexao, trim($_POST['qtdQuartos']));
$qtdBanheiros 		= mysqli_real_escape_string($conexao, trim($_POST['qtdBanheiros']));
$freq_servico 		= mysqli_real_escape_string($conexao, trim($_POST['freq_servico']));
$periodo_contrato	= mysqli_real_escape_string($conexao, trim($_POST['periodo_contrato']));

$valor_servico 		= mysqli_real_escape_string($conexao, trim($_POST['valor']));

$sql2 = " INSERT INTO servico(tipo_servico,tipo_local, qtdQuartos, qtdBanheiros , freq_servico ,periodo_contrato, cliente_id, valor_servico) VALUES ('$tipo_servico','$tipo_local', '$qtdQuartos' , '$qtdBanheiros' , '$freq_servico' ,'$periodo_contrato','$usuariologado', '$valor_servico' )";



if($conexao->query($sql2) === TRUE) {
	$_SESSION['status_cadastro'] = true;
}

$conexao->close();


header('Location: 7.php');



exit;




?>