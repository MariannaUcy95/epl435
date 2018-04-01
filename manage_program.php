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
      <link href="css/tips.css" rel="stylesheet">
        <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="swiper-master/dist/css/swiper.min.css">
      
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

      <style>
  
    .swiper-container {
      width: 100%;
      height: 300px;
      margin: 20px auto;
        margin-top: 180px;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;

      /* Center slide text vertically */
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
    .append-buttons {
      text-align: center;
      margin-top: 20px;
    }
    .append-buttons a {
      display: inline-block;
      border: 1px solid #007aff;
      color: #007aff;
      text-decoration: none;
      padding: 4px 10px;
      border-radius: 4px;
      margin: 0 10px;
      font-size: 13px;
    }
  </style>
      
  </head>
  <body id="page-top">

     <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
          <a class="navbar-brand js-scroll-trigger" href=""><img src="images/img_black.png" style="width:200px;"></a>
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
                        <a href="facilities.php#main_workout_area">Main Workout Area</a>
                        <a href="facilities.php#cardio_area">Cardio Area</a>
                        <a href="facilities.php#group_exercise_classes">Group Exercise Classes</a>
                        <a href="facilities.php#sports_facilities">Sports Facilities</a>
                        <a href="facilities.php#personal_training">Personal Training</a>
                        <a href="facilities.php#other_facilities">Other Facilities</a>
                </div>
            </li>            
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="client_profile.php#aboutus"><i class="fa fa-info"></i> About us</a>
            </li>    
            <li class="nav-item">
                   <a class="nav-link js-scroll-trigger" href="client_profile.php#contact"><i class="fa fa-phone"></i> Contact us</a>
            </li>
            <li class="dropdown">
               <a class="nav-link js-scroll-trigger" href="edit_profile.php"><img src="images/avatar.png"style="width:50px;height:50px;"></a>
              <br>
              <br>
              <div class="dropdown-content">
                    <a href="view_profile.php">View Profile</a>
                    <a href="edit_profile.php">Edit Profile</a>
                    <a href="request_gym_program_page.php">Request gym program</a>
                    <a href="view_edit_program.php">Manage Daily Gym Program</a>
                    <a href="logout.php">Log out</a>
                </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
          <div class="swiper-container">
        <div class="swiper-wrapper"></div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
  </div>
  <p class="append-buttons">
    <a href="#" class="slide-1">Slide 1</a>
    <a href="#" class="slide-5">Slide 5</a>
    <a href="#" class="slide-10">Slide 10</a>
  </p>
  <!-- Swiper JS -->
  <script src="swiper-master/dist/js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
      if ( document.documentElement.clientWidth	 >= 600) {      
          $slides=3;
        } 
    else if ( document.documentElement.clientWidth<600){
        $slides=1;     
    }
      var swiper = new Swiper('.swiper-container', {
      slidesPerView: $slides,
      centeredSlides: true,
      spaceBetween: 30,
      pagination: {
        el: '.swiper-pagination',
        type: 'fraction',
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      virtual: {
        slides: (function () {
          var slides = [];
          for (var i = 0; i < 10; i += 1) {
            slides.push('Slide ' + (i + 1));
          }
          return slides;
        }()),
      },
    });
    document.querySelector('.slide-1').addEventListener('click', function (e) {
      e.preventDefault();
      swiper.slideTo(0, 0);
    });
    document.querySelector('.slide-5').addEventListener('click', function (e) {
      e.preventDefault();
      swiper.slideTo(5, 0);
    });
    document.querySelector('.slide-10').addEventListener('click', function (e) {
      e.preventDefault();
      swiper.slideTo(10, 0);
    });
  </script>
      
    </body>
</html>