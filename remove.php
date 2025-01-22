<?php
include('conn.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM book_form WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        
        header("Location: book.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
