<?php 
// Inicia sessões 
session_start(); 
 
// Verifica se existe os dados da sessão de login 
if(!isset($_SESSION["cliente_id"]) || !isset($_SESSION["cliente"])) 
{ 
// Usuário não logado! Redireciona para a página de login 
header("Location: 0.php"); 
exit; 
} 
?>