<!DOCTYPE html>
<html>
<head>
	<title>semestral</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<form action="<?php echo base_url('test/subir');?>" method="post" class="form-horizontal">
	<div class="form-group">
		<label for="title" class="col-md-1 text-left">plu</label>
		<div class="col-md-10">
			<input type="text" name="plu" class="form-control" required>
		</div>
	</div>
	<div class="form-group">
		<label for="title" class="col-md-1 text-left">Descripcion</label>
		<div class="col-md-10">
			<input type="text" name="descripcion" class="form-control" required>
		</div>
	</div>
	<div class="form-group">
		<label for="title" class="col-md-1 text-left">precio</label>
		<div class="col-md-10">
			<input type="text" name="precio" class="form-control" required>
		</div>
	</div>
	<div class="form-group">
		<label for="title" class="col-md-1 text-left">costo</label>
		<div class="col-md-10">
			<input type="text" name="costo" class="form-control" required>
		</div>
	</div>
	<div class="form-group">
		<label for="title" class="col-md-2 text-right"></label>
		<div class="col-md-10">
			<input type="submit" name="guardar" class="btn btn-success" value="guardar">
			<a href=" <?php echo base_url('index.php'); ?>" class="btn btn-info">Back</a>
		</div>
	</div>
</form>
</body>
</html>