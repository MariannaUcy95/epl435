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

     <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
          <a class="navbar-brand js-scroll-trigger" href=""><img src="images/img_white.png" style="width:200px;"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#page-top"><i class="fa fa-home"></i> Home</a>
            </li>    
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="tips_page.php"><i class="material-icons">lightbulb_outline</i> Tips&amp;Tricks</a>
            </li> 
            <li class="dropdown">
              <a class="nav-link js-scroll-trigger" href="#classes"><i class="fa fa-calendar"></i> Classes <i class="fa fa-caret-down"></i></a>
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
              <a class="nav-link js-scroll-trigger" href="#facilities"><i class="material-icons" style="font-size:18px;">fitness_center</i> Facilities <i class="fa fa-caret-down"></i></a>
                 <div class="dropdown-content">
                        <a href="facilities1.php#main_workout_area">Main Workout Area</a>
                        <a href="facilities1.php#cardio_area">Cardio Area</a>
                        <a href="facilities1.php#group_exercise_classes">Group Exercise Classes</a>
                        <a href="facilities1.php#sports_fac">Sports Facilities</a>
                        <a href="facilities1.php#personal_training">Personal Training</a>
                        <a href="facilities1.php#other_facilities">Other Facilities</a>
                </div>
            </li>            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about"><i class="fa fa-info"></i> About us</a>
            </li>    
            <li class="nav-item">
                   <a class="nav-link js-scroll-trigger" href="#contact"><i class="fa fa-phone"></i> Contact us</a>
            </li>
            <li class="dropdown">
               <a class="nav-link js-scroll-trigger" href="edit_profile.php"><img src="images/avatar.png"style="width:50px;height:50px;"></a>
              <br>
              <br>
              <div class="dropdown-content">
                    <a href="view_profile.php">View Profile</a>
                    <a href="edit_profile.php">Edit Profile</a>
                    <a href="request_gym_program_page.php">Request gym program</a>
                    <a href="manage_program.php">Manage Daily Gym Program</a>
                    <a href="logout.php">Log out</a>
                </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Intro Header -->
    <header class="masthead" style="background-image:none !important;">
      <div class="intro-body">
        <div class="container" id='xx' style="padding-left:0px;padding-right:0px;">
          <div id="carousel-example-1" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">

            <!--Indicators-->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-1" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-1" data-slide-to="1" class=""></li>
              <li data-target="#carousel-example-1" data-slide-to="2" class=""></li>
            <li data-target="#carousel-example-1" data-slide-to="3" class=""></li>
            </ol>
            <!--/.Indicators-->

            <!--Slides-->
            <div class="carousel-inner" role="listbox">

              <!--First slide-->
              <div class="carousel-item active">
                <!--Mask-->
                <div class="view">
                  <div class="full-bg-img flex-center mask rgba-indigo-light white-text">
                    <ul class="animated fadeInUp col-md-12 list-unstyled list-inline" style="padding-left:0px;padding-right:0px;padding-bottom:0px">
                        <li><div class="cont"><img src="images/gif.gif" width="100%;" style="margin-top:150px;margin-left:0%;margin-right:0%;"><a href="request_gym_program_page.php"><button class="btn btn-default" onclick="request_gym_program_page.php">Request Personal Gym program</button></a>
                            </div></li>
                    </ul>
                  </div>
                </div>
                <!--/.Mask-->
              </div>
              <!--/.First slide-->

              <!--Second slide -->
              <div class="carousel-item">
                <!--Mask-->
                <div class="view">
                  <div class="full-bg-img flex-center mask rgba-purple-light white-text">
                    <ul class="animated fadeInUp col-md-12 list-unstyled" style="padding-left:0px;padding-right:0px;padding-bottom:0px">
                        <li><div class="cont"><img src="images/5.jpg" width="100%;" style="margin-top:150px;margin-left:0%;margin-right:0%;"><button class="btn btn-default">Tips &amp; Tricks</button></div></li>
                    </ul>
                  </div>
                </div>
                <!--/.Mask-->
              </div>
              <!--/.Second slide -->

              <!--Third slide-->
              <div class="carousel-item">
                <!--Mask-->
                <div class="view">
                  <div class="full-bg-img flex-center mask rgba-blue-light white-text">
                    <ul class="animated fadeInUp col-md-12 list-unstyled" style="padding-left:0px;padding-right:0px;padding-bottom:0px">
                        <li><div class="cont"><img src="images/abs.gif"  width="100%;" style="margin-top:150px;margin-left:0%;margin-right:0%;"><button class="btn btn-default">Register to a class</button></div></li>
                    </ul>
                  </div>
                </div>
                <!--/.Mask-->
              </div>

              <!--/.Fourth slide-->
                    <!--Third slide-->
              <div class="carousel-item">
                <!--Mask-->
                <div class="view">
                  <div class="full-bg-img flex-center mask rgba-blue-light white-text">
                    <ul class="animated fadeInUp col-md-12 list-unstyled" style="padding-left:0px;padding-right:0px;padding-bottom:0px">
                        <li><div class="cont"><img src="images/4.jpg"  width="100%;" style="margin-top:150px;margin-left:0%;margin-right:0%;"><button class="btn btn-default">Find a Personal Trainer</button></div></li>
                    </ul>
                  </div>
                </div>
                <!--/.Mask-->
              </div>
              <!--/.Fourth slide-->

            </div>
            <!--/.Slides-->

            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
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
                  <a href="classZumbaClient.php"><button href="zumba.html" class="btn">Zumba</button></a>
              </div>
            </div>
             
            <div class="container">
                <h6>Power Yoga</h6>
              <img src="images/yoga.jpg" class="image" style="width:100%">
              <div class="middle">
                  <a href="classYogaClient.php"> <button href="yoga.html" class="btn">Power Yoga</button></a>
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
        </div>
    </section>
     

   <section id="facilities" class="content-section text-center" style="background-color:#C0C0C0">
     <div class="container" id="roww">
        <div >
            <h3>Facilities</h3>
         <div class="container" style="column-count:3">
             <div class="container" >
                <h6>Main workout area</h6>
              <img src="images/mainworkoutarea.jpg" class="image" style="width:100%">
              <div class="middle">
                  <a href="facilities1.php#main_workout_area"><button href="zumba.html" class="btn">Main workout area</button></a>
              </div>
            </div>
             
            <div class="container">
                <h6>Cardio area</h6>
              <img src="images/cardioarea.jpg" class="image" style="width:100%">
              <div class="middle">
                  <a href="facilities1.php#cardio_area"> <button href="yoga.html" class="btn">Cardio area</button></a>
              </div>
            </div>
             
            <div class="container">
            <h6>Group exercise classes</h6>
                <img src="images/groupexerciseclasses.jpg" class="image" style="width:100%">
              <div class="middle">
                  <a href="facilities1.php#group_exercise_classes">  <button href="pilates.html" class="btn">Group Exercise classes</button></a>
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
                  <a href="facilities1.php#sports_fac"> <button href="bodyattack.html" class="btn">Sports Facilities</button></a>
              </div>
             </div> 
            
          <div class="container">
            <h6>Personal training</h6>
              <img src="images/personaltraining.jpg" class="image" style="width:100%">
              <div class="middle">
                  <a href="facilities1.php#personal_training"> <button href="circuit.html" class="btn">Personal training</button></a>
              </div>
            </div>    
            <div class="container">
                <h6>Other Services</h6>
              <img src="images/otherfacilities.jpg" class="image" style="width:100%">
              <div class="middle">
                  <a href="facilities1.php#other_facilities"> <button href="trx.html" class="btn">Other Services</button></a>
              </div>
            </div>                
            </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section  text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto about">
            <h2>About The Fitness Club</h2>
            <p>"The Fitness Club" is not only a gym. It's your gym partner, it can help you become or keep fit, whether you like gym, weights, dancing (zumba), pilates, yoga or many more that our team can offer you.
            We are located in the central Limassol, so you can reach us easily. We are open every day 7:00 to 21:00. Feel free to explore our website to learn more and if you still have questions, just contact us!</p>
          </div>
        </div>
      </div>
    </section>

    

 <!-- Contact Section -->
    <section id="contact" class="contact-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto" style="color:black">
            <h2>Contact Us</h2>
            <p>Do you have any questions or feedback for us? Feel free to leave us a comment here!</p>
                <form id="contactus-form" action="" method="post"> 
                    <label>Subject </label><input type="text" id="subject-comment" required><br>
                    <label style="padding-right:20px">Message </label><textarea name="Please leave us a comment" style="width:196px" required></textarea><br>
                    <button class="btn btn-default">Submit</button>
                </form>    
          
          </div>
        </div>
      </div>
    </section>

  
    <!-- Footer -->
    <footer >
        <center>
        <div id="footer">
            <div style="display:inline">
                <a href="#facilities">Facilities</a><br>
                <a href="#classes">Classes</a><br>
                <a href="tips_page.php">Tips&amp;Tricks</a><br>
            </div>
            <div style="display:inline">
                <a href="#aboutus">About us</a><br>
                <a href="#contact">Contact us</a><br>
                <div id="social">
                    <a href="" class="fa fa-facebook"></a>
                    <a href="" class="fa fa-twitter"></a>
                    <a href="" class="fa fa-instagram"></a>	
			     </div>
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
