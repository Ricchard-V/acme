<?php
header('Content-type:application/xls');
header('Content-Disposition: attachment; filename='.date('Ymd').'vehiculos.xls');
?>

<table border="solid">
	<tr>
		<td>placa</td>
		<td>Marca</td>
		<td>Color</td>
		<td>Propietario</td>
		<td>Conductor</td>
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
			</tr>
		<?php endforeach ?>
	<?php else: ?>
		<tr>
			<td colspan="5">No hay Registros</td>
		</tr>
	<?php endif ?>
</table>