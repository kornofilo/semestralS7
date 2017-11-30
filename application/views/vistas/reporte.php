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
<div class="container">
	<h3 align="center">Lista de datos de articulos</h3>
	<h4> </h4>
	<table class="table table-bordered table-responsive">
		<thead>
			<tr>
				<td>plu</td>
				<td>Descripcion</td>
				<td>precio</td>
				<td>ventas</td>
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
			<td><?php  $Test->costo ;?></td>
			<td>
				
			</td>
			</tr>
		</tbody>
		<?php  
			}
			}

		?>
	</table>
	<a href="<?php echo base_url('index.php'); ?>" class="btn btn-primary">regresar a index</a>
</div>
</html>
