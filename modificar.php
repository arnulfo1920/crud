<?php
	require 'conexion.php';
	
	$id = $_GET['id'];
	
	$sql = "SELECT * FROM clientes WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
?>
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
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
				<div class="form-group">
					<label for="id" class="col-sm-2 control-label">id</label>
					<div class="col-xs-5">
						<input type="text" class="form-control" id="id" name="id" placeholder="id" value="<?php echo $row['id']; ?>" required>
					</div>
				</div>
				
				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
				
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">nombre</label>
					<div class="col-xs-5">
						<input type="nombre" class="form-control" id="nombre" name="nombre" placeholder="nombre" value="<?php echo $row['nombre']; ?>"  required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="rfc" class="col-sm-2 control-label">rfc</label>
					<div class="col-xs-5">
						<input type="rfc" class="form-control" id="rfc" name="rfc" placeholder="rfc" value="<?php echo $row['rfc']; ?>" >
					</div>
				</div>
				
                <div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">telefono</label>
					<div class="col-xs-5">
						<input type="telefono" class="form-control" id="telefono" name="telefono" placeholder="telefono" value="<?php echo $row['telefono']; ?>" >
					</div>
				</div>

				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">email</label>
					<div class="col-xs-5">
						<input type="email" class="form-control" id="email" name="email" placeholder="email" value="<?php echo $row['email']; ?>" >
					</div>
				</div>

                 
                   <div class="form-group">
					<label for="estatus" class="col-sm-2 control-label">Estatus</label>
					<div class="col-xs-5">
						<select class="form-control" id="estatus" name="estatus">
							<option value="activo" <?php if($row['estatus']=='activo') echo 'selected'; ?>>activo</option>
							<option value="inactivo" <?php if($row['estatus']=='inactivo') echo 'selected'; ?>>inactivo</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label for="direccion" class="col-sm-2 control-label">direccion</label>
					<div class="col-xs-5">
						<input type="direcccion" class="form-control" id="direcccion" name="direcccion" placeholder="direcccion" value="<?php echo $row['direcccion']; ?>" >
					</div>
				</div>


				<div class="form-group">
					<label for="estado_civil" class="col-sm-2 control-label">Estado Civil</label>
					<div class="col-xs-5">
						<select class="form-control" id="estado_civil" name="estado_civil">
							<option value="SOLTERO" <?php if($row['estado_civil']=='SOLTERO') echo 'selected'; ?>>SOLTERO</option>
							<option value="CASADO" <?php if($row['estado_civil']=='CASADO') echo 'selected'; ?>>CASADO</option>
							<option value="OTRO" <?php if($row['estado_civil']=='OTRO') echo 'selected'; ?>>OTRO</option>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<label for="hijos" class="col-sm-2 control-label">¿Tiene Hijos?</label>
					
					<div class="col-xs-5">
						<label class="radio-inline">
							<input type="radio" id="hijos" name="hijos" value="1" <?php if($row['hijos']=='1') echo 'checked'; ?>> SI
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="hijos" name="hijos" value="0" <?php if($row['hijos']=='0') echo 'checked'; ?>> NO
						</label>
					</div>
				</div>
				
				<div class="form-group">
					<label for="intereses" class="col-sm-2 control-label">INTERESES</label>
					
					<div class="col-xs-5">
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Libros" <?php if(strpos($row['intereses'], "Libros")!== false) echo 'checked'; ?>> Libros
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Musica" <?php if(strpos($row['intereses'], "Musica")!== false) echo 'checked'; ?>> Musica
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Deportes" <?php if(strpos($row['intereses'], "Deportes")!== false) echo 'checked'; ?>> Deportes
						</label>
						
						<label class="checkbox-inline">
							<input type="checkbox" id="intereses[]" name="intereses[]" value="Otros" <?php if(strpos($row['intereses'], "Otros")!== false) echo 'checked'; ?>> Otros
						</label>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="index.php" class="btn btn-info">Regresar</a>
						<button type="submit" class="btn btn-success">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>