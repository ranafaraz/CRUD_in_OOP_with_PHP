<?php 
	
	include 'includes/header.php';
	include 'includes/connection.php';
	include_once 'includes/crud_php_class.php';
	
?>
<?php 

	if (isset($_POST['submit'])){

		$name = $_POST['name'];
		$address = $_POST['address'];

		if ($crud->create($name,$address)) {
			
			header("location:add.php?insert");
		}
		else
		{
			header("location:add.php?fail");
		}		
	}
?>
<?php

	if(isset($_GET["insert"]))

	{

	?>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-info">
					<strong>Data inserted successfully</strong>
				</div>
			</div>
		</div>
	</div> 

	<?php
	}
?>
<?php

	if(isset($_GET["fail"]))

	{

	?>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="alert alert-danger">
					<strong>Data  not inserted</strong>
				</div>
			</div>
		</div>
	</div> 

	<?php
	
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container well" style="box-shadow: 1px 1px 1px 1px;">
	<div class="row">
		<div class="col-md-12">
			<form method="post" action="add.php">
				<table class="table table-bordered table-hover">
					<tr class="info">
						<td colspan="2">
							<h4 style="text-align: center;">
								User Form
							</h4>
						</td>
					</tr>
					<tr>
						<td>
							<label>Name:</label>
						</td>
						<td>
							<input type="text" name="name" class="form-control" placeholder="enter name" required="required">
						</td>
					</tr>
					<tr>
						<td>
							<label>Address:</label>
						</td>
						<td>
							<input type="text" name="address" class="form-control" placeholder="enter address" required="required">
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<button type="submit" name="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus">Create record</span></button>

							<a href="index.php">
								<button type="button" class="btn btn-success"><i class="glyphicon glyphicon-backward">&nbsp;Back</i></button>
							</a>
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>
</body>
</html>