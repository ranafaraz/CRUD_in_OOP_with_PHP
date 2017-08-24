<?php 
	
	include 'includes/header.php';
	include 'includes/connection.php';
	include_once 'includes/crud_php_class.php';
	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container">
	
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered table-responsive">
				<tr>
					<td colspan="5">
						<a href="add.php">
							<button type="button" class="btn btn-primary"><i class="glyphicon glyphicon-plus">&nbsp;ADD RECORDS</i></button>
						</a>
					</td>
				</tr>
				<tr class="default">
					<th style="text-align: center;">Id</th>
					<th style="text-align: center;">Name</th>
					<th style="text-align: center;">Address</th>
					<th style="text-align: center;" colspan="2">Action</th>
				</tr>
				<?php 

					$query = "SELECT * FROM users";
					$crud->dataview($query);

				?>
			</table>
		</div>
	</div>
</div>
</body>
</html>