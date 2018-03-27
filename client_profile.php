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
        <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="images/logo.png" style="width:300px;height:100px;"></a>
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
          <!--  <div id="form" class="col-lg-8 mx-auto" style="top:100px;right:-5em;">
              <div id='initial-form'>
                  <form method="post" action="login_client.php">
                  <br>
                  <br>
                    <div class="login">
                        <center><label>Username or Email</label></center> 
                        <center><input placeholder="username or email" type="text" name="username" required style="background-color: #DA203E;color:black"></center>
                         <center><label>Password</label></center>
                         <center> <input placeholder="password" type="password" name="password" style="background-color: #DA203E;color:black" required  ></center><br>
                         <center><input id="logbutton" type="submit" value="Login"></center><br>
                    </div>  
                </form>
                  <center><a>New member?</a></center>
                  <center><input id="join" type="button"  onclick="document.getElementById('register-client').style.display='block'" value="Join us!"></center>
                  <!-- Sign Up Modal 

                    <div id="register-client"  class="w3-modal "  href="https://www.w3schools.com/w3css/4/w3.css">
                        <div class="w3-modal-content w3-animate-zoom" style="max-width:600px">
                            <div class="w3-container w3-teal">
                                <span onclick="document.getElementById('register-client').style.display='none'" class="w3-button w3-display-topright w3-large">x</span>
                                <h3>Join us!</h3>
                            </div>
                            <div class="w3-container" style="width: 500px">
                                <pre href="https://www.w3schools.com/w3css/4/w3.css">                    
                                <form method="post" action="join_us.php" id="join-form" >
                                    <div class="grid-container">
                                      <div class="grid-item"><label>Name</label></div>
                                      <div class="grid-item"><label>Surname</label></div>  
                                      <div class="grid-item"><input type="text" name="name" placeholder="e.g. Maria" style="border-bottom: 4px solid #808080 !important;"></div>
                                      <div class="grid-item"><input type="text"  style="border-bottom: 4px solid #808080 !important;" name="surname" placeholder="e.g. Georgiou"></div>
                                      <div class="grid-item"><label>Gender</label></div>   
                                      <div class="grid-item"><input type="radio" value="0"><label> Female </label><input type="radio" value="1"><label> Male </label><input type="radio" value="-1"><label> Other </label></div>
                                      <div class="grid-item"><label>Date of Birth</label></div>
                                      <div class="grid-item"><input type="date" name="dateofbirth"></div>
                                      <div class="grid-item"><label>Telephone</label></div>
                                      <div class="grid-item"><input type="tel" name="telephone"></div>
                                      <div class="grid-item"><label>Address</label></div>
                                      <div class="grid-item"><label>Postal Code</label></div>
                                      <div class="grid-item"><input style="border-bottom: 4px solid #808080 !important;" placeholder="e.g. Leoforos Larnakos, Aglatzia" type="text" name="address"></div>
                                      <div class="grid-item"><input  style="border-bottom: 4px solid #808080 !important;" placeholder="e.g. 1111" type="text" name="postalcode"></div>
                                      <div class="grid-item"><label>City</label></div>
                                      <div class="grid-item"><label>Country</label></div>
                                      <div class="grid-item"><input type="text" style="border-bottom: 4px solid #808080 !important;"  name="city" placeholder="e.g. Nicosia"></div>
                                      <div class="grid-item"><select name='country' class='dropdown'>
                                        <option value="Afghanistan">Afghanistan</option>
                                        <option value="Albania">Albania</option>
                                        <option value="Algeria">Algeria</option>
                                        <option value="American Samoa">American Samoa</option>
                                        <option value="Andorra">Andorra</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Anguilla">Anguilla</option>
                                        <option value="Antartica">Antarctica</option>
                                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                        <option value="Argentina">Argentina</option>
                                        <option value="Armenia">Armenia</option>
                                        <option value="Aruba">Aruba</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Austria">Austria</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Bahamas">Bahamas</option>
                                        <option value="Bahrain">Bahrain</option>
                                        <option value="Bangladesh">Bangladesh</option>
                                        <option value="Barbados">Barbados</option>
                                        <option value="Belarus">Belarus</option>
                                        <option value="Belgium">Belgium</option>
                                        <option value="Belize">Belize</option>
                                        <option value="Benin">Benin</option>
                                        <option value="Bermuda">Bermuda</option>
                                        <option value="Bhutan">Bhutan</option>
                                        <option value="Bolivia">Bolivia</option>
                                        <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                                        <option value="Botswana">Botswana</option>
                                        <option value="Bouvet Island">Bouvet Island</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                                        <option value="Bulgaria">Bulgaria</option>
                                        <option value="Burkina Faso">Burkina Faso</option>
                                        <option value="Burundi">Burundi</option>
                                        <option value="Cambodia">Cambodia</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Cape Verde">Cape Verde</option>
                                        <option value="Cayman Islands">Cayman Islands</option>
                                        <option value="Central African Republic">Central African Republic</option>
                                        <option value="Chad">Chad</option>
                                        <option value="Chile">Chile</option>
                                        <option value="China">China</option>
                                        <option value="Christmas Island">Christmas Island</option>
                                        <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                                        <option value="Colombia">Colombia</option>
                                        <option value="Comoros">Comoros</option>
                                        <option value="Congo">Congo</option>
                                        <option value="Congo">Congo, the Democratic Republic of the</option>
                                        <option value="Cook Islands">Cook Islands</option>
                                        <option value="Costa Rica">Costa Rica</option>
                                        <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                                        <option value="Croatia">Croatia (Hrvatska)</option>
                                        <option value="Cuba">Cuba</option>
                                        <option value="Cyprus" selected>Cyprus</option>
                                        <option value="Czech Republic">Czech Republic</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="Dominica">Dominica</option>
                                        <option value="Dominican Republic">Dominican Republic</option>
                                        <option value="East Timor">East Timor</option>
                                        <option value="Ecuador">Ecuador</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="El Salvador">El Salvador</option>
                                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                                        <option value="Eritrea">Eritrea</option>
                                        <option value="Estonia">Estonia</option>
                                        <option value="Ethiopia">Ethiopia</option>
                                        <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Fiji">Fiji</option>
                                        <option value="Finland">Finland</option>
                                        <option value="France">France</option>
                                        <option value="France Metropolitan">France, Metropolitan</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="French Polynesia">French Polynesia</option>
                                        <option value="French Southern Territories">French Southern Territories</option>
                                        <option value="Gabon">Gabon</option>
                                        <option value="Gambia">Gambia</option>
                                        <option value="Georgia">Georgia</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="Greece">Greece</option>
                                        <option value="Greenland">Greenland</option>
                                        <option value="Grenada">Grenada</option>
                                        <option value="Guadeloupe">Guadeloupe</option>
                                        <option value="Guam">Guam</option>
                                        <option value="Guatemala">Guatemala</option>
                                        <option value="Guinea">Guinea</option>
                                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                                        <option value="Guyana">Guyana</option>
                                        <option value="Haiti">Haiti</option>
                                        <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                                        <option value="Holy See">Holy See (Vatican City State)</option>
                                        <option value="Honduras">Honduras</option>
                                        <option value="Hong Kong">Hong Kong</option>
                                        <option value="Hungary">Hungary</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="India">India</option>
                                        <option value="Indonesia">Indonesia</option>
                                        <option value="Iran">Iran (Islamic Republic of)</option>
                                        <option value="Iraq">Iraq</option>
                                        <option value="Ireland">Ireland</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Jamaica">Jamaica</option>
                                        <option value="Japan">Japan</option>
                                        <option value="Jordan">Jordan</option>
                                        <option value="Kazakhstan">Kazakhstan</option>
                                        <option value="Kenya">Kenya</option>
                                        <option value="Kiribati">Kiribati</option>
                                        <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                                        <option value="Korea">Korea, Republic of</option>
                                        <option value="Kuwait">Kuwait</option>
                                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                                        <option value="Lao">Lao People's Democratic Republic</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lebanon">Lebanon</option>
                                        <option value="Lesotho">Lesotho</option>
                                        <option value="Liberia">Liberia</option>
                                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                        <option value="Liechtenstein">Liechtenstein</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Luxembourg">Luxembourg</option>
                                        <option value="Macau">Macau</option>
                                        <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                                        <option value="Madagascar">Madagascar</option>
                                        <option value="Malawi">Malawi</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Maldives">Maldives</option>
                                        <option value="Mali">Mali</option>
                                        <option value="Malta">Malta</option>
                                        <option value="Marshall Islands">Marshall Islands</option>
                                        <option value="Martinique">Martinique</option>
                                        <option value="Mauritania">Mauritania</option>
                                        <option value="Mauritius">Mauritius</option>
                                        <option value="Mayotte">Mayotte</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Micronesia">Micronesia, Federated States of</option>
                                        <option value="Moldova">Moldova, Republic of</option>
                                        <option value="Monaco">Monaco</option>
                                        <option value="Mongolia">Mongolia</option>
                                        <option value="Montserrat">Montserrat</option>
                                        <option value="Morocco">Morocco</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Myanmar">Myanmar</option>
                                        <option value="Namibia">Namibia</option>
                                        <option value="Nauru">Nauru</option>
                                        <option value="Nepal">Nepal</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                                        <option value="New Caledonia">New Caledonia</option>
                                        <option value="New Zealand">New Zealand</option>
                                        <option value="Nicaragua">Nicaragua</option>
                                        <option value="Niger">Niger</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Niue">Niue</option>
                                        <option value="Norfolk Island">Norfolk Island</option>
                                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                        <option value="Norway">Norway</option>
                                        <option value="Oman">Oman</option>
                                        <option value="Pakistan">Pakistan</option>
                                        <option value="Palau">Palau</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Papua New Guinea">Papua New Guinea</option>
                                        <option value="Paraguay">Paraguay</option>
                                        <option value="Peru">Peru</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Pitcairn">Pitcairn</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Portugal">Portugal</option>
                                        <option value="Puerto Rico">Puerto Rico</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="Reunion">Reunion</option>
                                        <option value="Romania">Romania</option>
                                        <option value="Russia">Russian Federation</option>
                                        <option value="Rwanda">Rwanda</option>
                                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                                        <option value="Saint LUCIA">Saint LUCIA</option>
                                        <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                                        <option value="Samoa">Samoa</option>
                                        <option value="San Marino">San Marino</option>
                                        <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="Seychelles">Seychelles</option>
                                        <option value="Sierra">Sierra Leone</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Slovakia">Slovakia (Slovak Republic)</option>
                                        <option value="Slovenia">Slovenia</option>
                                        <option value="Solomon Islands">Solomon Islands</option>
                                        <option value="Somalia">Somalia</option>
                                        <option value="South Africa">South Africa</option>
                                        <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                                        <option value="Span">Spain</option>
                                        <option value="SriLanka">Sri Lanka</option>
                                        <option value="St. Helena">St. Helena</option>
                                        <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                                        <option value="Sudan">Sudan</option>
                                        <option value="Suriname">Suriname</option>
                                        <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                                        <option value="Swaziland">Swaziland</option>
                                        <option value="Sweden">Sweden</option>
                                        <option value="Switzerland">Switzerland</option>
                                        <option value="Syria">Syrian Arab Republic</option>
                                        <option value="Taiwan">Taiwan, Province of China</option>
                                        <option value="Tajikistan">Tajikistan</option>
                                        <option value="Tanzania">Tanzania, United Republic of</option>
                                        <option value="Thailand">Thailand</option>
                                        <option value="Togo">Togo</option>
                                        <option value="Tokelau">Tokelau</option>
                                        <option value="Tonga">Tonga</option>
                                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                        <option value="Tunisia">Tunisia</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="Turkmenistan">Turkmenistan</option>
                                        <option value="Turks and Caicos">Turks and Caicos Islands</option>
                                        <option value="Tuvalu">Tuvalu</option>
                                        <option value="Uganda">Uganda</option>
                                        <option value="Ukraine">Ukraine</option>
                                        <option value="United Arab Emirates">United Arab Emirates</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="United States">United States</option>
                                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                        <option value="Uruguay">Uruguay</option>
                                        <option value="Uzbekistan">Uzbekistan</option>
                                        <option value="Vanuatu">Vanuatu</option>
                                        <option value="Venezuela">Venezuela</option>
                                        <option value="Vietnam">Viet Nam</option>
                                        <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                                        <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                                        <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                                        <option value="Western Sahara">Western Sahara</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Yugoslavia">Yugoslavia</option>
                                        <option value="Zambia">Zambia</option>
                                        <option value="Zimbabwe">Zimbabwe</option>
                                    </select></div>
                                        <div class="grid-item"><label>Email Address</label></div>
                                        <div class="grid-item"><input type="email" name="email" placeholder="thefitnessclub@mail.com"></div>
                                        <div class="grid-item"><label>Username</label></div>
                                        <div class="grid-item"><input style="border-bottom: 4px solid #808080 !important;" type="text" name="username" placeholder="Maria95"></div>
                                        <div class="grid-item"><label>Password</label></div>
                                        <div class="grid-item"><input type="password" style="border-bottom: 4px solid #808080 !important;color:black;" name="password" placeholder="......"></div>
                                        <div class="grid-item"><label>Confirm Password</label></div>
                                        <div class="grid-item"><input type="password" style="border-bottom: 4px solid #808080 !important;color:black;" name="confirm_pass" placeholder="...."></div>
                                    </div><br><br>
                                    <center><input id="registerbtn" type="submit" value="Join us"></center>
                                </form>
                                </pre>
                            </div>
                        </div>
                    </div>
            </div>

            </div>
-->
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
            <img src="images/logo.png" style="width:200px;height:50px;">
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

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRngKslUGJTlibkQ3FkfTxj3Xss1UlZDA&sensor=false"></script>

    <!-- Custom scripts for this template -->
    <script src="js/grayscale.min.js"></script>

  </body>

</html>
