<!DOCTYPE html>
<html>
<head>
	<title>Semestral</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
<form action="<?php echo base_url('test/update');?>" method="post" class="form-horizontal">
	<input type="hidden" name="hidden" value="<?php echo $data[0]->id ; ?>">
	<div class="form-group">
		<label for="title" class="col-md-1 text-left">Titulo</label>
		<div class="col-md-10">
			<input type="text" value="<?php echo $data[0]->titulo; ?>" name="titulo" class="form-control" required>
		</div>
	</div>
	<div class="form-group">
		<label for="title" class="col-md-1 text-left">Descripcion</label>
		<div class="col-md-10">
			<input type="text" value="<?php echo $data[0]->descripcion; ?>" name="descripcion" class="form-control" required>
		</div>
	</div>
	<div class="form-group">
		<label for="title" class="col-md-1 text-left">Tamano</label>
		<div class="col-md-10">
			<input type="text" value="<?php echo $data[0]->tamano; ?>" name="tamano" class="form-control" required>
		</div>
	</div>
	<div class="form-group">
		<label for="title" class="col-md-1 text-left">Color</label>
		<div class="col-md-10">
			<input type="text" value="<?php echo $data[0]->color; ?>" name="color" class="form-control" required>
		</div>
	</div>
	<div class="form-group">
		<label for="title" class="col-md-2 text-right"></label>
		<div class="col-md-10">
			<input type="submit" name="actualizar" class="btn btn-success" value="Actualizar">
			<a href=" <?php echo base_url('test/index'); ?>" class="btn btn-info">Back</a>
		</div>
	</div>
</form>
</body>
</html>