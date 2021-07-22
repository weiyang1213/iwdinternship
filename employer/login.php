<?php 
	session_start();
	include 'includes/header.php';
	include '../core/init.php';
?>
<!-- <div id="about" class="view" style="height: 50%;background: url('../img/ban.JPG')no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    padding:">
	<div class="mask rgba-black-strong">
		<div class="container-fluid d-flex align-items-center justify-content-center h-100">
			<div class="row d-flex justify-content-center text-center">
				<div class="col-md-10">
				<a href=""><img src="../img/Logo.png" class="img-fluid" style="width: 400px;"></a>
				<hr class="hr-light">
				<h4 class="white-text my-4 h1-responsive" style="font-family: 'Cookie', cursive;">Admin Login</h4>
				</div>
			</div>
		</div>
	</div>
</div> -->

<h1 class="text-center">Employee Login</h1>
<div class="hero d-flex">
    <img src="../img/loginimage/loginheroleft.png" alt="index hero image" style="width: 100px; height:100px; margin-top: 250px;">
    <img src="../img/loginimage/loginhero.png" alt="index hero image" class="mx-auto d-block mt-3 mt-2" style="width: 400px;">
    <img src="../img/loginimage/loginheroright.png" alt="index hero image"  style="width: 100px; height:100px; margin-top:100px;">
</div>
<div class="container p-3">
	<div class="card">
		<div class="card-header">
			<h3 class="p-2 h3-responsive">Login here!</h3>
		</div>
		<form action="" method="post">
			<div class="card-body">
				<div class="md-form form-sm">
					<input type="text" id="email" class="form-control form-control-sm" name="email" required>
					<label for="email">Email</label>
				</div>
				<div class="md-form form-sm">
					<input type="password" id="password" class="form-control form-control-sm" name="password" required>
					<label for="password">Password</label>
				</div>
				<div class="p-3">
					<div class="float-left">
						<p class="">Forgot your password? <a href="checkout.php?forgot_pass">Click here</a></p>
					</div>
					<div class="float-right">
						<p class="">Don't have an account? <a href="register.php">Register now</a></p>
					</div>
				</div>
			</div>			
			<div class="card-footer">
				<div class="float-right">
					<button type="submit" name="login" class="btn btn-black" style="border-radius: 10em;background: #1c2a48">Login</button>
				</div>
			</div>
		</form>
		<?php 
			if(isset($_POST['login'])){
				$email = $_POST['email'];
				$password = $_POST['password'];

				$sql = "SELECT * FROM employer WHERE password = '$password' AND email = '$email'";
				$runSql = $db->query($sql);
				$check_user = mysqli_num_rows($runSql);
				if($check_user == 0){
					echo "<script>alert('Your password or email is incorrect, please try again!')</script>";
					exit();
				}
				if($_SESSION['email'] = $email){
					echo "<script>alert('You logged in successfully!')</script>";
					echo "<script>window.open('./internship.php','_self')</script>";
				}
				// $ip = getIp();
				// $sel_cart = "SELECT * FROM cart WHERE ip_add = '$ip'";
				// $run_cart = $db->query($sel_cart);
				// $check_cart = mysqli_num_rows($run_cart);
				// if($check_customer > 0 AND $check_cart == 0){
				// 	$_SESSION['email'] = $email;
				// 	echo "<script>alert('You logged in successfully!')</script>";
				// 	echo "<script>window.open('myaccount.php','_self')</script>";
				// }else{
				// 	$_SESSION['email'] = $email;
				// 	echo "<script>alert('You logged in successfully!')</script>";
				// 	echo "<script>window.open('cart.php','_self')</script>";
				// }
			}
		?>
	</div>
</div>

<?php
	include 'includes/footer.php';
?>
