<?php 
if (isset($_POST['reset-password'])) {
	$choose=$_POST['choose'];
  $x=0;
	//$validator=$_POST['validator'];
	$password=$_POST['passd'];
	$passwordrepeat=$_POST['passrd'];

	if ($password!=$passwordrepeat) {
    $x=1;



	}
    require "connection.php";
  if($x!=1){
    $y=0;
  
$sql="select* from passwordreset where token=?";
$st= mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($st,$sql)) {
 echo "statement failed";
}
else{
  mysqli_stmt_bind_param($st,"s",$choose);
  mysqli_stmt_execute($st);
  $getting=mysqli_stmt_get_result($st);
  while($row=mysqli_fetch_assoc($getting)) {
    if($row['token']==$choose)
    {
    $y=1;
    $mail=$row['email'];
}
  }
  if ($y==1) {
      $password=sha1($passwordrepeat);
   $sql="UPDATE login set password='$password' where Email=?";
   $st = $conn->prepare($sql);

    $st->bind_param("s",$mail);
  $st->execute();
  $st->close();

$sql="DELETE from passwordreset  where email=?";
   $st = $conn->prepare($sql);

    $st->bind_param("s",$mail);
  $st->execute();
  $st->close();
  header("location:login.php");
 echo "updated!";
}
}
}
else{
  echo "could not be updated!";
 header("location:reset.php");
}
}

?>