<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "the fitness club");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  if (empty($_POST["surname"])) {
    $surnameErr = "Surname is required";
  } else {
    $surname = test_input($_POST["surname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$surname)) {
      $surnameErr = "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
 if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }


$username=$_POST['username'];
$password=$_POST['password'];
$confpassword=$_POST['confirm_pass'];

if($password!==$confpassword){
   	$_SESSION['password_confirm'] = "Confirm password must match the password inserted first.";
}

$dateofbirth=$_POST['dateofbirth'];

$date = date('Y-m-d', strtotime(str_replace('-', '/', $dateofbirth)));

$telephone=$_POST['telephone'];
$address=$_POST['address'];
$postalcode=$_POST['postalcode'];
$city=$_POST['city'];
$country=$_POST['country'];
    
$sql="SELECT * FROM gymclient WHERE Username='$username'";
$result = mysqli_query($conn, $sql); 

if(!$row=mysqli_fetch_assoc($result)) {
    $sql2="INSERT INTO gymclient(Name,Surname,Gender,DateofBirth,Telephone,Address,PostalCode,City,Country,EmailAddress,Username,Password) VALUES ('$name','$surname','$gender','$date','$telephone','$address','$postalcode','$city','$country','$email','$username','$password')";
    
    $result2 = mysqli_query($conn, $sql2); 
    mysqli_close($conn);
	$_SESSION['message'] = "You've successfully signed up!";
	header("Location: index.php");
} else {
	mysqli_close($conn);
	$_SESSION['error2'] = "Username already used!";
   // header("Location: index.php#register-client");
}
?>