<!DOCTYPE html>

<html>



	<head>
		<title>Domestica's</title>

		<meta charset="utf-8">
		
		<link href="https://fonts.googleapis.com/css?family=Montserrat:100,400" rel="stylesheet">  


		<link rel="stylesheet" href="css/styles.css">
		

	</head>


	<body background="img/1.jpg">

						<div id="SLIDE_BG">

				<div id="navigation" class = "navigation"> 
				<ul>
					<li><a href = "logout.php">Logout</a></li>
					
					
				</ul>
			</div>

			<div class = "capa">

				<div class = "barra"> <br><br>
				<h1>Menu do Cliente </h1>
				<h2>Minhas Informações</h2>
				
				<br><br>

				
				<a href = "2.php">Criar Orçamento</a> <br> <br>
			</div>
		
			<div class= "listap">
				<table class="table table-dark">
					  <thead>
					    <tr>
					      <th scope="col">Tipo Serviço</th>
					      <th scope="col">Local de serviço</th>
					      <th scope="col">Quartos</th>
					      <th scope="col">Banheiros</th>
					      <th scope="col">Frequencia</th>
					      <th scope="col">Periodo</th>
					      <th scope="col">Valor</th>
					      <th scope="col">Apagar Orçamento</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr>
					    	<?php

								$conn = mysqli_connect('127.0.0.1', 'root', '' , 'login');
								if  ($conn -> connect_error){
								die ('Não foi possível conectar'. $conn-> connect_error);
							}

							$sql = "SELECT tipo_servico, tipo_local, qtdQuartos, qtdBanheiros, freq_servico, periodo_contrato,valor_servico from servico";
							$result = $conn-> query($sql);

							if ($result-> num_rows >0){
							while ($row = $result -> fetch_assoc()){
							echo "	<tr>
										<td>". $row["tipo_servico"] ."</td>
										<td>". $row["tipo_local"] ."</td>
										<td>". $row["qtdQuartos"] ."</td>
										<td>". $row["qtdBanheiros"] ."</td>
										<td>". $row["freq_servico"] ."</td>
										<td>". $row["periodo_contrato"] ."</td>
										<td>". $row["valor_servico"]."</td>
										<td style='text-align:center;'> <img src = 'img/delete.png' title='Apagar'> </td>
									</tr>";
							
						}
					echo "</table>";
						}
						else {
						echo "Nenhum orçamento no momento" ;
					}
					$conn-> close();


?>

					    </tr>
					    
					  </tbody>
					</table>

			</div>







			</div>

			
		

	</body>

</html>
