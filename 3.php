<?php
session_start();
?>

<!DOCTYPE html>

<html>



	<head>
		<title>Domestica's</title>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="stylesheet" href="css/styles.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:100,400" rel="stylesheet">  
		

	</head>


	<body>
			<div id="SLIDE_BG">

			<div id="navigation" class = "navigation"> 
				<ul>
					
					<li><a href = "0.php">Voltar</a></li>
					
				</ul>
			</div>

			<div class = "capa">

				<div class = "profile-title">
				
					<h1>Login de Clientes </h1> <br> <br>
					<?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                      <p>ERRO: Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
							<div class = "forms">				
								<!--Forms abaixo decorando a tela de login, sem valor ainda, apenas o front, os valores poderão ser puxados por JS no back -->
								<form action="LoginCliente.php" method="POST">
									  <label for="usuario">Email: </label><br>
									  <input type="text" name="usuario" placeholder="Seu e-mail" autofocus=""><br>
									  
									  
									  <label for="senha">Senha:</label><br>
									  <input type="password" name="senha" placeholder="Ex: 123"><br><br>
									  <input type="submit" value="Confirmar">
								</form>
								<br><br>
								<a style = "color: white" href = "">Esqueci a Senha</a> <br> <br>
								<a style = "color: white" href = "5.php">Criar Conta</a>


								<br>
			  </div> 
	    </div> 
	    </div>	
		

	</body>

</html>
