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
  <body >
      <?php
      		session_start();
      ?>
    
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="client_profile.php#page-top"><img src="images/img_white.png" style="width:200px;"></a>
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
              <a class="nav-link js-scroll-trigger" href="tips_page.php"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Tips &amp; Tricks</a>
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
          </ul>
        </div>
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
      </div>
    </nav>
        <header class="masthead" style="background-image:none!important;background-color:#4D4D4D !important;">
              <div class="intro-body">
        
            <div id="request_for_gym_program">
            <center>
                <h3 style="color:white">Request Gym Program</h3>
              <div class="alert alert-success" id="payment">
                <strong><i class="material-icons">announcement</i></strong> No payment needed for creating a daily gym program!
                </div>
             <div class="alert alert-success" id="payment">
                <strong><i class="material-icons">announcement</i></strong> The program is made especially for you by a proffesional personal trainer!
                </div>
            <div id="enter-details" style="margin-bottom:30px;">
                <p><span class="error">* required field.</span></p>
                <h4>Physical Condition</h4>
                <div id="details-form">
                    <div id="grid">
                    <label>Weight</label>                
                        <span class="error">* </span> <input type="number" min="20" max="200" name="adults" class="quantity" value="30" required>
                    <br>
                    <br>    
                    <label>Height</label> 
                        <span class="error">* </span><input type="number" min="100" max="200" name="children" class="quantity" value="150" required >
                    <br>
                    <br>
                        <label>Heath Problems<span class="error" style="color:#FF0000>">*</span></label>
                        <input type="radio" name="healthproblems" value="Yes"> Yes 
                        <input type="radio" name="healthproblems" value="No"> No
                        <br>
                    <label>Medical History</label><br>
                        <textarea style="width:400px;height:100px"></textarea><br>
                    <div style="display:inline">
                        <label>Stamina</label>
                         <div class="slidecontainer">
                             <label>weak </label> <input type="range" min="1" max="5" value="3" class="slider" id="myRange"><label>strong </label>
                              <p>Value: <span id="demo"></span></p>
                        </div>
                            <script>
                                var slider = document.getElementById("myRange");
                                var output = document.getElementById("demo");
                                output.innerHTML = slider.value;

                                slider.oninput = function() {
                                  output.innerHTML = this.value;
                                }
                            </script>
                    </div>
                    </div>
                    <br>
                    <label>Previous Sports Experience</label><br>
                    <textarea  style="width:400px;height:100px"></textarea><br>
                </div>
                <br>
                <div id="personalgoal">
                    <h4>Personal Goal</h4>
                    <div style="display:inline">
                        <label>Desired Weight</label>
                        <span class="error">* </span><input type="number" min="20" max="200" name="adults" class="quantity" value="40" required/>
                    </div>
                    <br>
                    <br>
                     <div style="display:inline">
                         <label>Availability-visits per weak</label>
                               <span class="error">* </span><input type="number" min="1" max="7" name="adults" class="quantity" value="3" required/>
                    </div>
                </div>
                <br>
                <div id="exercisepurpose">
                    <h4>Exercise purpose <span class="error" style="color:#FF0000>">*</span></h4>
                    <center>    
                      
                        <div id="purpose">
                            <input type="checkbox" id="health"><label for="health">&nbsp;Health</label><br>
                            <input type="checkbox" id="endurance"><label for="endurance">&nbsp;Endurance</label><br>
                            <input type="checkbox" id="aerobic"><label for="aerobic">&nbsp;Aerobic exercise</label><br>
                            <input type="checkbox" id="strength"><label for="strength">&nbsp;Muscular Strenght</label><br>
                            <input type="checkbox" id="formation"><label for="formation">&nbsp;Muscular Formation</label><br>
                            <input type="checkbox" id="volume"><label for="volume">&nbsp;Muscular Volume</label><br>
                            <input type="checkbox" id="flexibility"><label for="flexibility">&nbsp;Flexibility</label><br>
                            <input type="checkbox" id="loss"><label for="loss">&nbsp;Weight loss</label><br>
                            <input type="checkbox" id="gain"><label for="gain">&nbsp;Weight gain</label><br>
                            <div style="display:inline">
                                <input type="checkbox" id="other"><label for="other">Other</label>&nbsp;<input type="text">
                            </div>
                    </div>
                    </center>
                </div>
                <br>
                 <div id="bodyparts">
                    <h4>Muscle Groups to emphasize</h4>
                    <center>
                        <div id="emphasize">
                            <input type="checkbox" id="armsandcore"><label for="armsandcore">&nbsp;Arms &amp; Core</label><br>
                            <input type="checkbox" id="armsandshoulders"><label for="armsandshoulders">&nbsp; Arms&amp; Shoulders</label><br>
                            <input type="checkbox" id="glutesandlegs"><label for="glutesandlegs">&nbsp;Glutes &amp; Legs</label><br>
                                 <div style="display:inline">
                                <input type="checkbox" id="other"><label for="other">Other</label>&nbsp;<input type="text">
                            </div>
                        </div>
                    </center>
                </div>
                <br>
                <div id="specialrequests">
                    <div id="requests-form">
                    <h4>Special Requests</h4>
                    <header><i>Please write any special request you have.</i></header>
                    <textarea name="requests"  style="width:400px;height:100px"></textarea>
                    </div>
                </div>
                    <br>
                    <button class="btn btn-default"  type="submit" id="makeform">Submit</button>
             <?php echo '</form>'; ?>
                <br>
                <br>
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
                    <a href="tips_page.php">Tips &amp; Tricks</a><br>
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