<?php

$servername = "";

$username = "";

$password = "";

$dbname = "locadora";


 	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    
    	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


if ( !empty($_POST)) {
        
        $nomeError = null;
        $emailError = null;
        $senhaError = null;      
       
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
                 
        $valid = true;
        if (empty($nome)) {
            $nomeError = 'Please enter Name';
            $valid = false;
        }
         
        if (empty($email)) {
            $emailError = 'Please enter Email Address';
            $valid = false;
        } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
            $emailError = 'Please enter a valid Email Address';
            $valid = false;
        }
         
        if (empty($senha)) {
            $senhaError = 'Please enter Mobile Number';
            $valid = false;
        }
         
        
        if ($valid) {
            
            $sql = "INSERT INTO usuario (nome,email,senha) values(?, ?, ?)";
            $q = $conn->prepare($sql);
            $q->execute(array($nome,$email,$senha));
          

        }
    }

print "<a style='link: none; background: black; color:white; border-radius: 3px; padding: 4px;' href='../tableTst1.php' title='Home'>Voltar</a>";

?>





