<?php

 	
    include 'update2.php';


?>

<!DOCTYPE html>
<html>
<head>

    			<meta charset="UTF-8"/>

        		<meta http-equiv="X-UA-Compatible" content="IE=edge">

        		<meta name="viewport" content="width=device-width, initial-scale=1">

			<link href="../CSS/bootstrap.css" rel="stylesheet" type="text/css" />

			<link href="../CSS/ctn.css" rel="stylesheet">

			<script src="../JS/bootstrap.js" type="text/javascript"></script>

			<script src="../JS/jquery.js" type="text/javascript"></script>

</head>
 
<body>

<header>

                        <div class="col-md-7">

                            <nav class="navbar-default pull-left">

                                <div class="navbar-header">

                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">

                                        <span class="sr-only">Toggle navigation</span>

                                        <span class="icon-bar"></span>

                                        <span class="icon-bar"></span>

                                        <span class="icon-bar"></span>

                                    </button>

                                </div>

                            </nav>



                        </div>

                        <div class="col-md-5">

                            <div class="header-rightside">

                                <ul class="list-inline header-top pull-right">

                                    <li><a href="#"><i  aria-hidden="true"></i></a></li>

                                    <li>
                                        <a href="#" class="icon-info">
                                            <i aria-hidden="true"></i>

                                        </a>
                                    </li>

                                    <li>

                                       <div class="dropdown">

					<button onclick="openD()" class="dropbtn">user</button>

					  <div id="myDropdown" class="dropdown-content">

					    <a href="#home">Logout</a>

					  </div>
					</div>

                                    </li>

                                </ul>

                            </div>

                        </div>

                    </header>


<div class="container">
     
                <div class="span10 offset1">
 
                   <div class="row">

                        <h3>Update usuario</h3>

                    </div>
             
                    <form class="form-horizontal" action="update2.php" method="post">

                      <div class="control-group <?php echo !empty($nomeError)?'error':'';?>">

                        <label class="control-label">Nome</label>

                        <div class="controls">

                            <input name="nome" type="text" value="<?php echo !empty($nome)?$nome:'';?>">

                            <?php if (!empty($nomeError)): ?>

                                <span class="help-inline"><?php echo $nomeError;?></span>

                            <?php endif; ?>
                        </div>
                      </div>

                      <div class="control-group <?php echo !empty($emailError)?'error':'';?>">

                        <label class="control-label">Email Address</label>

                        <div class="controls">

                            <input name="email" type="text" value="<?php echo !empty($email)?$email:'';?>">

                            <?php if (!empty($emailError)): ?>

                                <span class="help-inline"><?php echo $emailError;?></span>

                            <?php endif;?>
                        </div>
                      </div>

                      <div class="control-group <?php echo !empty($senhaError)?'error':'';?>">

                        <label class="control-label">Senha</label>

                        <div class="controls">

                            <input name="senha" type="password" value="<?php echo !empty($senha)?$senha:'';?>">

                            <?php if (!empty($senhaError)): ?>

                                <span class="help-inline"><?php echo $senhaError;?></span>

                            <?php endif;?>
                        </div>
                      </div>

                      <div class="form-actions">

                          <button type="submit" class="btn btn-success">Update</button>
                         
			  <a class="btn" href="../tableTst1.php">Back</a>

                        </div>
                    </form>
                </div>                 
    </div> 

 </body>

<script>


	function openD() {

	    document.getElementById("myDropdown").classList.toggle("show");

	}

	window.onclick = function(event) {
	
	  if (!event.target.matches('.dropbtn')) {

	    var dropdowns = document.getElementsByClassName("dropdown-content");
	    var i;

       for (i = 0; i < dropdowns.length; i++) {
   
	   var openDropdown = dropdowns[i];

	   if (openDropdown.classList.contains('show')) {
        
		openDropdown.classList.remove('show');

	   }
    }
  }
}
 
      </script>

</html>


