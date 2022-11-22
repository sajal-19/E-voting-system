<?php  
 
include('connecty.php');
session_start();
$sql= "select * from userdata where standard='group'  ";

$result= mysqli_query($con, $sql);

$shops= array();

if (mysqli_num_rows($result) >0)

{

   while ($row= mysqli_fetch_assoc($result)) {

 

   $shops[]= $row;

}

}

$a= array();

foreach ($shops as $shop) {

$a[]= $shop['username'];

}

$b= array();

foreach ($shops as $shop) {

$b[]= $shop['votes'];

}

?>
<!doctype html>
<html lang="en">

  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="stylesheet" href="../sign.css">
    <title>Admin dashboard</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><b>Vote-Me</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../home.html">Home</a>
        </li>
      </ul>
    </div>
  </div>
  
</nav>
<br><br><br><br>
<h1 style="text-align: center; color:gray;"> Dashboard</h1>
<div style="text-align: center;">
<canvas id="myChart" style="width:100%;max-width:600px; margin:10px 0px 50px 100px"></canvas>

<script>
              
var xValues = <?php echo json_encode($a ); ?>;
var yValues = <?php echo json_encode($b ); ?>;
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart", {
  type: "bar",
  data: {
    
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "Votes Getting by Party"
    }
  }
});
</script>
</div>
<br><br><br><br>
<footer class="text-center text-lg-start bg-light text-muted">
  
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom" style="background-color:#EDEDED"
  >
    
    <div class="me-5 d-none d-lg-block">
      <span>Get connected with us on social networks:</span>
    </div>
  
    <div>
      <a  class="btn btn-dark btn-floating m-1"
      style="background-color: #3b5998;"
      href="#!"
      role="button">        <i class="fab fa-facebook-f"></i>
      </a>
      <a class="btn btn-dark btn-floating m-1"
      style="background-color: #55acee;"
      href="#!"
      role="button">
        <i class="fab fa-twitter"></i>
      </a>
      <a class="btn btn-dark btn-floating m-1"
      style="background-color: #dd4b39;"
      href="#!"
      role="button">
        <i class="fab fa-google"></i>
      </a>
      <a  class="btn btn-dark btn-floating m-1"
      style="background-color: #ac2bac;"
      href="#!"
      role="button">
        <i class="fab fa-instagram"></i>
      </a>
      <a class="btn btn-dark btn-floating m-1"
      style="background-color: #0082ca;"
      href="#!"
      role="button">
        <i class="fab fa-linkedin"></i>
      </a>
      <a class="btn btn-dark btn-floating m-1"
      style="background-color: #333333;"
      href="#!"
      role="button">
        <i class="fab fa-github"></i>
      </a>
    </div>
  </section>
  
  <div class="text-center p-4" style="background-color:#0F0E0E">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="home.html">Vote-Me.com</a>
  </div>

</footer>
<!-- Footer -->
   
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>

</html>