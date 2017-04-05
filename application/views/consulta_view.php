

<div class="container">
	<h1> Consulta de Trabajadores</h1>
	<div>
		<form class="form-inline" method="get" action="<?php echo base_url(); ?>Crud_Controller/consultaWorker/">
		  <div class="form-group">
		    <label for="clave">Clave Trabajador</label>
		    <input type="text" class="form-control" id="iClave" name="code" placeholder="Clave Trabajador">
		  </div>

		  <button type="submit" class="btn btn-default">Buscar</button>
		</form>
	</div>
	<table class="table table-striped table-hover">
		<thead>
			<tr>
				<th></th>
				<th></th>
				<th>Clave</th>
				<th>Nombre</th>
				<th>Sueldo</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($trabajadores as $trabajador) {?>
				<tr>
					<td width="10%">
						<a class="btn btn-default" href="<?php echo base_url(); ?>Crud_Controller/MostrarModificar/<?php echo $trabajador->Clave; ?>" role="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
					</td>
					<td width="10%">
						<a class="btn btn-default" href="<?php echo base_url(); ?>Crud_Controller/Eliminar/<?php echo $trabajador->Clave; ?>" role="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
					</td>
					<td><?php echo $trabajador->Clave; ?></td>
					<td><?php echo $trabajador->Nombre; ?></td>
					<td><?php echo $trabajador->Sueldo; ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</div>
