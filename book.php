<?php
session_start();

include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Travel Agency :: Best Agency</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <!-- Sweet alert -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.15/dist/sweetalert2.min.css">
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.15/dist/sweetalert2.all.min.js"></script>

   <style>
      /* Custom styles for SweetAlert to make it larger */
      .swal2-popup {
         width: 40em !important;
         font-size: 1.5em;
         padding: 2em;
         text-align: center;
      }

      .swal2-title {
         font-size: 2em;
      }

      .swal2-content {
         font-size: 1.2em;
      }

      .swal2-confirm {
         font-size: 1.5em;
         padding: 1em;
         width: 10em;
         height: 3em;
      }

      table {
         width: 98%;
         border-collapse: collapse;
         margin: 0px 20px 30px 20px;
      }

      table,
      th,
      td {
         border: 1px solid #ddd;
         padding: 10px;
         text-align: center;
         font-size: 20px;
      }

      th {
         background-color: lightblue;
      }
   </style>

</head>

<body>

   <!-- header section starts  -->
   <section class="header">
      <a href="#" class="logo"><i class="fas fa-hiking"></i>Wondering Souls</a>
      <nav class="navbar">
         <a href="#home1" class="active">Home</a>
         <a href="#contact" data-restricted="false">Contact</a>
         <a href="package.php">package</a>
         <a href="book.php">book</a>
         <div class="login">
            <a href="landing.php">Logout</a>
         </div>
      </nav>
   </section>
   <!-- header section ends -->

   <div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
      <h1>book now</h1>
   </div>

   <!-- booking section starts  -->
   <section class="booking">
      <h1 class="heading-title">book your trip!</h1>

      <?php
      if (isset($_SESSION['success_message']) && !empty($_SESSION['success_message'])) {
         // Display SweetAlert for successful booking with larger box
         echo "<script>
                 Swal.fire({
                    title: 'Success!',
                    text: '" . $_SESSION['success_message'] . "',
                    icon: 'success',
                    confirmButtonText: 'OK',
                    customClass: {
                       popup: 'swal2-popup'
                    },
                    didClose: () => {
                        window.location.href = 'book.php'; // Redirect after closing
                    }
                 });
               </script>";
         unset($_SESSION['success_message']); // Clear session message
      }

      if (isset($_SESSION['error_message']) && !empty($_SESSION['error_message'])) {
         // Display SweetAlert for error with larger box
         echo "<script>
                 Swal.fire({
                    title: 'Error!',
                    text: '" . $_SESSION['error_message'] . "',
                    icon: 'error',
                    confirmButtonText: 'OK',
                    customClass: {
                       popup: 'swal2-popup'
                    },
                    didClose: () => {
                        window.location.href = 'book.php'; // Redirect after closing
                    }
                 });
               </script>";
         unset($_SESSION['error_message']); // Clear session message
      }
      ?>

      <form action="book_form.php" method="post" class="book-form">
         <div class="flex">
            <div class="inputBox">
               <span>name :</span>
               <input type="text" placeholder="Enter your name" name="name" required>
            </div>
            <div class="inputBox">
               <span>email :</span>
               <input type="email" placeholder="Enter your email" name="email" required>
            </div>
            <div class="inputBox">
               <span>phone :</span>
               <input type="number" placeholder="Enter your number" name="phone" required>
            </div>
            <div class="inputBox">
               <span>address :</span>
               <input type="text" placeholder="Enter your address" name="address" required>
            </div>
            <div class="inputBox">
               <span>where to :</span>
               <input type="text" placeholder="Place you want to visit" name="location" required>
            </div>
            <div class="inputBox">
               <span>how many :</span>
               <input type="number" placeholder="Number of guests" name="guests" required>
            </div>
            <div class="inputBox">
               <span>arrivals :</span>
               <input type="date" name="arrivals" required>
            </div>
            <div class="inputBox">
               <span>leaving :</span>
               <input type="date" name="leaving" required>
            </div>
         </div>

         <input type="submit" value="submit" class="btn" name="send">
      </form>
   </section>

   <?php
   // Fetch data from the database
   $sql = "SELECT * FROM book_form";
   $result = mysqli_query($conn, $sql);

   // Check if there are any rows
   if (mysqli_num_rows($result) > 0) {
      echo "<table>";
      echo "<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Location</th>
            <th>Guests</th>
            <th>Arrivals</th>
            <th>Leaving</th>
            <th>Action</th>
          </tr>";

      // Output data for each row
      while ($row = mysqli_fetch_assoc($result)) {
         echo "<tr>
                <td>" . htmlspecialchars($row['id']) . "</td>
                <td>" . htmlspecialchars($row['name']) . "</td>
                <td>" . htmlspecialchars($row['email']) . "</td>
                <td>" . htmlspecialchars($row['phone']) . "</td>
                <td>" . htmlspecialchars($row['address']) . "</td>
                <td>" . htmlspecialchars($row['location']) . "</td>
                <td>" . htmlspecialchars($row['guests']) . "</td>
                <td>" . htmlspecialchars($row['arrivals']) . "</td>
                <td>" . htmlspecialchars($row['leaving']) . "</td>
                <td><button class='btn'><a href='remove.php?id=" . $row['id'] . "' onclick='return remove();'>Remove</a></button></td>
              </tr>";
      }
      echo "</table>";
   } else {
      echo "<p>No records found.</p>";
   }

   // Close the database connection
   mysqli_close($conn);
   ?>

   <!-- booking section ends -->

   <button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>

   <!-- footer section starts  -->
   <section class="footer">
      <div class="box-container">
         <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
         </div>
         <div class="box">
            <h3>extra links</h3>
            <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
            <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
            <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         </div>
         <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +91 9336331435</a>
            <a href="#"> <i class="fas fa-envelope"></i> anuragverma808575@gmail.com </a>
            <a href="#"> <i class="fas fa-map"></i> Ghaziabad-201015, India</a>
         </div>
         <div class="box">
            <h3>follow us</h3>
            <a href="https://www.linkedin.com"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="https://www.facebook.com"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="https://www.instagram.com"> <i class="fab fa-instagram"></i> instagram </a>
         </div>
      </div>
   </section>
   <!-- footer section ends -->

   <!-- swiper js link  -->
   <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

   <!-- custom js file link  -->
   <script src="js/script.js"></script>

   <script>
      function remove() {
         return confirm('Are you sure you want to delete this record ?');
      }
   </script>

</body>

</html>