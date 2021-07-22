<?php 
	session_start();
	session_destroy();
	echo "<script>window.open('login.php','_self')</script>";
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/footer.php';?>