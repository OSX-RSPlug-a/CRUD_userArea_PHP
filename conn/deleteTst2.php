 <?php

include 'delete.php';

$servername = "localhost";

$username = "w";

$password = "adm@098765";

$dbname = "locadora";

try {

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    
    $sql = "DELETE FROM usuario WHERE id_usu= $id";

    
    $conn->exec($sql);

    }

	catch(PDOException $e)

    {

    	echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?> 

