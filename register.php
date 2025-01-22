<?php

include 'conn.php';

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * from login WHERE Email = '$email'";
$results = mysqli_query($conn, $sql);
$present = mysqli_num_rows($results);

if ($present > 0) {
    $_SESSION['email_alert'] = '1';
    header("Location:register.html");
} else {
    $query = "insert into login(Name,Email,Password) values('$name','$email','$password')";

    $result = mysqli_query($conn, $query);

    header("Location:register.html");
}
