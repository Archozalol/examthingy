<!DOCTYPE html>
<html>
<head>
	<title> Sākums </title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  	<link rel="SHORTCUT ICON" href="./bildes/favicon.ico"/>
  	<script src="./js/jquery2.1.4.min.js"></script>
      <script src="./js/bootstrap.min.js"></script>
      <link href = "./css/bootstrap.min.css" rel = "stylesheet">
      <link rel="stylesheet" type="text/css" href="./stils.css">

</head>

<body>
	 <div class = "navbar navbar-inverse navbar-static-top">
	 	<div class = "container">

	 		<a href = "#" class = "pull-left"><img src = "./bildes/logo.png" width = "200px" height = "35px"></a>

	 		<button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
	 		<span class = "icon-bar"></span>
	 		<span class = "icon-bar"></span>
	 		<span class = "icon-bar"></span>
	 		</button>

	 		<div class = "collapse navbar-collapse navHeaderCollapse">
	 			<ul class = "nav navbar-nav navbar-right" id = "myNavbar">
                    <li><a href = "./index.php">Start</a></li>
                    <li><a href = "./kontakti.php">Contacts</a></li>
                    <li><a href = "./registracija.php">Registration</a></li>
                    <li><a href = "./Logins.php">Login</a></li>
	 				</li>
	 			</ul>
	 		</div>
	 	</div>
	 </div>


<div class = "container">
	 
	 	<div class = "jumbotron">

<div class = "row fonakrasa"> 
	<div class = "col-md-6">
		<div class = "caption">
			<h2 align = "middle">Informācija:</h2>
			<p align = "middle">Vārds: Artūrs Ēķis</p>
			<p align = "middle">E-pasts: artuurse@gmail.com</p>
			<p align = "middle">Telefona numurs: 28866429</p>
			<p align = "middle">Dzīvesvieta: Latvija</p>
		</div>
	</div>	

	<div class = "col-md-6">
		<div class = "caption">
			<p align = "right"><img src = "./bildes/kontakti.jpg" width = "250px" height = "250px"> </p>
		</div>
	</div>	

</div>

</div>

</div>



	<nav class = "navbar navbar-default navbar-fixed-bottom">
		<div class = "container">

		<p class = "navbar-text"><font color = "black"> Artūrs Ēķis D3-1 </font></p>
		<a href = "#logins" data-toggle = "modal" class="btn btn-primary navbar-btn navbar-right">Pieslēgties</a>
		<a href = "#registresanas" data-toggle = "modal" class="btn btn-primary navbar-btn navbar-right">Reģistrēties</a>
		</div>
	</nav>

 <div id = "logins"class="modal fade" tabindex="-1" role="dialog">
             <div class="modal-dialog">
                <div class="modal-content">
                 <form class = "form-horizontal" method = "post">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Pieslēgšanās mājaslapā:</h4>
                  </div>
                <div class="modal-body">

                     <div class = "form-group">
                        <label class = "col-lg-2 control-label">E-pasts: </label>
                        <div class = "col-lg-10">
                            <input type = "email" class = "form-control" id = "piesl-epasts" placeholder = "Mmorpg@gmail.com">  
                        </div>
                     </div>

                     <div class = "form-group">
                        <label class = "col-lg-2 control-label">Parole: </label>
                        <div class = "col-lg-10">
                            <input type = "password" class = "form-control" id = "piesl-parole" placeholder = "Parole">  
                        </div>

                     </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Aizvērt</button>
                    <button type="submit" class="btn btn-primary">Pieslēgties</button>
                </div>
                </form>
                </div>
             </div>
 </div>


 <div id = "registresanas"class="modal fade" tabindex="-1" role="dialog">
             <div class="modal-dialog">
                <div class="modal-content">
                 <form class = "form-horizontal" method = "post">
                  <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      <h4 class="modal-title">Reģistrācija mājaslapā:</h4>
                  </div>
                <div class="modal-body">

                     <div class = "form-group">
                        <label class = "col-lg-2 control-label">E-pasts: </label>
                        <div class = "col-lg-10">
                            <input type = "email" class = "form-control" id = "piesl-epasts" placeholder = "Mmorpg@gmail.com">  
                        </div>
                     </div>

                     <div class = "form-group">
                        <label class = "col-lg-2 control-label">Parole: </label>
                        <div class = "col-lg-10">
                            <input type = "password" class = "form-control" id = "piesl-parole" placeholder = "Parole">  
                        </div>
                     </div>

                     <div class = "form-group">
                        <label class = "col-lg-2 control-label">Ievadiet paroli vēlreiz: </label>
                        <div class = "col-lg-10">
                            <input type = "password" class = "form-control" id = "piesl-parole" placeholder = "Parole">  
                        </div>
                     </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Aizvērt</button>
                    <button type="submit" class="btn btn-primary">Piereģistrēties</button>
                </div>
                </form>
                </div>
             </div>
 </div>
</body>		 