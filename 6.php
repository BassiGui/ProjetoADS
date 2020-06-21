<?php
session_start();
?>

<!DOCTYPE html>

<html>



	<head>
		<title>Domestica's</title>

		<meta charset="utf-8">
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

				<div class = "profile-title1">
					<h1>Cadastro: Cliente</h1> <br>
					<div class = "formulario1">
							<div class = "forms">				
								
								<form action="cadastrarCliente.php" method="POST">
								 
								  <label for="fname">Digite o seu Email: </label><br>
								  <input type="text"  name="cliente" placeholder="Ex: abc@hotmail.com"><br><br>
								  <label for="lname">Digite a sua Senha:</label><br>
								  <input name="senha" type="password" placeholder="Senha"><br><br>

								  <label for="lname">Digite o seu Nome:</label><br>
								  <input type="text" name="nome" placeholder="Joao"><br><br>

								  <label for="lname">Digite o seu Endereco:</label><br>
								  <input type="text" name="endereco" placeholder="Ex: Avenida Brasil, 23000"><br><br>

								  <label for="lname">Digite o seu CPF:</label><br>
								  <input type="text" name="cpf" placeholder="123"><br><br>

								  <label for="lname">Digite o seu RG:</label><br>
								  <input type="text" name="rg" placeholder="123"><br><br>

								  <label for="lname">Digite o seu Número do seu Celular:</label><br>
								  <input type="text"  name="cel" placeholder="21 9999-9999"><br><br>

							      
								  <button type="submit">Cadastrar</button>
                        </form>

								</form>
							</div>
			  </div> 
	    </div> 
	    </div>	
		

	</body>

</html>