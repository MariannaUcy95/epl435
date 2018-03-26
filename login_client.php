<?php
    session_start();

    $conn = mysqli_connect("localhost", "root", "", "the fitness club");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $Username = $_POST['username'];
    $Password = $_POST['password'];

    $sql =  "SELECT * FROM gymclient WHERE Username='$Username' AND Password='$Password'";
    $result = mysqli_query($conn, $sql); 

    if(!$row=mysqli_fetch_assoc($result)) {
        $_SESSION['error'] = "Your username or password is incorrect!";
        header("Location: index.php");
        mysqli_close($conn);
    } else {
        $_SESSION['type'] = "Client";
        header("Location: client_profile.php?id=".$row['Username']);
    }
?>
