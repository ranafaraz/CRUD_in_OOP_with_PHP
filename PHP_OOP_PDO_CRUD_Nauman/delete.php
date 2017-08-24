<?php
	
	include 'includes/header.php';
	include 'includes/connection.php';
	include_once 'includes/crud_php_class.php';
?>
<?php
	
	if(isset($_POST["delete"])){

		$id  = $_GET['id'];
		$crud->delete($id);
		header("location:delete.php?deleted");
	}		
?>
<div class="conatiner">
<?php
		if(isset($_GET["deleted"]))
		{
			?>
		<div class="alert alert-success">
			<strong>Delete</strong> record successfully
		</div>

<?php
header("location:index.php");
	} else {
?>
		<div class="alert alert-danger">
			<strong>Sure</strong> To delete????
		</div>
		

<?php
}
?>
</div>
<div class="container">
	<?php 

		if (isset($_GET['id'])){

	?>

	<table class="table table-bordered">
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Address</th>
		</tr>
		<?php 

			$stmt = $db->prepare("SELECT  * FROM users WHERE id = :id");
			$stmt->execute(array(":id" => ($_GET['id'])));

			while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) 
			{

		?>
			<tr>
				<td>
					<?php

						print $row['id'];
					?>
				</td>
				<td>
					<?php

						print $row['name'];
					?>
				</td>
				<td>
					<?php

						print $row['address'];
					?>
				</td>
			</tr>

			<?php
			}

		?>
	</table>
	<?php
}
?>
</div>
<div class="container">
	<p>
		<?php

			if (isset($_GET['id']))
			{
		?>

		<form method="post">
			<button type="submit" name="delete" class="btn btn-primary">
				<i class="glyphicon glyphicon-trash">&nbsp;YES</i>
			</button>
			<a href="index.php">
				<i class="glyphicon glyphicon-backward btn btn-success">&nbsp;No</i>
			</a>
		</form>

		<?php

	}
	?>
	</p>
</div>