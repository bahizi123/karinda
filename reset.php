<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
	body{
		   height: 200%;
      background-size:cover;
       
       color: blue;
       text-align: center;
	background-color: gray;
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
 
 background-color:white;
 margin-left: 450px;
       margin-top: 150px;
        display: block;
  display: inline-block;
    height: 200%;
      background-size:cover;
       
       background-color: green;
	}
</style>
<body>
	<?php 
$choose=$_GET['choose'];
if(empty($choose)){
	echo "could not verify your request";
}
else{


	 ?>
	<h1>RESET PASSWORD</h1>
	<p>An e-mail will be send to you with instrucions on how to reset your password.</p>
 <form action="naje.php" method="POST">
 	<input type="password" name="passd" placeholder="Type your new password.." pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{10,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 10 or more characters" required=""><br><br>
 	<input type="password" name="passrd" placeholder="Confirm  new password.." pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{10,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 10 or more characters" required="">
 	 <input type="hidden" name="choose" value="<?php echo $choose; ?>"><br><br><br>
 	<button type="submit" name="reset-password">Send</button>
  
 </form>
	<?php } ?>		
		
</body>
 
</html>
