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
					<li><a href = "7.php">Lista de Orçamentos</a></li>
					
					
				</ul>
			</div>
          

			<div class = "capa">

				<div class = "profile-title">
					<h1>Solicitar Orçamento </h1>
				<div class = "formulario">
					<h4> Faça seu Pedido </h4>

					<br>
							  <form action="cadastrarServico.php" method="POST">
								    <label for="">Selecione o tipo de serviço: </label> <br>
								    <select  name="tipo_servico">
								      <option  value="Empresarial">Empresarial</option>
								      <option  value="Comum">Comum</option>
								      <option  value="Extensivo">Extensivo</option>
								    </select> 

							    <br><br>

							    <label for="">Selecione o tipo de local: </label>  <br>
							    <select  name="tipo_local">
							      <option value="Apartamento">Apartamento</option>
							      <option value="Casa">Casa </option>
							      <option value="Comercial">Comercial</option>
							     </select>

							  
							    <br><br>

							  <label for="">Quantidade de Quartos do Imóvel: </label> <br>
							    <select  name="qtdQuartos">
							      <option value="1">1</option>
							      <option value="2">2</option>
							      <option value="3">3 ou mais</option>
							    </select>
							
							     <br><br>

							  <label for="">Quantidade de Banheiros do Imóvel: </label> <br>
							    <select name="qtdBanheiros">
							      <option value="1">1</option>
							      <option value="2">2</option>
							      <option value="3">3 ou mais</option>
							    </select>

							    <br><br>

							    <label for="">Selecione a frequência do serviço: </label>  <br>
							    <select name="freq_servico">
							      <option value="Unico">Único</option>
							      <option value="Diario">Diário</option>
							      <option value="Uma vez Por Semana">Uma vez Por Semana</option>
							      <option value="Duas vezes por Semana">Duas vezes por Semana</option>
							      <option value="Mensalista">Mensalista</option>
							    </select>

							    <br><br>

							    <label for="">Selecione o período de contratação: </label>  <br>
							    <select name="periodo_contrato">
							      <option value="Imediato">Imediato</option>
							      <option value="Nos próximos 7 dias">Nos próximos 7 dias</option>
							      <option value="Nos próximos 30 dias">Nos próximos 30 dias</option>
							    </select>  <br> <br>

								  <label for="lname">Sugira valor para o serviço:</label><br>
								  <input type="text" name="valor" placeholder="123"><br><br>


							    <button type="submit">Cadastrar</button>
							</form>
							  

						     

							 </form>
							</div>

							  


							


			  </div> 


	    </div> 
	    </div>	
		

	</body>

</html>