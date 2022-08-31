<html>
	<head></head>
	<body>
		<header></header>
		<main>
			<a href="index.php?v=create">Nuevo vehiculo</a>
			<table border="solid">
				<tr>
					<td>placa</td>
					<td>Marca</td>
					<td>Color</td>
					<td>Propietario</td>
					<td>Conductor</td>
					<td colspan="3"></td>

				</tr>
				<?php
				if(!empty($dato)):
					foreach($dato as $key => $vehiculo):?>
						<tr>
							<td><?php echo $vehiculo['placa'] ?></td>
							<td><?php echo $vehiculo['marca'] ?></td>
							<td><?php echo $vehiculo['color'] ?></td>
							<td><?php echo $vehiculo['p_nombre'].' '.$vehiculo['p_nombre2'].' '.$vehiculo['p_apellidos'] ?></td>
							<td><?php echo $vehiculo['c_nombre'].' '.$vehiculo['c_nombre2'].' '.$vehiculo['c_apellidos'] ?></td>
							<td><a href="index.php?v=show&id=<?php echo $vehiculo['id']?>">Detalles</a></td>
							<td>Editar</td>
							<td>Eliminar</td>
						</tr>
					<?php endforeach ?>
				<?php else: ?>
					<tr>
						<td colspan="5">No hay Registros</td>
					</tr>
				<?php endif ?>
			</table>
		</main>
		<footer></footer>
	</body>
</html>