<!DOCTYPE html>
<?php include 'includes/functions.php';?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Internship Backend</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css" rel="stylesheet">
  
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


  <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
  
</head>

<body>
  <header>
    <!--Navbar -->
    <!--style="background-color: #e3f2fd; "-->
    <nav class="mb-1 navbar navbar-expand-lg " >

    <a class="navbar-brand" href="../index.php"><img src="../img/svg/navlogo.png" alt="" width="170" style="margin-bottom:2px;"></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
        aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"> 
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
          </svg> 
        </span>
      </button>


      <div class="collapse navbar-collapse nav justify-content-end" id="navbarSupportedContent-333">
        <ul class="navbar-nav" >
          
        <!-- <li class="nav-item">
            <a class="nav-link" href="internship.php">Internship</a>
          </li> -->
        <?php 
            if(!isset($_SESSION['email'])){
             // echo "<li class='nav-item'><a href='myaccount.php' class='nav-link' style='border-radius: 10em;'>My Account</a></li>";
            }
            else{
              echo "<li class='nav-item'><a href='myaccount.php' class='nav-link' style='border-radius: 10em;color: rgba(197, 140, 233, 1)'>My Account</a></li>";
              echo "<li class='nav-item'><a href='logout.php' class='nav-link' style='border-radius: 10em;color: rgba(197, 140, 233, 1)'>Logout</a></li>";
            }
        ?>
          <li class="nav-item">
            <a class="nav-link" style="color: rgba(197, 140, 233, 1);" href="../aboutus.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color: rgba(197, 140, 233, 1);" href="../contactus.php">Contact Us</a>
        </li>
        </ul>
      </div>

    </nav>
    <!--/.Navbar -->
  </header>
  

