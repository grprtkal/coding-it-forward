<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Coding it Forward</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/assets/css/bootstrap.css">
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link href="http://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="/assets/css/codingitforward.css"> 
	
</head>
<body>

	<div class = "wrapper"> <!-- Beginning of wrapper -->

		<nav class="navbar navbar-default" role="navigation"><!-- Nav Bar Begins -->
		<!--  Upper Left Nav Bar: Includes Links to About Us, Projects, Developers & Contact Us -->
		  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    <ul class="nav navbar-nav">
		      <li><a href="#">about us</a></li>
		      <li><a href="#">projects</a></li>
		      <li><a href="#">developers</a></li> 
		      <li><a href="#">contact us</a></li> 
		    </ul>

		   <!--  Upper Right Nav Bar: Includes Email, Password, and Sign In  -->
		    <form class="form-inline" role="form">
				  <div class="form-group">
				    <label class="sr-only" for="exampleInputEmail2">Email address</label>
				    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
				  </div>
				  <div class="form-group">
				    <label class="sr-only" for="exampleInputPassword2">Password</label>
				    <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
				  </div>
				  <div class="checkbox">
				    <label>
				      <input type="checkbox"> Remember me
				    </label>
				  </div>
				  <button type="submit" class="btn btn-default">Sign in</button>
			</form>

		  </div><!-- /.navbar-collapse -->
		</nav>
			<div class="jumbotron"> <!-- start of jumbotron -->
					<h1 id = "CFTitle">Coding it Forward</h1>
					<p id = "maintext">Connecting nonprofits and developers to make apps that change the world.</p> 	
					<div class = "btn-group">
						<p id = "ngotitle">I'm a nonprofit.</p>
						<form id = "ngoform" action = "<?= base_url("main/ngo_registrationpage") ?>" method = "post">
							<input type="submit" id="ngobutton" class="btn btn-default" value="I need a developer.">
						</form>	
					</div> 
					<div class = "btn-group">
						<p id = "devtitle">I'm a developer.</p> 
						<form id = "devform" action = "<?= base_url("main/dev_registrationpage") ?>" method = "post">
							<input type="submit" id="devbutton" class="btn btn-default" value="I need a project">
						</form>
					</div> 
			</div> <!-- End of jumbotron -->
			
			<div id = "midcontent"> 
				<div class = "col-md-3"> <!-- Beginning of profile content -->
				</div>
				<div class = "col-md-6">
					
					<div id = "aboutdiv">
						<h3 id = "aboutus">about us</h3>
						<hr style="BORDER-RIGHT: medium none; BORDER-TOP: #cccccc 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; HEIGHT: 1px; WIDTH: 50%">  
						<p id = "abouttext">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</p> 
					</div>

					<div id = "firstprofile">
						<img src="/assets/img/eylem.jpg" id = "eylem" alt="co-founder profile picture" class="img-circle" width="130" height="130">
						<p class = "profiletext" id = "profiletext1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.</p>
					</div> 

					<div id = "secondprofile"> 
						<p class = "profiletext" id = "profiletext2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.</p>
						<img src = "/assets/img/gurpreet.jpg" id = "gurpreet" alt = "co-founder profile picture" class="img-circle" width="130" height="130">
					</div> 

					<div id ="thirdprofile"> 
						<img src = "/assets/img/may.jpg" id = "may" alt = "co-founder profile picture" class="img-circle" width="130" height="130">
						<p class = "profiletext" id = "profiletext3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.</p>
					</div>

				</div>
				<div class = "col-md-3">
				</div>
			</div>  <!-- End of profile content -->

			<div id = "lowercontent"> <!-- Beginning of partner content -->
				<div class = "col-md-4">
					<img src = "/assets/img/alumnify3.jpg" id = "alumnify" alt = "alumnify" class="img-polaroid" width = "130" height="130">
					<p class = "partnertext" id = "partner1">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.</p> 
				</div> 
				
				<div id = "middiv" class = "col-md-4">
					<h3 id = "partners">projects</h3>
					<hr style="BORDER-RIGHT: medium none; BORDER-TOP: #cccccc 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; HEIGHT: 1px"> 
					<img src = "/assets/img/asylumaccess.jpg" id = "asylumaccess" alt = "asylum access picture" class="img-polaroid" width="130" height="130">
					<p class = "partnertext" id = "partner2">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.</p> 

				</div> 
				<div class = "col-md-4">
					<img src = "/assets/img/codingdojo.jpg" id = "codingdojo" alt = "coding dojo picture" class="img-polaroid" width="130" height="130">
					<p class = "partnertext" id = "partner3">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis.</p> 
				</div> 
			</div> <!-- End of partner content -->

			<div id = "bottomcontent"> <!-- Beginning of contact us -->
				 <div class = "col-md-4">
				 </div> 

				 <div class = "col-md-4">
				 	<h3 id = "contacttitle">contact us</h3>
				 	<hr style="BORDER-RIGHT: medium none; BORDER-TOP: #cccccc 1px solid; BORDER-LEFT: medium none; BORDER-BOTTOM: medium none; HEIGHT: 1px">  
				 	<p id = "contacttext">
				 	for feedback, contact us at: </br > 
				 	codingitforward@gmail.com 
					 </p>
				 </div> 
				  <div class = "col-md-4">
				 </div> 
			</div> <!-- End of contact us -->




	</div><!--  End of wrapper! -->
</body> 
</html> 

