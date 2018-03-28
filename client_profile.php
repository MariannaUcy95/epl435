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
    
      <script>
         function showErrorMessage() {
            alert("You've successfully signed up!");
        }
        function showErrorMessage2() {
            alert("Username already used!");
        }
      
      </script>
  </head>
  <body id="page-top">
   <?php
	session_start();
	if(isset($_SESSION['message'])) { ?>
		<script type='text/javascript'>
			showErrorMessage();
		</script>
		<?php 
	}
	if(isset($_SESSION['error2'])) { ?>
		<script type='text/javascript'>
			showErrorMessage2();
		</script>
		<?php 
	}
      ?>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="images/img_white.png" style="width:250px;"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#page-top"><i class="fa fa-home"></i> Home</a>
            </li>    
            <li class="dropdown">
              <a class="nav-link js-scroll-trigger" href="#classes"><i class="fa fa-calendar"></i> Classes <i class="fa fa-caret-down"></i></a>
                    <div class="dropdown-content">
                        <a href="classZumba.php">Zumba</a>
                        <a href="classYoga.php">Power Yoga</a>
                        <a href="">Pilates</a>
                        <a href="">Body Attack</a>
                        <a href="">Circuit Training</a>
                        <a href="">TRX</a>
                    </div>
            </li>    
            <li class="dropdown">
              <a class="nav-link js-scroll-trigger" href="#facilities"><i class="material-icons" style="font-size:18px;">fitness_center</i> Facilities <i class="fa fa-caret-down"></i></a>
                 <div class="dropdown-content">
                        <a href="facilities.php#main_workout_area">Main Workout Area</a>
                        <a href="facilities.php#cardio_area">Cardio Area</a>
                        <a href="facilities.php#group_exercise_classes">Group Exercise Classes</a>
                        <a href="facilities.php#sports_facilities">Sports Facilities</a>
                        <a href="facilities.php#personal_training">Personal Training</a>
                        <a href="facilities.php#other_facilities">Other Facilities</a>
                </div>
            </li>      
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#shop"><i class="material-icons" style="font-size:18px;">shopping_cart</i> Shop</a>
            </li>       
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about"><i class="fa fa-info"></i> About us</a>
            </li>    
               <li class="nav-item">
                   <a class="nav-link js-scroll-trigger" href="#contact"><i class="fa fa-phone"></i> Contact us</a>
            </li>
          </ul>
        </div>
          <div class="dropdown" style="float:right;">
            <a href="edit_profile"><img src="images/avatar.png"style="width:50px;height:50px;"></a>
              <br>
              <br>
              <div class="dropdown-content">
                    <a href="view_profile.php">View Profile</a>
                    <a href="edit_profile.php">Edit Profile</a>
                    <a href="request_gym_program.php">Request gym program</a>
                    <a href="logout.php">Log out</a>
              </div>
          </div>  
      </div>
    </nav>

    <!-- Intro Header -->
    <header class="masthead">
      <div class="intro-body">
        <div class="container" id='xx'>
          <div class="row">
         
          </div>
        </div>
                       
      </div>    
    </header>

<!-- Form Section -->
    <section id="classes" class="download-section content-section text-center">
      <div class="container" id="roww">
        <div >
            <h3>Classes</h3>
         <div class="container" style="column-count:3">
             <div class="container" >
                <h6>Zumba</h6>
              <img src="images/zumba.jpg" class="image" style="width:100%">
              <div class="middle">
                  <a href="zumba.html"><button href="zumba.html" class="btn">Zumba</button></a>
              </div>
            </div>
             
            <div class="container">
                <h6>Power Yoga</h6>
              <img src="images/yoga.jpg" class="image" style="width:100%">
              <div class="middle">
                  <a href="yoga.html"> <button href="yoga.html" class="btn">Power Yoga</button></a>
              </div>
            </div>
             
            <div class="container">
            <h6>Pilates</h6>
                <img src="images/pilates.jpg" class="image" style="width:100%">
              <div class="middle">
                  <a href="pilates.html">  <button href="pilates.html" class="btn">Pilates</button></a>
              </div>
            </div>
            </div>
            <br>
            <br>
            <br>
            <div class="container" style="column-count:3">
                <div class="container">
              <h6>Body Attack</h6>
                    <img src="images/bodyattack.jpg" class="image" style="width:100%">
              <div class="middle">
                  <a href="bodyattack.html"> <button href="bodyattack.html" class="btn">Body Attack</button></a>
              </div>
             </div> 
            
          <div class="container">
            <h6>Circuit Training</h6>
              <img src="images/circuit.jpg" class="image" style="width:100%">
              <div class="middle">
                  <a href="circuit.html"> <button href="circuit.html" class="btn">Circuit Training</button></a>
              </div>
            </div>    
            <div class="container">
                <h6>TRX</h6>
              <img src="images/trx.jpg" class="image" style="width:100%">
              <div class="middle">
                  <a href="trx.html"> <button href="trx.html" class="btn">TRX</button></a>
              </div>
            </div>                
            </div>
            </div>
   <a href="#classes" class="btn btn-circle js-scroll-trigger" >
                <i class="fa fa-angle-double-down animated"></i>
                </a>
        </div>
    </section>
      
   <section id="facilities" class="result-section content-section text-center">
     <div class="container" id="roww">
        <div >
            <h3>Facilities</h3>
         <div class="container" style="column-count:3">
             <div class="container" >
                <h6>Main workout area</h6>
              <img src="images/mainworkoutarea.jpg" class="image" style="width:100%">
              <div class="middle">
                  <a href="zumba.html"><button href="zumba.html" class="btn">Main workout area</button></a>
              </div>
            </div>
             
            <div class="container">
                <h6>Cardio area</h6>
              <img src="images/cardioarea.jpg" class="image" style="width:100%">
              <div class="middle">
                  <a href="yoga.html"> <button href="yoga.html" class="btn">Cardio area</button></a>
              </div>
            </div>
             
            <div class="container">
            <h6>Group exercise clasees</h6>
                <img src="images/groupexerciseclasses.jpg" class="image" style="width:100%">
              <div class="middle">
                  <a href="pilates.html">  <button href="pilates.html" class="btn">Group Exercise classes</button></a>
              </div>
            </div>
            </div>
            <br>
            <br>
            <br>
            <div class="container" style="column-count:3">
                <div class="container">
              <h6>Sports Facilities</h6>
                    <img src="images/sportsfacilities.jpg" class="image" style="width:100%">
              <div class="middle">
                  <a href="bodyattack.html"> <button href="bodyattack.html" class="btn">Sports Facilities</button></a>
              </div>
             </div> 
            
          <div class="container">
            <h6>Personal training</h6>
              <img src="images/personaltraining.jpg" class="image" style="width:100%">
              <div class="middle">
                  <a href="circuit.html"> <button href="circuit.html" class="btn">Personal training</button></a>
              </div>
            </div>    
            <div class="container">
                <h6>Other Services</h6>
              <img src="images/otherfacilities.jpg" class="image" style="width:100%">
              <div class="middle">
                  <a href="trx.html"> <button href="trx.html" class="btn">Other Services</button></a>
              </div>
            </div>                
            </div>
            </div>
   <a href="#classes" class="btn btn-circle js-scroll-trigger" >
                <i class="fa fa-angle-double-down animated"></i>
                </a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section content-section  text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto about">
            <h2>About The Fitness Club</h2>
            <p>The Fitness Club is a software designed within the course of <a href="https://www.cs.ucy.ac.cy/courses/EPL435/index.htm">EPL435-Human-Computer Interaction</a> of University of Cyprus. It is designed by <a href="https://www.linkedin.com/in/marianna-hatzidemetriou-65a714b1/">Marianna Hatzidemetriou</a>, Kwnstantina Tseriotou and Erasmia Shimitra.</p>
          </div>
        </div>
      </div>
    </section>

    

    <!-- Contact Section -->
    <section id="contact" class="contact-section content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Contact</h2>
            <p>Feel free to leave us a comment
            <br>
              <textarea name="Please leave us a comment"></textarea>
              
              </p>
            <ul class="list-inline banner-social-buttons">
               <li class="list-inline-item">
                <a href="https://github.com/MariannaUcy95/epl435" class="btn btn-default btn-lg">
                  <i class="fa fa-github fa-fw"></i>
                  <span class="network-name">Github</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

  
    <!-- Footer -->
    <footer >
        <center>
        <div id="footer">
            <div style="display:inline">
                <a href="index.php#facilities">Facilities</a><br>
                <a href="index.php#classes">Classes</a><br>
                <a href="index.php#shop">Shop</a><br>
            </div>
            <div style="display:inline">
                <a href="index.php#aboutus">About us</a><br>
                <a href="index.php#contactus">Contact us</a><br>
                <div id="social">
                    <a href="" class="fa fa-facebook"></a>
                    <a href="" class="fa fa-twitter"></a>
                    <a href="" class="fa fa-instagram"></a>	
			     </div>
            </div> 
            <div style="display:inline">
                <a href="index.php#page-top">Login</a><br>
                <a href="index.php#page-top">Register</a><br>
            </div>
        </div>
        <br>
        <br>
        <div class="container text-center">
            <img src="images/img_black.png" style="width:200px;">
            <br>
            <br>
            <p>&copy; The Fitness Club 2018</p>
        </div>
            </center>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>

  </body>

</html>
