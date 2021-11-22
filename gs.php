<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get_started</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<div class="topnav" id="myTopnav">
    <a href="home.php" class="active">HOME</a>
    <a href="about.php">ABOUT</a>
    <a href="service.html">SERVICES</a>
    <a href="contact.php">CONTACT</a>
    <a href="logout.php">LOG OUT</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

<!-- header section ends -->

<!-- home section starts   -->

<section class="home">

    <div class="content">
        <h1>Let's Get Started...</h1>
        <div>
            <h2>Track Your</h2>
            <a href="plan.html"><button class="btn">BMI & calorie</button></a>
            <p>                                                                                     

                
            </p>
        </div>
        <div>
            <h2>Known how to improve Your health</h2>
            <a href="Checkout.html"><button class="btn">Check Out</button></a>
        </div>

    </div>

    <div class="image">
        <img src="images/hero-img.svg" alt="">
    </div>

</section>



<div class="footer">

    <div class="box-container">


        <div class="box">
            <h3>quick links</h3>
            <a href="home.html">home</a>
            <a href="about.html">about</a>
            <a href="service.html">service</a>
            <a href="contact.html">contact</a>
        </div>


    </div>

    <h1 class="credit"> created by <a href="#">Divya</a> | all rights reserved. </h1>

</div>

<!-- footer section ends -->













<!-- jquery cdn link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>