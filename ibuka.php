<?php 
if (isset($_POST['forgot'])) {
	$email=$_POST['email'];
	$k=0;
	include("connection.php");
	$sql="select* from login where Email=?";
$st= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($st,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($st,"s",$email);
  mysqli_stmt_execute($st);
  $select=mysqli_stmt_get_result($st);
  while($row=mysqli_fetch_assoc($select)) {
    if($row['Email']==$email)
    {
    $k=$k+1;
    $tokenEmail=$row['Email'];
}
  }
}
  if($k>=1){
	$choose=bin2hex(random_bytes(8));
	$token=random_bytes(32);

	$url="http://localhost/database/reset.php?choose=$choose";
	
     $sql="delete from passwordreset where email=?";
     $st= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($st,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($st,"s",$email);
  mysqli_stmt_execute($st);
}
$q="insert into passwordreset(email,token) values(?,?)";
$st= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($st,$q)) {
 echo "statement failed";
}
else{

  mysqli_stmt_bind_param($st,"ss",$email,$choose);
  mysqli_stmt_execute($st);
}

$from = 'erickarinda5000@gmail.com';
$to = $email;
$subject = 'Reset Your Passowrd';
$message = '<p>Click to this  link and follow ';
$message .= '<a href="'.$url.'</a></p>';
$headers = 'From: ' . $from;
$headers .= 'Reply-To: ' . $from;
$headers .= 'Content-type:text/html';
mail($to, $subject, $message, $headers);

//header("location:reset_password.php");
echo "check your email";
}
else{

	//header("location:reset_password.php");
	echo "email not found";
}
}
?>