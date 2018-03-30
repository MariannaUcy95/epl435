<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Fitness Club</title>
      <!--modal-css--->        
      <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
      
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
      <!-- Custom styles for this template -->
    <link href="css/grayscale.min.css" rel="stylesheet">
      <link href="css/grayscale.css" rel="stylesheet">
  </head>
  <body id="page-top">
        <?php
      		session_start();
      ?>
	
    <!-- Intro Header -->
    <header class="masthead">
      <div class="intro-body">
	  <img src="images/img_white.png" alt="logo" style="width:200px; float:left; margin:0px 20px 10px 50px">
        <div class="container" id='xx'>
          <div class="row">
           <center> <div id="form" class="col-lg-8 mx-auto" style="top:100px;right:-5em;margin-top:50px;">
                
                  <div class="container" style="padding-bottom:5%;">
                    <div class="omb_login" id="homepage-form">
                        <h3 class="omb_authTitle">Login </h3>
                        <center>
                            <br>
                        </center>
                        <div class="row omb_row-sm-offset-3">
                            <div class="col-xs-12 col-sm-6">	
                                <form class="omb_loginForm" action="login_Admin.php" autocomplete="off" method="POST">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <input type="text" class="form-control" name="username" placeholder="email address">
                                    </div>
                                    <br>
                                    <span class="help-block"></span>

                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                                        <input  type="password" class="form-control" name="password" placeholder="Password">
                                    </div>
									<br>       
										<?php
										session_start();
										if(isset($_SESSION['error'])) { 
											echo '<p class="alert alert-danger"><i class="material-icons" style="font-size:30px;color:red">error</i>'.$_SESSION['error'].'</p>';
											session_destroy();
										}
										?>									
                                    <button  id ="loginbtn"  name="submit" class="btn btn-default" type="submit">Login</button>
                                    <br>
									
                                </form>
                            </div>
                        </div>
                        <div class="row omb_row-sm-offset-3" style="text-align:center;display:inline">
                                <input type="checkbox" value="remember-me">Remember Me
                            <a href="#">Forgot password?</a>  
                        </div>	    	
                    </div>
                </div>
            </div>
			</center>
          </div>
        </div>
		<br>
		<br>
		<br>
		<br>
<p>&copy; The Fitness Club 2018</p>       		
      </div>    
    </header>

   
          
		

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>

  </body>

</html>
