<?php

include 'conn.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * from login WHERE Email = '$email' and Password = '$password'";
$results = mysqli_query($conn, $sql);
$present = mysqli_num_rows($results);

if ($present > 0) {
    echo'<script>alert("Successfully Signed In!");window.location.href="home.php"</script>';
    // header("Location:homecopy.php");
} else {
    echo '<script>alert("Invalid Email or Password !!");window.location.href="register.html"</script>';
}

?>