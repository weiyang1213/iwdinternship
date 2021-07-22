
<?php 
  session_start();
  require_once 'core/init.php';
  include 'includes/header.php'; 
?>

<style>
.animate__animated.animate__fadeInDown {
  --animate-duration: 3s;
}

.animate__animated.animate__fadeInLeft {
  --animate-duration: 3s;
}
.animate_animated.animate__zoomInRight{
  --animate-duration: 3s;

}
</style>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<main>

<body style="background-color: white;">
  <div>
    <div class="animate__animated animate__fadeInDown primary text-center">
      <h1 style="color:#00a7e1" class="display-5 mt-5 mb-5">About Us</h1>
   
    </div>
  </div>



  <!-- START THE FEATURETTES -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="./img/aboutusimage/slider1.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/aboutusimage/slider2.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="./img/aboutusimage/slider3.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

  <div class="row featurette mt-5 ml-5">
    <div class="animate__animated animate__fadeInLeft col-md-7">
      <h2 class="featurette-heading "> JxbStreet</h2>
      <p class="lead">JxbStreet.com is an employment website. It was founded in 1997. Founded in Malaysia, it is now Southeast Asia's largest online employment company, according to Forbes. It currently serves about 80000 corporate customers and 11 million </p>
    </div>
    <div class="animate__animated animate__zoomInRight col-md-5 mt-2">
      <img src="https://www.jobstreet.com.my/career-resources/wp-content/uploads/sites/2/2019/06/Untitled-design-46.png" alt="" height="300px" width="400px">
    </div>
  </div>

  <hr>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</main>

  


  <?php include 'includes/footer.php'; ?>
