
<div class="container">
	<h1>Datos del Trabajador</h1>

<form>
	<div class="row">
		<div class="col col-md-4">
			<label for="exampleInputEmail1">Clave</label>
    		<input type="text" class="form-control" name="code" placeholder="Clave" value="<?php echo $clave; ?>" disabled>		
		</div>	
	</div>
	<div class="row">
		<div class="col col-md-4">
			<label for="exampleInputEmail1">Nombre</label>
    		<input type="text" class="form-control" name="name" placeholder="Nombre" value="<?php echo $nombre; ?>" disabled>		
		</div>	
	</div>
	<div class="row">
		<div class="col col-md-4">
			<label for="exampleInputEmail1">Sueldo</label>
    		<input type="text" class="form-control" name="salary" placeholder="Sueldo" value="<?php echo $sueldo; ?>" disabled>		
		</div>	
	</div>
	
</form>

</div>


