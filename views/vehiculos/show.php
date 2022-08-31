<main>
	<a href="index.php">Regresar</a>
	<div>
		<h3>Datos del Vehiculo</h3>
		<table border="solid">
			<tr>
				<td>Identificador</td>
				<td>Placa</td>
				<td>Marca</td>
				<td>Color</td>
				<td>Tipo de Vehiculo</td>
				<td colspan="3"></td>

			</tr>
			<?php
			if(!empty($dato)):
				foreach($dato as $vehiculo):?>
					<tr>
						<td><?php echo $vehiculo['id'] ?></td>
						<td><?php echo $vehiculo['placa'] ?></td>
						<td><?php echo $vehiculo['marca'] ?></td>
						<td><?php echo $vehiculo['color'] ?></td>
						<td><?php echo $vehiculo['tipo_vehiculo'] ?></td>

					</tr>
				<?php endforeach ?>
			<?php else: ?>
				<tr>
					<td colspan="5">No hay Registros</td>
				</tr>
			<?php endif ?>
		</table>
	</div>
	<hr>
	<div style="display: inline-flex;">
		<div>
			<h3>Datos del Conductor</h3>
			<table border="solid">
				<tr>
					<td>Documento</td>
					<td>Nombres</td>
					<td>Apellidos</td>
					<td>direccion</td>
					<td>Ciudad</td>
					<td>Telefono</td>

				</tr>
				<?php
				if(!empty($dato)):
					foreach($conductor as $c):?>
						<tr>
							<td><?php echo $c['cedula'] ?></td>
							<td><?php echo $c['nombre'].' '.$c['nombre_2'] ?></td>
							<td><?php echo $c['apellidos'] ?></td>
							<td><?php echo $c['direccion'] ?></td>
							<td><?php echo $c['ciudad'] ?></td>
							<td><?php echo $c['telefono'] ?></td>

						</tr>
					<?php endforeach ?>
				<?php else: ?>
					<tr>
						<td colspan="5">No hay Registros</td>
					</tr>
				<?php endif ?>
			</table>
		</div>
			<div style="margin: 0 100px;">
				<h3>Datos del Propietario</h3>
				<table border="solid">
					<tr>
						<td>Documento</td>
						<td>Nombres</td>
						<td>Apellidos</td>
						<td>direccion</td>
						<td>Ciudad</td>
						<td>Telefono</td>

					</tr>
					<?php
					if(!empty($dato)):
						foreach($propietario as $c):?>
							<tr>
								<td><?php echo $c['cedula'] ?></td>
								<td><?php echo $c['nombre'].' '.$c['nombre_2'] ?></td>
								<td><?php echo $c['apellidos'] ?></td>
								<td><?php echo $c['direccion'] ?></td>
								<td><?php echo $c['ciudad'] ?></td>
								<td><?php echo $c['telefono'] ?></td>

							</tr>
						<?php endforeach ?>
					<?php else: ?>
						<tr>
							<td colspan="5">No hay Registros</td>
						</tr>
					<?php endif ?>
				</table>
			</div>
	</div>
</main>
