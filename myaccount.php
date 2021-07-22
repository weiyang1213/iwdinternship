<?php 
	session_start();
	include 'core/init.php';

?>

<?php 
	if(!isset($_SESSION['email'])){
      echo "<script>window.open('login.php','_self')</script>";
    }else{
        echo "<script>window.open('','_self')</script>";
    }
?>

<?php
	$email = $_SESSION['email'];
	$sql = "SELECT * FROM customers WHERE email = '$email'";
    $result = $db->query($sql);
    while ($row_pro = mysqli_fetch_array($result)) {
          $cus_id = $row_pro['id'];
          $cus_name = $row_pro['fullname'];
          $cus_email = $row_pro['email'];
          $cus_address1 = $row_pro['address1'];
          $cus_address2 = $row_pro['address2'];
          $cus_city = $row_pro['city'];
          $cus_state = $row_pro['state'];
          $cus_zipcode = $row_pro['zipcode'];
          $cus_phone = $row_pro['phone'];
          $cus_country = $row_pro['country'];
    }
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Assignment</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.18.0/css/mdb.min.css" rel="stylesheet">
</head>
<body>
	<nav class="mb-1 navbar navbar-expand-lg">
      	<a class="navbar-brand" href="index.php"><?=$cus_name;?></a>
        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"> 
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
          </svg> 
        </span>
      	</button>
	      <!-- Collapsible content -->
	      	<div class="collapse navbar-collapse nav justify-content-end" id="basicExampleNav">
	        <!-- Links -->
		        <ul class="navbar-nav">
          			<li class="nav-item">
            			<a class="nav-link" href="myaccount.php?edit_account">Edit Account</a>
          			</li>
          			<li class="nav-item">
            			<a class="nav-link" href="myaccount.php?change_password">Change Password</a>
          			</li>
          			<li class="nav-item">
            			<a class="nav-link" href="myaccount.php?delete_account">Delete Account</a>
          			</li>
					  <li class="nav-item">
            			<a class="nav-link" href="logout.php">Log out</a>
          			</li>
		        </ul>
	    	</div>
		
	</nav>
	<?php 
			if (!isset($_GET['edit_account'])) {
				if(!isset($_GET['change_password'])){
					if(!isset($_GET['delete_account'])){
						echo 
						"
							<div class='card'>
								<div class='card-header'>
									<h3 class='h3-responsive p-2'>Hello $cus_name</h3>
								</div>
								<div class='card-body table-responsive'>
									<table class='table table-striped table-condensed' style='display: table'>
										
										<tr>
											<th><b>Name: </b></th>
											<td>$cus_name</td>
										</tr>
										<tr>
											<th><b>Phone: </b></th>
											<td>$cus_phone</td>
										</tr>
										<tr>
											<th><b>Email: </b></th>
											<td>$cus_email</td>
										</tr>
										<tr>
											<th><b>Address: </b></th>
											<td>$cus_address1,  $cus_address2</td>
										</tr>
										<tr>
											<th><b>City: </b></th>
											<td>$cus_city</td>
										</tr>
										<tr>
											<th><b>State: </b></th>
											<td>$cus_state</td>
										</tr>
										<tr>
											<th><b>Zipcode: </b></th>
											<td>$cus_zipcode</td>
										</tr>
										<tr>
											<th><b>Country: </b></th>
											<td>$cus_country</td>
										</tr>
									</table>
								</div>
							</div>
						";
					}
				}
			}
		
	?>
	<?php
		if(isset($_GET['edit_account'])){
			include 'student/edit_account.php';
		}
		if(isset($_GET['change_password'])){
			include 'student/change_password.php';
		}
		if(isset($_GET['delete_account'])){
			include 'student/delete_account.php';
		}
	?>
</body>
</html>
<?php include 'includes/footermyaccount.php';?>
