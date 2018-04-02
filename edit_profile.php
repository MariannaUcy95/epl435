<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
  <body>
      <?php
      		session_start();
      ?>
    
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
              <a class="nav-link js-scroll-trigger" href="client_profile.php#page-top"><i class="fa fa-home"></i> Home</a>
            </li>    
             <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="tips_page.php"><i class="material-icons">lightbulb_outline</i> Tips &amp; Tricks</a>
            </li>    
            <li class="dropdown">
              <a  href="client_profile.php#classes"><i class="fa fa-calendar" style="padding-top:5%;font-size:18px;"></i> Classes <i class="fa fa-caret-down"></i></a>
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
              <a  href="client_profile.php#facilities"><i class="material-icons" style="padding-top:5%;font-size:18px;">fitness_center</i> Facilities <i class="fa fa-caret-down"></i></a>
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
              <a class="nav-link js-scroll-trigger" href="client_profile.php#about"><i class="fa fa-info"></i> About us</a>
            </li>    
               <li class="nav-item">
                   <a class="nav-link js-scroll-trigger" href="client_profile.php#contact"><i class="fa fa-phone"></i> Contact us</a>
            </li>
              <li class="dropdown" style="float:right;">
            <a href="edit_profile"><img src="images/avatar.png"style="width:50px;height:50px;border-radious:50%;"></a>
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
        <header class="masthead" style="background-image:none!important;background-color:#4D4D4D !important;" >
           <div class="intro-body">
        <div id="readonly-form" style="margin-top:200px;color:black;margin-bottom:30px;">
            <center>
                     <div id="enter-details" >
                              <h3>My Profile</h3>
                          <div id="profilepic">
                            <h4>Profile Picture</h4>
                              
                          </div>
                         <br>
                        <div id="details-form">
                            <h3>Personal Details</h3>
                            <div id="grid">
                            <label>Name</label>        
                                <?php
                                echo '<input type="text" value="Marianna" >';
                                ?>
                            <label>Surname</label> 
                               <?php
                                echo '<input type="text" value="Hatzidemetriou" >';
                                ?>
                            <br>
                            <br>
                            <label>Gender</label>
                                  <?php
                              
                                    echo '<input type="text" value="Female" >';
                              
                                ?>
                            <br>
                            <br>
                            <label>Date of Birth</label>
                                 <?php
                                echo '<input type="text" value="04/12/1995">';
                                ?>
                            </div>
                            <br>
                         </div>
                        <div id="communication-det">
                            <h3>Communication details</h3>
                            <label>Phone Number</label>
                                <?php
                                echo '<input type="text" value="12345678">';
                                ?>
                            <br>
                            <br>
                            <label>Address</label>
                            <?php
                                echo '<input type="text" value="Leoforos Larnakos" >';
                                ?>
                            <label>Postal Code</label>
                               <?php
                                echo '<input type="text" value="1234" >';
                                ?>
                            <br>
                            <br>
                            <label>City</label>
                                <?php
                                echo '<input type="text" value="Nicosia">';
                                ?>
                            <label>Country</label>
                                <?php
                                echo '<input type="text" value="Cyprus">';
                                ?>
                            <br>
                            <br>
                            <label>Email Address</label>
                                  <?php
                                echo '<input type="text" value="mchatz05@thefitnessclub.com" >';
                                ?>
                         </div>
                         <br>
                         <div id="logindet">
                            <h3>Security Details</h3>
                            <label>Username</label>
                                  <?php
                                echo '<input type="text" value="mchatz05" >';
                                ?>
                            <br>
                            <br>
                            <label>Password</label>
                                   <?php
                                echo '<input type="password" value="1234" >';
                                ?>
                              <label>Confirm Password</label>
                                   <?php
                                echo '<input type="password" value="1234" >';
                                ?>
                          </div>
                         <br>
                          <a href=""><button id="editbtn" class="btn btn-default">UPDATE</button></a>
                    </div>  
                </center>
               </div>
            </div>
         </header>
       <!-- Footer -->
        <footer >
            <center><div id="footer">
                <div style="display:inline">
                    <a href="client_profile.php#facilities">Facilities</a><br>
                    <a href="client_profile.php#classes">Classes</a><br>
                    <a href="tips_page.php">Tips &amp;Tricks</a><br>
                </div>
                <div style="display:inline">
                    <a href="client_profile.php#aboutus">About us</a><br>
                    <a href="client_profile.php#contact">Contact us</a><br>
                    <div id="social">
                        <a href="" class="fa fa-facebook"></a>
                        <a href="" class="fa fa-twitter"></a>
                        <a href="" class="fa fa-instagram"></a>	
                     </div>
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
    </body>
</html>