<!DOCTYPE html>
<html>
<head>
	<title>Semestral </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<div class="navbar navbar-default">
	<div class="container">
		<h2>Semestral</h2>
	</div>
</div>
<div>
<a href="<?php echo base_url('index.php/test/reporte'); ?>" class="btn btn-primary">ir a reporte</a>
	</div
<div class="container">
	<h3>Lista de datos de articulos</h3>
	<h4> todo: mostrar la lista de ventas, calcular el promedio</h4>
	<table class="table table-bordered table-responsive">
		<thead>
			<tr>
				<td>plu</td>
				<td>Descripcion</td>
				<td>precio</td>
				<td>costo</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody>
			<?php 

			if ($data) {
				foreach ($data as $Test) {
				
			?>
			<tr>
			<td><?php echo $Test->plu;?></td>
			<td><?php echo $Test->descripcion;?></td>
			<td><?php echo $Test->precio;?></td>
			<td><?php echo $Test->costo;?></td>
			<td>
				<a href="<?php echo base_url('index.php/test/editar/'.$Test->plu);?>" class="btn btn-info">Edit</a>
				<a href="<?php echo base_url('index.php/test/delete/'.$Test->plu);?>" class="btn btn-danger" onclick="return confirm('Borrar registro?')" >Delete</a>
			</td>
			</tr>
		</tbody>
		<?php  
			}
			}

		?>
	</table>
	<a href="<?php echo base_url('index.php/test/agregar'); ?>" class="btn btn-primary">Add</a>
</div>

<div class="container">
	<h3>Lista de datos de ventas</h3>
	<h4> </h4>
	<table class="table table-bordered table-responsive">
		<thead>
			<tr>
				<td>id</td>
				<td>plu</td>
				<td>fecha</td>
				<td>precio</td>
				<td>cantidad</td>
				<td>precio</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody>
			<?php 

			if ($data) {
				foreach ($data as $Test) {
				
			?>
			<tr>
			<td><?php echo $Test->id;?></td>
			<td><?php echo $Test->plu;?></td>
			<td><?php echo $Test->fecha;?></td>
			<td><?php echo $Test->cantidad;?></td>
			<td><?php echo $Test->precio;?></td>
			<td>
				<a href="<?php echo base_url('index.php/test/editar/'.$Test->plu);?>" class="btn btn-info">Edit</a>
				<a href="<?php echo base_url('index.php/test/delete/'.$Test->plu);?>" class="btn btn-danger" onclick="return confirm('Borrar registro?')" >Delete</a>
			</td>
			</tr>
		</tbody>
		<?php  
			}
			}

		?>
	</table>
	<a href="<?php echo base_url('index.php/test/agregar'); ?>" class="btn btn-primary">Add</a>
</body>
</html>