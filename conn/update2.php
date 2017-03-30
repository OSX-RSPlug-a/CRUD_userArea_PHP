<?php



$servername = "";

    $username = "";

    $password = "";

    $dbname = "locadora";

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
$id = null;
     
    if ( !empty($_GET['id_usu'])) {
        $id = $_REQUEST['id_usu'];
    }

     
    if ( !empty($_POST)) {
        
        $nomeError = null;
        $emailError = null;
        $senhaError = null;
         
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
         
       
        $valid = true;
        if (empty($nome)) {
            $nomeError = 'Please enter Nome';
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
            $senhaError = 'Please enter senha Number';
            $valid = false;
        }
         
        
        if ($valid) {
        
            $sql = "UPDATE usuario  set nome = ?, email = ?, senha =? WHERE id_usu = ?";
            $q = $conn->prepare($sql);
            $q->execute(array($nome,$email,$senha,$id));

        }
    } else {

        $sql = "SELECT * FROM usuario where id_usu = ?";
        $q = $conn->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        $nome = $data['nome'];
        $email = $data['email'];
        $senha = $data['senha'];
        
    }

?>
