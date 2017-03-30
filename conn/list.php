 <?php

    include 'conn.php';

    $pdo = Database::connect();

    $sql = 'SELECT * FROM usuario';

    foreach($pdo->query($sql) as $row) {
                            
	echo '<tr>';
	echo '<td>'. $row['id_usu'] . '</td>';                            
	echo '<td>'. $row['nome'] . '</td>';                            
	echo '<td>'. $row['email'] . '</td>';                            
	echo '<td>'. $row['senha'] . '</td>';
	echo '<td width=250>';
        echo '<a class="btn btn-success" href="conn/update.php?id_usu='.$row['id_usu'].'">Update</a>';
        echo ' ';
        echo '<a class="btn btn-danger" href="conn/deleteTst2.php?id_usu='.$row['id_usu'].'">Delete</a>';
        echo '</td>';                            
	echo '</tr>';
     }

     Database::disconnect();

?>
