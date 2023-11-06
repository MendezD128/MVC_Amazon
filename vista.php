<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Modelo-vista-controlador</title>
</head>
<body>
	<h1>Tabla Cliente</h1>
	<table border="1">
		<tr>
			<td><strong>Id</strong></td>
			<td><strong>Nombre</strong></td>
			<td><strong>Apellido</strong></td>
			<td><strong>Direccion</strong></td>
			<td><strong>Telefono</strong></td>
			<td><strong>Email</strong></td>
			<td><strong>Fecha de Nacimiento</strong></td>
			<td><strong>Codigo Postal</strong></td>
		</tr>
		<?php
			for($i=0;$i<count($pd);$i++)
			{
				?>
					<tr>
						<td><?php echo $pd[$i]["id"]; ?></td>
						<td><?php echo $pd[$i]["nombre"]; ?></td>
						<td><?php echo $pd[$i]["apellidoP"]; ?></td>
						<td><?php echo $pd[$i]["direccion"]; ?></td>
						<td><?php echo $pd[$i]["telefono"]; ?></td>
						<td><?php echo $pd[$i]["email"]; ?></td>
						<td><?php echo $pd[$i]["fecha_nacimiento"]; ?></td>
						<td><?php echo $pd[$i]["c_postal"]; ?></td>
					</tr>
				<?php
			}
		?>
	</table>
</body>
</html>