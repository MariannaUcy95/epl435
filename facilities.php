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
          <a class="navbar-brand js-scroll-trigger" href="index.php#page-top"><img src="images/img_white.png" style="width:250px;"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.php#page-top"><i class="fa fa-home"></i> Home</a>
            </li>    
            <li class="dropdown">
              <a class="nav-link js-scroll-trigger" href="index.php#classes"><i class="fa fa-calendar"></i> Classes <i class="fa fa-caret-down"></i></a>
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
              <a class="nav-link js-scroll-trigger" href="#page-top"><i class="material-icons" style="font-size:18px;">fitness_center</i> Facilities <i class="fa fa-caret-down"></i></a>
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
      </div>
    </nav>
	
	
	<!-- Intro Header -->
    <header class="masthead">
    <div class="intro-body">
        <div class="container" id='xx'>
           <div id="form" class="col-lg-8 mx-auto">
             <center> <div id='fac'>
			 <h3>Facilities</h3>
      </div> </center>   
	  </div>
	  </div>
        </div>
        </header>
	
<section id="main_workout_area" class="download-section content-section text-center">
              <div class="container" id="roww">
			<center> <div id='fac'>
			<h3>Main Workout Area</h3>
			<p>Most health clubs have a main workout area,
			which primarily consists of free weights including 
			dumbbells and barbells and the stands and benches 
			used with these items and exercise machines, 
			which use gears, cables and other mechanisms to guide the user's exercise.
			This area often includes mirrors so that exercisers can monitor and maintain correct posture during their workout. 
			A gym that predominantly or exclusively consists of free weights
			as opposed to exercise machines, is sometimes referred to as a black-iron gym, after the traditional color of weight plates.</p>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <img class="mySlides" src="images/mainworkoutarea.jpg" alt="mainworkoutarea">
                    <img class="mySlides" src="images/mainworkoutarea2.jpg" alt="mainworkoutarea">
                    <img class="mySlides" src="images/mainworkoutarea3.jpg" alt="mainworkoutarea">
	
	           </div>
	           </div>
        		</center>
    </div>
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
        setTimeout(carousel, 2000); // Change image every 2 seconds
	}
	</script>
<section id="cardio_area" class="download-section content-section text-center">
              <div class="container" id="roww">
			<center> <div id='fac'>
			<h3>Cardio area</h3>
			<p>A cardio area includes many types of 
			cardiovascular training-related equipment such as rowing 
			machines, stationary exercise bikes, elliptical trainers and treadmills. 
			These areas often include a number of audio-visual displays, often TVs,
			in order to keep exercisers entertained during long cardio workout sessions. 
			Some gyms provide newspapers and magazines for users of the cardio theatre to read while working out.</p>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <img class="mySlides1" src="images/cardioarea.jpg" alt="cardioarea">
                    <img class="mySlides1" src="images/cardioarea2.jpg" alt="cardioarea">
                    <img class="mySlides1" src="images/cardioarea3.png" alt="cardioarea">
	
	           </div>
	           </div>
        		</center>
    </div>
	</section>
	<script> 
        var slideIndex = 0;
        carousel1();
        function carousel1() {
        var i;
        var x = document.getElementsByClassName("mySlides1");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > x.length) {slideIndex = 1}
        x[slideIndex-1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
	}
	</script>
	
	
	
	<section id="group_exercise_classes" class="download-section content-section text-center">
              <div class="container" id="roww">
			<center> <div id='fac'>
			<h3>Group Exercise classes</h3>
			<p>Most 2010-era health clubs offer group exercise classes that 
			are conducted by certified fitness instructors or trainers. 
			Many types of group exercise classes exist, but generally 
			these include classes based on aerobics, cycling, 
			boxing or martial arts, high intensity training, step yoga, 
			regular yoga and hot yoga, pilates, muscle training, 
			stretching, and self-defense classes such as Krav Maga and Brazilian jiu-jitsu.
			Health clubs with swimming pools often offer aqua aerobics classes. 
			The instructors often must gain certification in order to teach these classes and ensure participant safety.</p>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <img class="mySlides2" src="images/groupexerciseclasses.jpg" alt="groupexerciseclasses">
                    <img class="mySlides2" src="images/groupexerciseclasses2.jpg" alt="groupexerciseclasses">
                    <img class="mySlides2" src="images/groupexerciseclasses3.jpg" alt="groupexerciseclasses">

	           </div>
	           </div>
        			</center>
        </div>
	</section>
	<script> 
        var slideIndex = 0;
        carousel2();
        function carousel2() {
        var i;
        var x = document.getElementsByClassName("mySlides2");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > x.length) {slideIndex = 1}
        x[slideIndex-1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
	}
	</script>
	<section id="sports_fac" class="download-section content-section text-center">
              <div class="container" id="roww">
			<center> <div id='fac'>
			<h3>Sports</h3>
			<p>Some health clubs offer sports fac such as a 
			swimming pools, squash courts, indoor running tracks, ice rinks, or boxing areas. 
			In some cases, additional fees are charged for the use of these fac.</p>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <img class="mySlides3" src="images/sportsfacilities.jpg" alt="sportsfacilities">
                    <img class="mySlides3" src="images/sportsfacilities2.jpg" alt="sportsfacilities">
                    <img class="mySlides3" src="images/sportsfacilities3.jpg" alt="sportsfacilities">

	           </div>
	           </div>
                  </center>
        </div>
	</section>
	<script> 
        var slideIndex = 0;
        carousel3();
        function carousel3() {
        var i;
        var x = document.getElementsByClassName("mySlides3");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > x.length) {slideIndex = 1}
        x[slideIndex-1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
	}
	</script>
	<section id="personal_training" class="download-section content-section text-center">
              <div class="container" id="roww">
			<center> <div id='fac'>
			<h3>Personal Training</h3>
			<p>Most health clubs employ personal trainers who are accessible to members for training/fitness/nutrition/health advice and consultation.
			Personal trainers can devise a customized fitness routine, sometimes including a nutrition plan, to help clients achieve their goals.
			They can also monitor and train with members. 
			More often than not, access to personal trainers involves an additional hourly fee.
			</p>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <img class="mySlides4" src="images/personaltraining1.jpg" alt="personaltraining">
                    <img class="mySlides4" src="images/personaltraining2.jpg" alt="personaltraining">
                    <img class="mySlides4" src="images/personaltraining3.jpg" alt="personaltraining">

	           </div>
	           </div>
        			</center>
        </div>
	</section>
	<script> 
        var slideIndex = 0;
        carousel4();
        function carousel4() {
        var i;
        var x = document.getElementsByClassName("mySlides4");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > x.length) {slideIndex = 1}
        x[slideIndex-1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
	}
	</script>
	<section id="other_facilities" class="download-section content-section text-center">
              <div class="container" id="roww">
			<center> <div id='fac'>
			<h3>Other Facilities</h3>
			<p>Newer health clubs generally include health-shops selling equipment, snack bars, restaurants, 
			child-care facilities, member lounges and cafes. Some clubs have a sauna, steam room,
			or swimming pool or alternative medicine wellness facilities or offices to be present. 
			Health clubs generally charge a fee to allow visitors to use the equipment, courses, and other provided services.
			In the 2010s, some clubs have is eco-friendly health clubs which 
			incorporate principles of "green living" in its fitness regimen, into the design of the centre or both.</p>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <img class="mySlides5" src="images/otherfacilities.jpg" alt="otherfacilities">
                    <img class="mySlides5" src="images/otherfacilities2.jpg" alt="otherfacilities">
                    <img class="mySlides5" src="images/otherfacilities3.jpg" alt="otherfacilities">

	           </div>
	           </div>
        			</center>
        </div>
	</section>
	<script> 
        var slideIndex = 0;
        carousel5();
        function carousel5() {
        var i;
        var x = document.getElementsByClassName("mySlides5");
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > x.length) {slideIndex = 1}
        x[slideIndex-1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
	}
	</script>
	
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