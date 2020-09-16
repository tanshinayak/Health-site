<?php
$servername="localhost";
$Username="tanshi";
$password="tanshi123";
$dbname="healthcare";
//create db connection
$conn=mysqli_connect($servername,$Username,$password,$dbname);
if(!$conn)
{
    die("connection failed:". mysqli_connect_error());
}
$sql="SELECT * FROM appointment WHERE a_status='nottaken'";
$data=mysqli_query($conn,$sql);
?>
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
        <h1 class='bg-light text-center font-weight-bolder text-danger pt-3'>Health Care App
          </h1>
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
          <li><a class=" text-light" href="login.php">Login</a></li></ul>
          <ul class="navbar-nav  ml-5">
            <li><a class=" text-light" href="doctor.php">Doctor</a></li></ul>
<!--search-->
  <form class="form-inline ml-auto">
      <input class="form-control mr-sm-2" type="text" placeholder="Search">
      <button class="btn btn-success" type="submit">Search</button>
    </form>
    </nav>
  </div>
  <div>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>Doctor Name</th>
          <th>Category</th>
          <th>Email</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
          <?php
          if($data)
          {
        while($result = mysqli_fetch_assoc($data)) {
        echo"<tr>";
        echo "<td>".$result["a_id"]. "</td>";
        echo "<td>"."<button class='btn btn-primary'>"."Book"."</button>"."</td>";
        echo "</tr>";
       }}
       else{
         echo "Data not available";
       }
      ?>
      </tbody>
    </table>
  </div>
  </div>
  <?php
  mysqli_close($conn);
  ?>
  </body>
  </html>