<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta charset="utf-8">
        <meta name="view part" content="width= device-width, initital-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <style>
            /* Make the image fully responsive */
            .carousel-inner img {
                width: 100%;
            }
           
            </style>
    </head>
    <body>
      <!-- nav bar-->
      <div>
      <nav class="navbar navbar-expand-sm bg-primary navbar-dark fixed-top mb-5">
     <!-- Dropdown -->
     <ul class="navbar-nav  ml-5">
      <li><h1 class=" text-white font-weight-bolder">Health Care</h1></li></ul>
     <ul class="navbar-nav  ml-5">
      <li><a class=" text-light" href="index.php">Home</a></li></ul>
     <ul class="navbar-nav  ml-5">
      <li><a class=" text-light" href="bookappointment.php">Book Appointment</a></li></ul>
    <ul class="navbar-nav  ml-5">
      <li><a class=" text-light" href="medicine.php">Buy Medicine</a></li></ul>
      <ul class="navbar-nav  ml-5">
      <li><a class=" text-light" href="exercise.php">Exercise</a></li></ul>
      <ul class="navbar-nav  ml-5">
        <li><a class=" text-light" href="info.php">Information</a></li></ul>
        <ul class="navbar-nav  ml-5"> 
          <li><a class=" text-light" href="#aboutus">About Us</a></li></ul>
          <ul class="navbar-nav  ml-5"> 
          <li><a class=" text-light" href="login.php">Login</a></li></ul>
            <ul class="navbar-nav  ml-5"> 
            <li><a class=" text-light" href="signup.php">Sign Up</a></li></ul></ul>
          <ul class="navbar-nav  ml-5">
            <li><a class=" text-light" href="doctor.php">Doctor</a></li></ul>
    </nav>
  </div>
     <!--carousel-->
    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        
        <!-- The slideshow -->
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./images/photo1.jpg" alt="image1" width="1100" height="500">
          </div>
          <div class="carousel-item">
            <img src="./images/photo.jpg" alt="image2" width="1100" height="500">
          </div>
          <div class="carousel-item">
            <img src="./images/photo2.png" alt="image3" width="1100" height="500">
          </div>
        </div>
        
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
      <section class="bg-light" id='aboutus'>
      <h1 class="text-center text-dark pt-4 pb-4">About Us</h1>
      <p class="text-center">Exercitation eiusmod laborum aliquip non officia et nulla amet sint
       magna dolore amet mollit proident. Ullamco anim commodo aliqua id. Cillum fugiat pariatur qui cupidatat aliquip 
       reprehenderit velit aute proident ipsum cupidatat ea exercitation. Esse labore ipsum consectetur deserunt amet dolor est do duis enim commodo in. </p>

    </section>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    </body>
</html>