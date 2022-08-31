<main>
	<h1>Crear Nuevo vehiculo</h1>
	<form action="index.php?v=store" method="POST"> 
		<div>
			<input type="text" name="placa" placeholder="Placas">
		</div>
		<div>
			<input type="text" name="marca" placeholder="Marca">
		</div>
		<div>
			<input type="text" name="color" placeholder="Color">
		</div>
	
	<!-- Campo Conductor -->
		<div>
			<label for="propietario">Propietario</label>
			<select name="propietario">
				<?php foreach($propietarios as $p): ?>
					<option value="<?php echo $p['id'] ?>"><?php echo $p['nombre'].' '.$p['apellidos'] ?> </option>
				<?php endforeach ?>
			</select>
		</div>
	<!-- Campo Conductor -->
		<div>
			<label for="conductor">Conductor</label>
			<select name="conductor">
				<?php foreach($conductores as $c): ?>
					<option value="<?php echo $c['id'] ?>"><?php echo $c['nombre'].' '.$c['apellidos'] ?> </option>
				<?php endforeach ?>
			</select>
		</div>	
	<!-- Campo tipo -->
		<div>
			<label for="tipo">Tipo de vehiculo</label>
			<select name="tipo">
				<optgroup label="Tipo">
					<option >Publico</option>
					<option >Privado</option>
				</optgroup>
			</select>
		</div>
		<button>Guardar</button>
	</form>
</main>