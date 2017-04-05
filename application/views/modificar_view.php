<div class="container">
		<h1>Módulo de Captura de Trabajadores</h1>

	<form class="" action="<?php echo base_url(); ?>Crud_Controller/Modificar/" method="post">
		Clave:<input type="text" name="code" placeholder="clave" value="<?php echo $clave; ?>">
		<br/><br/>
		Nombre:<input type="text" name="name" placeholder="nombre">
		<br/><br/>
		Sueldo:<input type="text" name="salary" placeholder="sueldo">
		<br/><br/>
		<input type="submit" name="guardar"  value="Guardar Datos">
		
	</form>

</div>