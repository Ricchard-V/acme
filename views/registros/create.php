<?php
	// la variable 'c' hace referencia al controlador de conductor
	// la variable 'p' hace referencia al controlador de propietario
	// se evalua si el tipo de registro es a conductor o a propietario para hacer el requerimiento al controlador correspondiente
 ?>
 <?php include('views/_layout.php') // Plantilla superior?>
<main>
	<h1>Crear Nuevo <?php echo $tipo ?></h1>
	<div class="navbar">
		<div>
			<?php if($tipo == 'Propietarios'): ?>
				<a href="index.php?p=index">Ver Propietarios</a>
			<?php else: ?>
				<a href="index.php?c=index">Ver Conductores</a>
			<?php endif; ?>
		</div>
	</div>
	<hr>

	<?php if($tipo == 'Propietarios'): ?>
		<form action="index.php?p=store" method="POST"> 
	<?php else: ?>
		<form action="index.php?c=store" method="POST"> 
	<?php endif; ?>
			<div>
				<input type="text" name="cedula" placeholder="Cedula de Ciudadania">
			</div>
			<div>
				<input type="text" name="nombre" placeholder="nombre">
			</div>
			<div>
				<input type="text" name="nombre2" placeholder="Segundo nombre">
			</div>		
			<div>
				<input type="text" name="apellidos" placeholder="Apellidos">
			</div>		
			<div>
				<input type="text" name="direccion" placeholder="Direccion">
			</div>		
			<div>
				<input type="text" name="ciudad" placeholder="Ciudad">
			</div>		
			<div>
				<input type="text" name="telefono" placeholder="Telefono">
			</div>
			<button>Guardar</button>
		</form>
</main>