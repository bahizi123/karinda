<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "websecurity";
$connection = new mysqli($server, $username, $password, $database);
$a = $_POST['name'];
$sql = "SELECT uname, pwd FROM login where uname = '$a'";

$result = $connection->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	$uname=$row["l_username"];
$pwd=$row["l_password"];
}
}
session_start();
if(isset($_SESSION['name'])){
	echo "<h1>welcome ".$_SESSION['name']."</h1>";
}
else{
	if($_POST['name']===$uname && $_POST['pass']===$pwd){
		$_SESSION['name'] = $uname;
		echo "<script>location.href='welcome.php'</script>";
	}
	else{
		echo "<script>alert ('username or password incorrect!')</script>";
		echo "<script>location.href='login.php'</script>";
	}
}
?>