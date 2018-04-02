<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>The Fitness Club</title>
  
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
      <link href="css/tips.css" rel="stylesheet">
        <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="swiper-4.2.2/dist/css/swiper.min.css">
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <style>
  
    .swiper-container {
      width: 40%;
      height: 77%;
      margin: 20px auto;
        margin-top: 190px;
    }
   .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
           /* display: -webkit-box; */
   /* display: -ms-flexbox;*
    /* display: -webkit-flex; */
    /* display: flex; */
    /* -webkit-box-pack: center; */

      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
   .swiper-pagination-bullet {
      width: 20px;
      height: 20px;
      text-align: center;
      line-height: 20px;
      font-size: 12px;
      color:#000;
      opacity: 1;
      background: rgba(0,0,0,0.2);
    }
    .swiper-pagination-bullet-active {
      color:#fff;
      background: #007aff;
    }
  </style>
      
  </head>
  <body id="page-top" style="background-image:url('images/contactus.jpeg');background-repeat:no-repeat;  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;">

     <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
          <a class="navbar-brand js-scroll-trigger" href="client_profile.php#page-top"><img src="images/img_black.png" style="width:200px;"></a>
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
              <a  href="#facilities"><i class="material-icons" style="padding-top:5%;font-size:18px;">fitness_center</i> Facilities <i class="fa fa-caret-down"></i></a>
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
              <a class="nav-link js-scroll-trigger" href="client_profile.php#aboutus"><i class="fa fa-info"></i> About us</a>
            </li>    
            <li class="nav-item">
                   <a class="nav-link js-scroll-trigger" href="client_profile.php#contact"><i class="fa fa-phone"></i> Contact us</a>
            </li>
            <li class="dropdown">
               <a  href="edit_profile.php"><img src="images/avatar.png"style="width:50px;height:50px;"></a>
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
            <!-- Swiper -->
      <br>
      <br>
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
          <br>
          <h5 style="margin-bottom:12px">Aerobic/Cardio</h5>
          <h6 style="margin-bottom:12px">Treadmill(20m)</h6>
          <img src="images/treadmill.jpg" style="width:250px;height:200px"><br><br>
          <button class="clickable program">
              <img src="images/cancel.png" width="80px" height="80px">
          </button>
          <button class="program">
              <img src="images/tick.png" width="115px" height="95px">
          </button>
        <br>
        </div>
        <div class="swiper-slide">
          <br>
          <h5 style="margin-bottom:12px">Aerobic/Cardio</h5>
          <h6 style="margin-bottom:12px">Elliptical(20m)</h6>
          <img src="images/cardioarea3.png" style="width:250px;height:200px"><br><br>
          <button class="clickable program">
              <img src="images/cancel.png" width="80px" height="80px">
          </button>
          <button class="program">
              <img src="images/tick.png" width="115px" height="95px">
          </button>
        <br>
        </div>
        <div class="swiper-slide">
          <br>
          <h5 style="margin-bottom:12px">Abs &amp; CORE</h5>
          <h6 style="margin-bottom:12px">Planks(3x30sec)</h6>
          <img src="images/planks.jpg" style="width:250px;height:200px"><br><br>
          <button class="clickable program">
              <img src="images/cancel.png" width="80px" height="80px">
          </button>
          <button class="program">
              <img src="images/tick.png" width="115px" height="95px">
          </button>
        <br>
        </div>
        <div class="swiper-slide">
          <br>
          <h5 style="margin-bottom:12px">Abs &amp; Core</h5>
          <h6 style="margin-bottom:12px">Superman(3x10reps)</h6>
          <img src="images/supermanexercise.jpg" style="width:250px;height:200px"><br><br>
          <button class="clickable program">
              <img src="images/cancel.png" width="80px" height="80px">
          </button>
          <button class="program">
              <img src="images/tick.png" width="115px" height="95px">
          </button>
        <br>
        </div>
        <div class="swiper-slide">
          <br>
          <h5 style="margin-bottom:12px">Arms &amp; Shoulders</h5>
          <h6 style="margin-bottom:12px">Lat pull down (3x10reps)</h6>
          <img src="images/latpulldown.jpg" style="width:250px;height:200px"><br><br>
          <button class="clickable program">
              <img src="images/cancel.png" width="80px" height="80px">
          </button>
          <button class="program">
              <img src="images/tick.png" width="115px" height="95px">
          </button>
        <br>
        </div>
   <div class="swiper-slide">
          <br>
          <h5 style="margin-bottom:12px">Arms &amp; Shoulders</h5>
          <h6 style="margin-bottom:12px">Cable Curl(3x10reps)</h6>
          <img src="images/cablecurl.jpg" style="width:250px;height:200px"><br><br>
          <button class="clickable program">
              <img src="images/cancel.png" width="80px" height="80px">
          </button>
          <button class="program">
              <img src="images/tick.png" width="115px" height="95px">
          </button>
        <br>
        </div>
        <div class="swiper-slide">
          <br>
          <h5 style="margin-bottom:12px">Glutes &amp; Legs</h5>
          <h6 style="margin-bottom:12px">Leg Curl(3x10reps)</h6>
          <img src="images/legcurl.jpg" style="width:250px;height:200px"><br><br>
          <button class="clickable program">
              <img src="images/cancel.png" width="80px" height="80px">
          </button>
          <button class="program">
              <img src="images/tick.png" width="115px" height="95px">
          </button>
        <br>
        </div>
      <div class="swiper-slide">
          <br>
          <h5 style="margin-bottom:12px">Glutes &amp; Legs</h5>
          <h6 style="margin-bottom:12px">Squats(3x10reps)</h6>
          <img src="images/squats.jpg" style="width:250px;height:200px"><br><br>
          <button class="clickable program">
              <img src="images/cancel.png" width="80px" height="80px">
          </button>
          <button class="program">
              <img src="images/tick.png" width="115px" height="95px">
          </button>
        <br>
        </div>
   <div class="swiper-slide">
          <br>
          <h5 style="margin-bottom:12px">Glutes &amp; Legs</h5>
          <h6 style="margin-bottom:12px">Leg Press</h6>
          <img src="images/legspress.jpg" style="width:250px;height:200px"><br><br>
          <button class="clickable program">
              <img src="images/cancel.png" width="80px" height="80px">
          </button>
          <button class="program">
              <img src="images/tick.png" width="115px" height="95px">
          </button>
        <br>
        </div>
  <div class="swiper-slide">
          <br>
          <h5 style="margin-bottom:12px">Glutes &amp; Legs</h5>
          <h6 style="margin-bottom:12px">Leg extension</h6>
          <img src="images/legextension.jpg" style="width:250px;height:200px"><br><br>
          <button class="clickable program">
              <img src="images/cancel.png" width="80px" height="80px">
          </button>
          <button class="program">
              <img src="images/tick.png" width="115px" height="95px">
          </button>
        <br>
        </div>
    </div>
    <!-- Add Pagination -->
      
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="swiper-4.2.2/dist/js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (index + 1) + '</span>';
        },
      },
    });
  </script>
      
    </body>
</html>