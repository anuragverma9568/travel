<?php

include 'conn.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "insert into contacts(Name,Email,Message) values('$name','$email','$message')";

$result = mysqli_query($conn, $sql);
if($result){

    echo'<script>alert("Successfully Submitted");window.location.href="landing.php"</script>';

}

?>