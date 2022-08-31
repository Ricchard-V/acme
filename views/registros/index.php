<?php include('views/_layout.php') // Plantilla superior?>
<main>
	<div>
		<h3><?php echo $tipo ?></h3>
	</div>
	<hr>
	<div class="navbar">
			<a href="index.php">Regresar</a>
			
			<div>
			<?php if($tipo == 'Propietarios'): ?>
				<a href="index.php?p=create">Nuevo Propietario</a>
				<a href="index.php?c=index">Ver Conductores</a>
			<?php else: ?>
				<a href="index.php?c=create">Nuevo Conductor</a>  
				<a href="index.php?p=index">Ver Propietarios</a>
			<?php endif; ?>
			</div>
	</div>
		
	</div>
	<table border="solid">
		<tr>
			<td>Documento</td>
			<td>Nombres</td>
			<td>Apellidos</td>
			<td>Telefono</td>
			<td>Cuidad Residencia</td>
			<td>Direccion</td>
			<td colspan="3"></td>

		</tr>
		<?php
		
		if(!empty($datos)):
			foreach($datos as $dato):?>
				<tr>
					<td><?php echo (number_format($dato['cedula'],0,',','.')) ?></td>
					<td><?php echo $dato['nombre'] ?></td>
					<td><?php echo $dato['apellidos'] ?></td>
					<td><?php echo $dato['telefono'] ?></td>
					<td><?php echo $dato['ciudad'] ?></td>
					<td><?php echo $dato['direccion'] ?></td>
					<td><a href="index.php?p=edit&id=<?php echo $dato['id']?>">Editar</a></td>
					<td><a href="index.php?p=delete&id=<?php echo $dato['id']?>">Eliminar</a></td>
				</tr>
			<?php endforeach ?>
		<?php else: ?>
			<tr>
				<td colspan="5">No hay Registros</td>
			</tr>
		<?php endif ?>
	</table>
</main>