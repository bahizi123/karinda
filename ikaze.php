<?php
session_start();
$Firstname = $_POST['fname'];
$Lastname = $_POST['lname'];
$Email = $_POST['email'];
$usernam= $_POST['uname'];
$password= $_POST['psw'];

require_once('connection.php');
$code= mt_rand(100000, 999999);
 $_SESSION['email'] =$Email;
   $_SESSION['code'] =$code;
$status = "Not verified";
$sql="insert into login (Firstname,Lastname,Email,username,password,code,status) values(?,?,?,?,?,?,?)";

$st=mysqli_stmt_init($conn);
$to=$Email;
 $from="From: erickarinda5000@gmail.com";
    $subject="Verification Code for  Bahizi Bank";
    $message =$code;
  
    $mailing = mail($to,$subject,$message,$from);
if(mysqli_stmt_prepare($st,$sql))
{
  $salted="well".$password;
$hashed=hash('sha1' , $salted);

//echo "New Register created successfully";
mysqli_stmt_bind_param($st,"sssssss",$Firstname,$Lastname,$Email,$usernam,$hashed,$code,$status);
mysqli_stmt_execute($st);

//echo "<script>location.href='akana.php'</script>";
header("location:verification.php");
}
else{

echo "error:".$sql."<br>".$conn->error;
}

?>