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
   	<link href="css/classes.css" rel="stylesheet">
    <link href="css/grayscale.min.css" rel="stylesheet">
    <link href="css/grayscale.css" rel="stylesheet">

    
  </head>

  <body id="page-top">

   <!-- Navigation -->
   <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="client_profile.php#page-top"><img src="images/img_white.png" style="width:250px;"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="client_profile.php#pagetop"><i class="fa fa-home"></i> Home</a>
            </li>    
                 <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#tips"><i class="material-icons">lightbulb_outline</i> Tips &amp; Tricks</a>
            </li>  
            <li class="dropdown">
              <a class="nav-link js-scroll-trigger" href="client_profile.php#classes"><i class="fa fa-calendar"></i> Classes <i class="fa fa-caret-down"></i></a>
                    <div class="dropdown-content">
                        <a href="classZumbaClient.php">Zumba</a>
                        <a href="classYogaClient.php">Power Yoga</a>
                        <a href="">Pilates</a>
                        <a href="">Body Attack</a>
                        <a href="">Circuit Training</a>
                        <a href="">TRX</a>
                    </div>
            </li>    
            <li class="dropdown">
              <a class="nav-link js-scroll-trigger" href="client_profile.php#facilities"><i class="material-icons" style="font-size:18px;">fitness_center</i> Facilities <i class="fa fa-caret-down"></i></a>
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
              <a class="nav-link js-scroll-trigger" href="client_profile.php#about"><i class="fa fa-info"></i> About us</a>
            </li>    
               <li class="nav-item">
                   <a class="nav-link js-scroll-trigger" href="client_profile.php#contact"><i class="fa fa-phone"></i> Contact us</a>
            </li>
              <div class="dropdown" style="float:right;">
            <a href="edit_profile"><img src="images/avatar.png"style="width:50px;height:50px;"></a>
              <br>
              <br>
              <div class="dropdown-content">
                    <a href="view_profile.php">View Profile</a>
                    <a href="edit_profile.php">Edit Profile</a>
                    <a href="request_gym_program_page.php">Request gym program</a>
                  <a href="manage_program.php">Manage Daily Gym Program</a>
                    <a href="logout.php">Log out</a>
              </div>
          </div> 
          </ul>
        </div>
      </div>
    </nav>

    <!-- Intro Header -->
    <header class="mastheadZumba">
    <div class="intro-body">
        <div class="container" id='xx'>
           <div id="form" class="col-lg-8 mx-auto">
             <center> <div id='zumba' style="margin-top:70px;">
			 <h3>Zumba</h3>
			<p>
			Zumba is an exercise fitness program created by Colombian dancer and cyclist/choreographer Alberto "Beto" 
			"Power Pedal" Perez during the 1990s. Zumba is a trademark owned by Zumba Fitness, LLC. 
			The Brazilian pop singer Claudia Leitte has become the international ambassador to Zumba Fitness</p>
			<img src="images/zumba.jpg" />
                 <br>
                 <br>
                 <center>  <a class="btn btn-default" href="#sched">See Schedule</a></center>

      </div> </center>   
	  </div>
	  </div>
        </div>
        </header>
	
	<section id="section2" class="download-section content-section text-center">
	      <center>
              <div class="container" id="roww">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <img class="mySlides" src="images/zumba1.jpg" alt="yoga">
                    <img class="mySlides" src="images/zumba2.jpg" alt="yoga">
                    <img class="mySlides" src="images/zumba3.jpg" alt="yoga">
	           </div>
	           </div>
        </center>
	</section>
	<script> 
        var slideIndex = 0;
        carousel();
        function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > x.length) {slideIndex = 1}
        x[slideIndex-1].style.display = "block";
        setTimeout(carousel, 4000); // Change image every 2 seconds
	}
	</script>
  <!-- Schedule Section -->
    <section id="sched" class="content-section text-center" style="background-image:url('./images/zumba_footer.jpg');width:100%;height:100%;">
        <h3 style="background-color:rgba(24,24,24,0.8);margin-left:100px;margin-right:100px;">Schedule</h3>
		<div id="schedule">
             <div class="groups1" >
                <h6>Group 1</h6>
				Monday<br>
				Thursday<br>
				17:00-18:00<br>
                 <br>
                <button class="btn btn-default">Register</button>
              </div>
			  <div class="groups1" >
                <h6>Group 2</h6>
                  	Monday<br>
				Thursday<br>
				17:00-18:00<br>
                  <br>
                     <button class="btn btn-default">Register</button>
                </div>
			 <div class="groups1" >
                <h6>Group 3</h6>
                 	Monday<br>
				Thursday<br>
				17:00-18:00<br>
                 <br>
                    <button class="btn btn-default">Register</button>
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
            </center>
        <br>
        <br>
        <div class="container text-center">
            <img src="images/img_black.png" style="width:200px;">
            <br>
            <br>
            <p>&copy; The Fitness Club 2018</p>
        </div>
    </footer>
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>

  </body>

</html>
