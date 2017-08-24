<?php
	
	include 'includes/header.php';
	include 'includes/connection.php';
	include_once 'includes/crud_php_class.php';
?>
<?php 

	if(isset($_POST['update'])){

		$id = $_GET['id'];
		$name = $_POST['name'];
		$address = $_POST['address'];

		if($crud->update($id,$name,$address)){

			$msg = "<div class='alert alert-info'> <strong>WOW..!!!</strong>record is updated <a href='index.php'>Home</a></div>";
				
			}
			else {

				$msg = "<div class='alert alert-danger'> <strong>Sorry!!!</strong>record is not updated</div>";

			}
	}

?>
<?php

		




?>
<?php 
		if(isset($_GET['id']))
		{
			$id = $_GET['id'];
			$edit = $crud->getid($id);



		}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="container well" style="box-shadow: 1px 1px 1px 1px;">

<?php

		if(isset($msg)){
			echo $msg;
		}


?>
	<div class="row">
		<div class="col-md-12">
			<form method="post" >
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
							<input type="text" name="name" value="<?php echo $edit['name']; ?>" class="form-control" placeholder="enter name">
						</td>
					</tr>
					<tr>
						<td>
							<label>Address:</label>
						</td>
						<td>
							<input type="text" name="address" value="<?php echo $edit['address']; ?>" class="form-control" placeholder="enter address">
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<button type="submit" name="update" class="btn btn-primary"><span class="glyphicon glyphicon-plus">Update record</span></button>

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