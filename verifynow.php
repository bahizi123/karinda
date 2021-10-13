<?php
session_start();
include'connection.php';
// REGISTER USER
if (isset($_POST['btn'])) {
  // receive all input values from the form
 
  $email = $conn->real_escape_string($_POST['email']);


   
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo"Invalid Email format";
    }
  
  else{
  /* first check the database to make sure 
   an entered email is in the Database*/
  
    $result ="SELECT count(*) FROM login WHERE Email=?";
$stmt = $conn->prepare($result);
$stmt->bind_param('s',$email);
$stmt->execute();
$stmt->bind_result($count);
$stmt->fetch();
$stmt->close();
  if ($count==0) { // if user exists
   
      echo"No account with the Email provided";
    }
    else{

  // create and send a verification code to the email
  
    
$otp= mt_rand(100000, 999999);

    $query = "UPDATE login SET code=? WHERE Email=? ";
  $stmti = $conn->prepare($query);
$stmti->bind_param('is',$otp,$email);
$stmti->execute();
$stmti->close();
    
    $_SESSION['em'] = $email;
    $_SESSION['code'] = $otp;
    //$_SESSION['stat'] = $status;
    $to=$email;
    $from="From: erickarinda5000@gmail.com";
    $subject="Verification Code for Karinda Website";
    $message =$otp;
  
    $mailing = mail($to,$subject,$message,$from);

    header('location: verification.php');
    
  }
}
}


?>