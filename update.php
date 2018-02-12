<?php
	
	require 'conexion.php';

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$rfc = $_POST['rfc'];
	$telefono = $_POST['telefono'];
    $email= $_POST['email'];
	$estatus = $_POST['estatus'];
	$direcccion = $_POST['direcccion'];
    $estado_civil = $_POST['estado_civil'];
	$hijos = isset($_POST['hijos']) ? $_POST['hijos'] : 0;
	$intereses = isset($_POST['intereses']) ? $_POST['intereses'] : null;
	
	$arrayIntereses = null;
	
	$num_array = count($intereses);
	$contador = 0;
	
	if($num_array>0){
		foreach ($intereses as $key => $value) {
			if ($contador != $num_array-1)
			$arrayIntereses .= $value.' ';
			else
			$arrayIntereses .= $value;
			$contador++;
		}
	}
	
	$sql = "UPDATE clientes SET id='$id', nombre='$nombre', rfc='$rfc',telefono='$telefono',email='$email',estatus='$estatus',direcccion='$direcccion', estado_civil='$estado_civil', hijos='$hijos', intereses='$arrayIntereses' WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	
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
				<div class="row" style="text-align:center">
				<?php if($resultado) { ?>
				<h3>REGISTRO MODIFICADO</h3>
				<?php } else { ?>
				<h3>ERROR AL MODIFICAR</h3>
				<?php } ?>
				
				<a href="index.php" class="btn btn-success">Regresar</a>
				
				</div>
			</div>
		</div>
	</body>
</html>
