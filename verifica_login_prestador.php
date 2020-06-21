<?php 
// Inicia sessões 
session_start(); 
 
// Verifica se existe os dados da sessão de login 
if(!isset($_SESSION["usuario_id"]) || !isset($_SESSION["usuario"])) 
{ 
// Usuário não logado! Redireciona para a página de login 
header("Location: 0.php"); 
exit; 
} 
?>