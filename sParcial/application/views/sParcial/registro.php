<!Doctype html>
<html>
	<head>
		<title>
			Registros
		</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		
	</head>

	<body BACKGROUND="http://localhost/sParcial/imagen/fondo.jpeg">
		<div class="container">
			<div class="row">
				<div class="col col-sm-5">


		<form method="POST" action="<?php echo ('http://localhost/sParcial/registro/guardarRegistros');?>">
				<h1 style= 'color:lightblue'>Registros</h1>
				<div class="form-group input-group">
					<span class= "input-group-addon">Nombre</span>
				
					<input type="text" name="nombre" class="form-control">

				</div>		

				<div class="form-group input-group">
					<span class= "input-group-addon">Descripcion</span>
					<textarea row="4" name="descripcion" class="form-control">
					</textarea>
				</div>		
			
			<div class="form-group input-group">
				<span class= "input-group-addon">Precio</span>
				<input type="number" name="precio" class="form-control">	
			</div>
			<input type="submit" value="Guardar" class="btn btn-info">

		</form>

		

		</div>
	</div>
	<h3 style='color:lightblue'>Registros</h3>
			<table class="table">
				<thead>
					<tr>
						<th style='color:white'>ID</th>
						<th style='color:white'>Nombre</th>
						<th style='color:white'>Descripcion</th>
						<th style='color:white'>Precio</th>
						
					</tr>

				</thead>
				<tbody>
					<?php
					
					foreach ($registros as $registro ) {
						echo "<tr>
							<td style='color:white'>{$registro->id}</td>
							<td style='color:white'>{$registro->nombre}</td>
							<td style='color:white'>{$registro->descripcion}</td>
							<td style='color:white'>{$registro->precio}</td>
							<tr>";
					}

					?>


				</tbody>

			</table>
</div>


	</body>
</html>