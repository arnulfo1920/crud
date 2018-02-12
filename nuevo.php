<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">NUEVO REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar.php" autocomplete="off">
				<div class="form-group">
					<label for="id" class="col-sm-2 control-label">id</label>
					<div class="col-xs-5">
						<input type="text" class="form-control" id="id" name="id" placeholder="id" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">nombre</label>
					<div class="col-xs-5">
						<input type="nombre" class="form-control" id="nombre" name="nombre" placeholder="nombre" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="rfc" class="col-sm-2 control-label">rfc</label>
					<div class="col-xs-5">
						<input type="rfc" class="form-control" id="rfc" name="rfc" placeholder="rfc">
					</div>
				</div>

                 
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">telefono</label>
					<div class="col-xs-5">
						<input type="telefono" class="form-control" id="telefono" name="telefono" placeholder="telefono">
					</div>
				</div>

				
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">email</label>
					<div class="col-xs-5">
						<input type="email" class="form-control" id="email" name="email" placeholder="email">
					</div>
				</div>



				<div class="form-group">
					<label for="estatus" class="col-sm-2 control-label">estatus</label>
					<div class="col-xs-5">
						<select class="form-control" id="estado_civil" name="estatus">
							<option value="activo">activo</option>
							<option value="inactivo">inactivo</option>
						</select>
					</div>
				</div>


				<div class="form-group">
					<label for="direccion" class="col-sm-2 control-label">direccion</label>
					<div class="col-xs-5">
						<input type="direccion" class="form-control" id="direccion" name="direccion" placeholder="direccion">
					</div>
				</div>

				<div class="form-group">
					<label for="estado_civil" class="col-sm-2 control-label">Estado Civil</label>
					<div class="col-xs-5">
						<select class="form-control" id="estado_civil" name="estado_civil">
							<option value="SOLTERO">SOLTERO</option>
							<option value="CASADO">CASADO</option>
							<option value="OTRO">OTRO</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label for="hijos" class="col-sm-2 control-label">¿Tiene Hijos?</label>
					
					<div class="col-xs-5">
						<label class="radio-inline">
							<input type="radio" id="hijos" name="hijos" value="1" checked> SI
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="hijos" name="hijos" value="0"> NO
						</label>
					</div>
				</div>
				
				<div class="form-group">
					<label for="intereses" class="col-sm-2 control-label">INTERESES</label>
					
					<div class="col-xs-5">
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Libros"> Libros
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Musica"> Musica
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Deportes"> Deportes
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Otros"> Otros
						</label>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-success">Guardar</button>
					</div>
				</div>
			</form>
		</div>

	</body>
</html>