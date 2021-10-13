<?php
session_start();
// LOGIN USER
include'connection.php';
if (isset($_POST['login'])){
  $username = $conn->real_escape_string($_POST['uname']);
  $password = $conn->real_escape_string($_POST['pass']);

    $cpassword=$password;
    $salted="well".$password;
$password=hash('sha1' , $salted);
    $query = "SELECT * FROM login WHERE username=? AND password=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('ss',$username,$password);
    if($stmt->execute()){
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;
  }
  if($num_rows > 0){
    
$query = "SELECT * FROM login WHERE username='$username' AND password='$password' AND status='Verified' ";
    $stmt = $conn->prepare($query);
    if($stmt->execute()){
    $result = $stmt->get_result();
    $num_rows = $result->num_rows;
  }
  if($num_rows > 0){
   
      $_SESSION["uname"] = $username;
   
      // if remember me clicked . Values will be stored in $_COOKIE  array
      if(!empty($_POST["remember"])) {
//COOKIES for username
setcookie ("uname",$_POST["uname"],time()+ 3600);
//COOKIES for password
setcookie ("pass",$cpassword,time()+ 3600);
} else {
if(isset($_COOKIE["uname"])) {
setcookie ("uname","");
if(isset($_COOKIE["pass"])) {
setcookie ("pass","");
        }
      }
  
  }
  header('location:index.php');
}
else{

header('location:loginform.php');
}
}else {
      echo"Wrong username/password combination ";
    }
  }

?>