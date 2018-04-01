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
    <script>
        function hideshow(hide1,show1){
            document.getElementById(show1).style.display='block';
            document.getElementById(hide1).style.display='none';
        }
    </script>
  <body id="page-top">
     
	
    <!-- Intro Header -->
        <center><img src="images/img_white.png" alt="logo" style="width:250px;margin-top:0%"></center>         
        <a id="logout_admin" href="logout.php" style="float:right;margin-top:-5%;margin-right:5%" class="btn btn-deault">Logout</a>
    <div class="mastheadkotsia grid-container" >
        
      <div class="intro-body grid-item">
             
                    <div class="requests" id="requests" style="float:left;margin-left:10%;margin-top:8%;">
                        <h3 class="omb_authTitle" style="color:white;">Requests</h3>
                        <div class="requestsgym" style="color:black;">
							<ul class="req">
							     <a id="list" onclick="hideshow('h','preview');" style="color:black;"><li class="item" style="border-bottom:0px ;color:black;">Request 1</li></a>
								 <a id="list" onclick="hideshow('h','preview');" style="color:black;"><li class="item" style="border-bottom:0px ;color:black;">Request 2</li></a>
								 <a id="list" onclick="hideshow('h','preview');" style="color:black;"><li class="item" style="border-bottom:0px ;color:black;">Request 3</li></a>
								  <a id="list" onclick="hideshow('h','preview');" style="color:black;"><li class="item" style="border-bottom:0px ;color:black;">Request 4</li></a>
								 <a id="list" onclick="hideshow('h','preview');" style="color:black;"><li class="item" style="border-bottom:0px ;color:black;">Request 5</li></a>
							 <a id="list" onclick="hideshow('h','preview');" style="color:black;"><li class="item" style="border-bottom:0px ;color:black;">Request 6</li></a>
                            </ul>
                        </div>	
                </div>
          </div>  
        <div id="h" class="grid-item" style="margin-top:50px">
                <h3>Request Preview</h3> 
            <h6>Please select a request to view</h6>
        </div>
        <div id="preview" style="display:none" class="grid-item" style="margin-top:0px">
            <div id="request_for_gym_program" style="margin-top:20px;display:inline;float:right;margin-right:2%;">
            <center>
                <h3 class="omb_authTitle" style="color:white">Request Gym Program for <u><a href="">Constantina Tseriotou</a></u></h3>
            <div id="enter-details" style="width:800px;height:auto;">
                <h4>Physical Condition</h4>
                <div id="details-form">
                    <div id="grid">
                    <label>Weight</label>                
                        <input type="number" min="20" max="200" name="adults" class="quantity" value="60" required readonly/>
                    <br>
                    <br>    
                    <label>Height</label> 
                        <input type="number" min="100" max="200" name="children" class="quantity" value="174" required readonly/>
                    <br>
                    <br>
                    <label>Heath Problems</label>
                        <input type="text" name="healthproblems" value="No" readonly> 
                        <br>
                    <div style="display:inline">
                        <label>Stamina</label>
                         <div class="slidecontainer">
                             <label>weak </label> <input type="range" min="1" max="5" value="4" class="slider" id="myRange" readonly disabled><label>strong </label>
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
                    <textarea readonly>Volley</textarea><br>
                </div>
                <br>
                <div id="personalgoal">
                    <h4>Personal Goal</h4>
                    <div style="display:inline">
                        <label>Desired Weight</label>
                        <input type="number" min="20" max="200" name="adults" class="quantity" value="64" required readonly/>
                    </div>
                    <br>
                    <br>
                     <div style="display:inline">
                         <label>Availability-visits per weak</label>
                          <input type="number" min="1" max="7" name="adults" class="quantity" value="5" readonly required/>
                    </div>
                </div>
                <br>
                <div id="exercisepurpose">
                    <h4>Exercise purpose</h4>
                    <center>
                        <div id="purpose">
                            <input type="checkbox" id="health" disabled checked><label for="health">&nbsp;Health</label><br>
                            <input type="checkbox" id="strength" disabled checked><label for="strength">&nbsp;Muscular Strength</label><br>
                            <input type="checkbox" id="gain" disabled checked><label for="gain">&nbsp;Weight gain</label><br>
                    </div>
                    </center>
                </div>
                <br>
                 <div id="bodyparts">
                    <h4>Muscle Groups to emphasize</h4>
                    <center>
                        <div id="emphasize">
                            <input type="checkbox" id="glutesandlegs" checked disabled><label for="glutesandlegs">&nbsp;Glutes&amp;Legs</label><br>
                        </div>
                    </center>
                </div>
                <br>
                <div id="specialrequests">        
                    <div id="requests-form">
                    <h4>Special Requests</h4>
                    <textarea name="requests" style="width:280px;" readonly>I would like to gain weight as soon as possible.</textarea>
                    </div>
                </div>
             <?php echo '</form>'; ?>
                <br>
                <br>
                <button  id="reply" class="btn btn-default">Reply</button>
                <button id="edit" class="btn btn-default">Print</button>
            </div>           
            </center>
            </div>
        </div>
      </div>
      <footer style="background-color:black;">
    <center>  	<p>&copy; The Fitness Club 2018</p>  </center> 
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
