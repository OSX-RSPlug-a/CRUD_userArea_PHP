<?php  

    $id = 0;
     
    if ( !empty($_GET['id_usu'])) {
        $id = $_REQUEST['id_usu'];
    }
     
   
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

    <div class="container" styele="background: #f6f7fa;">
     
                <div class="span10 offset1">

                    <div class="row">

                        <h4 style="color= #595959;">ID do Usuario:</h4>

                    </div>
                     
                    <form class="form-horizontal" action="delete.php" method="post">

                      <input name="id" value="<?php echo $id;?>" readonly />

                      <p class="alert alert-success">Você deletou o usuario com id acima</p>

                      <div class="form-actions">

                          <a href="../tableTst1.php" class="btn btn-success">Voltar</a>

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
