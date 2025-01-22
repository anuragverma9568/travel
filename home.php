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
   <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script>
      $(document).ready(function() {
         $(".scroll-top").click(function() {
            $("html, body").animate({
               scrollTop: 0
            }, "slow");
            return false;
         });
      });
   </script>
</head>

<body>
   <!-- header section starts  -->
   <section class="header">
      <a href="#" class="logo"><i class="fas fa-hiking"></i>Wondering
         Souls</a>
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
   <!-- home section starts  -->
   <section class="home" id="home1">
      <div class="swiper home-slider">
         <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg) no-repeat">
               <div class="content">
                  <h3>tour arround the universe</h3>
                  <a href="package.php" class="btn">See more</a>
               </div>
            </div>
            <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
               <div class="content">

                  <h3>express the new destination</h3>
                  <a href="package.php" class="btn">See more</a>
               </div>
            </div>
            <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
               <div class="content">

                  <h3>make your tour effective</h3>
                  <a href="package.php" class="btn">See more</a>
               </div>
            </div>
         </div>
         <div class="swiper-button-next"></div>
         <div class="swiper-button-prev"></div>
      </div>
   </section>
   <!-- home section ends -->
   <!-- services section starts  -->
   <section class="services">
      <h1 class="heading-title"> our services </h1>
      <div class="box-container">
         <div class="box">
            <img src="images/icon-2.png" alt="">
            <h3><a href="https://en.wikipedia.org/wiki/Tour_guide">tour guide</a></h3>
         </div>
         <div class="box">
            <img src="images/icon-6.png" alt="">
            <h3><a href="https://en.wikipedia.org/wiki/Camping">camping</a></h3>
         </div>
         <div class="box">
            <img src="images/icon-1.png" alt="">
            <h3><a href="https://en.wikipedia.org/wiki/Adventure_travel">adventure</a></h3>
         </div>
         <div class="box">
            <img src="images/icon-3.png" alt="">
            <h3><a href="https://en.wikipedia.org/wiki/Trekking_(disambiguation)">trekking</a></h3>
         </div>
         <div class="box">
            <img src="images/icon-5.png" alt="">
            <h3><a href="https://en.wikipedia.org/wiki/Road_trip">off road</a></h3>
         </div>
         <div class="box">
            <img src="images/icon-4.png" alt="">
            <h3><a href="https://en.wikipedia.org/wiki/Campfire">campfire</a></h3>
         </div>
      </div>
   </section>
   <!-- services section ends -->

   <!-- home packages section starts  -->
   <section class="home-packages">
      <h1 class="heading-title"> our packages </h1>
      <div class="box-container">
         <div class="box">
            <div class="image">
               <img src="images/img-1.jpg" alt="">
            </div>
            <div class="content">
               <h3>Dubai Tour Packages</h3>
               <p>Enjoy the Emirates with unforgettable fun with our Dubai top selling packages!</p>
               <h2>Rs.20,900</h2>
               <a href="register.html" class="btn">book now</a>
            </div>
         </div>
         <div class="box">
            <div class="image">
               <img src="images/img-2.jpg" alt="">
            </div>
            <div class="content">
               <h3>Delhi Tour Packages</h3>
               <p>Enjoy the Emirates with unforgettable fun with our Delhi top selling packages!</p>
               <h2>Rs.9,900</h2>
               <a href="register.html" class="btn">book now</a>
            </div>
         </div>
         <div class="box">
            <div class="image">
               <img src="images/img-3.jpg" alt="">
            </div>
            <div class="content">
               <h3>Japan Tour Packages</h3>
               <p>Enjoy the Emirates with unforgettable fun with our Japan top selling packages!</p>
               <h2>Rs.11,900</h2>
               <a href="register.html" class="btn">book now</a>
            </div>
         </div>
      </div>
      <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>
   </section>
   <!-- home packages section ends -->

   <!-- home offer section starts  -->
   <section class="home-offer home-packages">
      <div class="content">
         <div class="offerimage">
            <img src="images/offer.jpg">
         </div>
      </div>
      <div class="content">
         <p>Bali Dynasty Resort is centrally located within walking distance to the nightlife and excitement of the Kuta area. This popular Bali accommodation offers a wide range of room types to suit families and couples. The kids can enjoy the kids club while the adults spoil themselves at Ashoka Spa or the Beach Club. For a memorable and relaxing stay in Kuta why not stay at Bali Dynasty Resort.</p>
         <a href="register.html" class="btn">book now</a>
      </div>
   </section>

   <!--contact start-->
   <section class="contact" id="contact">

      <h1 class="heading">
         <span>c</span>
         <span>o</span>
         <span>n</span>
         <span>t</span>
         <span>a</span>
         <span>c</span>
         <span>t</span>
      </h1>

      <div class="row">

         <div class="image">
            <img src="images\travel-concept-with-baggage_23-2149153260.jpg"
               alt="">
         </div>

         <form action="contact.php" method="post">
            <div class="inputBox">
               <input type="text" placeholder="Name" name="name" required>
               <input type="email" placeholder="Email" name="email" required>
            </div>
            <textarea placeholder="Message" name="message" id="" cols="30" rows="10"></textarea>
            <button value="message">Send Message</button>
         </form>

      </div>

   </section>
   <!--contact ends-->

   <!-- home offer section ends -->

   <button type="button" class="scroll-top"><i class="fa fa-angle-double-up" aria-hidden="true"></i></button>
   <!-- footer section starts  -->
   <section class="footer">
      <div class="box-container">
         <div class="box">
            <h3>quick links</h3>
            <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
            <!-- <a href="about.php"> <i class="fas fa-angle-right"></i> about</a> -->
            <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
            <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
         </div>
         <div class="box">
            <h3>extra links</h3>
            <!-- <a href="#"> <i class="fas fa-angle-right"></i> about us</a> -->
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
</body>

</html>