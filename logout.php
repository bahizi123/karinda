<?php session_start(); if (!isset($_SESSION['user'],$_SESSION['pa'])) {
	header("location:login.php");
} ?>
<?php 

if(!isset($_SESSION['name'])){
	session_destroy();
	echo "<script>location.href='login.php'</script>";
}

else{
	header('Location: login.php');
exit;
}
 ?>