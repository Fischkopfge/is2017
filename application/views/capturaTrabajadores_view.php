<div class="container">
	<h1>Módulo de Captura de Trabajadores</h1>

<form action="<?php echo base_url(); ?>Crud_Controller/receiveWorkerData/" method="post">
	<div class="row">
		<div class="col col-md-4">
			<label for="exampleInputEmail1">Clave</label>
    		<input type="text" class="form-control" name="code" placeholder="Clave">		
		</div>	
	</div>
	<div class="row">
		<div class="col col-md-4">
			<label for="exampleInputEmail1">Nombre</label>
    		<input type="text" class="form-control" name="name" placeholder="Nombre">		
		</div>	
	</div>
	<div class="row">
		<div class="col col-md-4">
			<label for="exampleInputEmail1">Sueldo</label>
    		<input type="text" class="form-control" name="salary" placeholder="Sueldo">		
		</div>	
	</div>
	<div class="row">
		<div class="col col-md-4">
			<input class="btn btn-default" style="margin-top: 19px;" type="submit" name="guardar"  value="Guardar Datos">
		</div>	
	</div>
	
</form>

</div>
