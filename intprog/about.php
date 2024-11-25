<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
         <img src="images/logopng.png" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Our e-commerce bookstore offers a wide range of books across all genres, catering to every reader's taste. We prioritize fast delivery,
            ensuring your books reach you quickly and hassle-free. Our platform is designed for easy browsing, making it simple to find your next great story.
            We are committed to quality service and customer satisfaction, creating a seamless shopping experience. Choose us for variety, efficiency, 
            and a passion for connecting readers with the perfect stories.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/ako.jpg" alt="">
         <p>The packaging was secure, and the book was in perfect condition. Definitely my go-to bookstore from now on!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Justine Me</h3>
      </div>

      <div class="box">
         <img src="images/eds.jpg" alt="">
         <p>I was impressed by the variety of books available, covering all the genres I love! The ordering process was straightforward. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Gab Two</h3>
      </div>

      <div class="box">
         <img src="images/otek.jpg" alt="">
         <p>I found exactly what I was looking for, and the site was easy to navigate. Delivery was quick, and the book arrived without any issues.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Otek U</h3>
      </div>

      <div class="box">
         <img src="images/selena.jfif" alt="">
         <p>This bookstore is a hidden gem! They have a fantastic range of genres and new releases, and their delivery times are super fast.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Selena Gomez</h3>
      </div>

      <div class="box">
         <img src="images/malupit.jpg" alt="">
         <p>I’ve been looking for a reliable online bookstore, and this one ticks all the boxes. The selection is extensive, with great options in every genre. </p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Malupiton</h3>
      </div>

      <div class="box">
         <img src="images/chinkee tan author.jpg" alt="">
         <p>Hi! everyone thank you for supportig my works. Please keep supporting me and follow my social media account for new and more exciting talks</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Chinkee Tan</h3>
      </div>

   </div>

</section>

<section class="authors">

   <h1 class="title">greate authors</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/JamesClear author.webp" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>James Clear</h3>
      </div>

      <div class="box">
         <img src="images/nick trenton author.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Nick Trenton</h3>
      </div>

      <div class="box">
         <img src="images/chinkee tan author.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Chinkee Tan</h3>
      </div>

      <div class="box">
         <img src="images/harry patter author.webp" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>J. K. Rowling</h3>
      </div>

      <div class="box">
         <img src="images/Jose-Rizal author.webp" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Jose P Rizal</h3>
      </div>

      <div class="box">
         <img src="images/mark twain authior.jpg" alt="">
         <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
         </div>
         <h3>Mark Twain</h3>
      </div>

   </div>

</section>







<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>