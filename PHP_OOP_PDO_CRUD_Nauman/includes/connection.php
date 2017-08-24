
<?php
$servername = "localhost";
$username = "root";
$password = "";

try {
    
   
    $db = new PDO("mysql:host=$servername;dbname=crud_pdo", $username, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }

	$conn = null;
	
	include 'crud_php_class.php';
	$crud = new Crud($db);
?>