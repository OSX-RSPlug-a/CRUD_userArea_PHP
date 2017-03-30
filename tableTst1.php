<!DOCTYPE html>
<html>

		<head>

			<title>Admin area</title>

			<meta charset="UTF-8"/>

        		<meta http-equiv="X-UA-Compatible" content="IE=edge">

        		<meta name="viewport" content="width=device-width, initial-scale=1">

			<link href="CSS/bootstrap.css" rel="stylesheet" type="text/css" />

			<link href="CSS/ctn.css" rel="stylesheet">

			<script src="JS/bootstrap.js" type="text/javascript"></script>

			<script src="JS/jquery.js" type="text/javascript"></script>

			<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


		</head>

<body class="home">

    <div class="container-fluid display-table">

        <div class="row display-table-row">

            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">

                <div class="logo">

                    <span><h3>Sistema de Locadora</h3></span>

                </div>

                <div class="navi">

                    <ul style="list-style-type: none;">

                        <li><a href="#"><i aria-hidden="true"></i><span class="hidden-xs hidden-sm">Clietes</span></a></li>

                        <li><a href="#"><i aria-hidden="true"></i><span class="hidden-xs hidden-sm">Locação</span></a></li>

			<li><a href="#"><i aria-hidden="true"></i><span class="hidden-xs hidden-sm">Usuarios do sistema</span></a></li>

			<li><a href="#"><i aria-hidden="true"></i><span class="hidden-xs hidden-sm">Help</span></a></li>

                    </ul>

                </div>

            </div>

            <div class="col-md-10 col-sm-11 display-table-cell v-align">

                <div class="row">

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
                </div>

                <div class="user-dashboard">

                    <h2>Lista de clientes</h2>

                    <div class="row">

			<div class="container">
   		
			 <div class="row">
    
			    <div class="col-md-10 col-md-offset-1">
           
				 <div class="panel panel-default panel-table">

			              <div class="panel-heading">

			                <div class="row">

			                  <div class="col col-xs-6">

					   <h3 class="panel-title">Painel de Usuarios</h3>
					  
			                  </div>

			                  <div class="col col-xs-6 text-right">

			                    <a style="link: none; background: black; color:white; border-radius: 3px; padding: 4px;" href="#openModal">Create New</a>

					    <a  href="tableTst1.php" title="Reload"><svg viewBox="-9 -3 50 50" style="width: 25px; height: 25px; float: right; padding-left: 7px;">
									<polygon class="svg-icon" points="22.4,8 17.8,13.2 17.8,2.7"></polygon>
									<path class="svg-icon" d="M17.9,7.6c-16,0-16,16-16,16"></path>
									<path class="svg-icon" d="M0,0"></path>
									<polygon class="svg-icon" points="11.1,37.1 15.8,31.9 15.8,42.3"></polygon>
									<path class="svg-icon" d="M15.5,37.5c16,0,16-16,16-16"></path>
</svg></a>	
						
			                  </div>

			                </div>

			              </div>

		              <div class="panel-body">

	                	<table class="table table-striped table-bordered">
                
		  <thead>
                    <tr>

		      <th>ID</th>

                      <th>Nome</th>

                      <th>Email</th>

                      <th>Senha</th>
			
		      <th>Ação</th>

                    </tr>
                  </thead>

                  <tbody>
		
		  	<?php require_once("conn/list.php");?>		
                  
                  </tbody>
            </table>
      
           </div>

	              <div class="panel-footer">

	                <div class="row">

	                  <div class="col col-xs-4">

				<a  href="tableTst1.php" title="Reload"><svg viewBox="-9 -3 50 50" style="width: 24px; height: 24px;">
				<polygon class="svg-icon" points="22.4,8 17.8,13.2 17.8,2.7"></polygon>
				<path class="svg-icon" d="M17.9,7.6c-16,0-16,16-16,16"></path>
				<path class="svg-icon" d="M0,0"></path>
				<polygon class="svg-icon" points="11.1,37.1 15.8,31.9 15.8,42.3"></polygon>
				<path class="svg-icon" d="M15.5,37.5c16,0,16-16,16-16"></path>
</svg></a>

				<a  href="#top" title="Go top"><svg class="icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="float: right;"><path d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6-6 6z"></path></svg></a>

	                </div>

	                  
                </div>
              </div>
            </div>
	</div>
      </div>
   </div>
	
   </div>
  </div>
 </div>
 </div>
</div>

</body>

      <script>

        $(document).ready(function(){

            $('[data-toggle="offcanvas"]').click(function(){

              $("#navigation").toggleClass("hidden-xs");
            });
          });

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

<div id="openModal" class="modalDialog">
	
  <div>

	<a href="#close" title="Close" class="close">X</a>
		
   	<?php require("conn/modalInsert.php");?>

</div>
</div>


</html>
