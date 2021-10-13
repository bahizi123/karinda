
<?php
session_start();
//create csrf token
if(isset($_POST) & !empty($_POST)){
  if(isset($_POST['csrf_token'])){
    if($_POST['csrf_token'] == $_SESSION['csrf_token']){
      //echo "CSRF Validation Success";
    }
    else {
      echo"CSRF Validation Failed.";
    }
  }
}
$token = md5(uniqid(rand(), true));
$_SESSION['csrf_token'] = $token;
$_SESSION['csrf_token_time'] = time();
?>

<!DOCTYPE html>
<html>
<head>
	<h2>Bahizi Bank</h2>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
body {
	text-align: left;
	background-color: white;
	background-image: url("baba.jpg");
 background-color:white;

  font-family: Arial, Helvetica, sans-serif;
 
	font-color:blue;

	 float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 54px 66px;
  
  display: block;
  display: inline-block;
    height: 200%;
      background-size:cover;
       height: 100%;
       margin-left: 450px;
       margin-top: 150px;
}
h2{
   margin-left: 50px;
       margin-top: 50px;
       margin-top: 10px;	
       color: blue;
}
h3{
	
	font-weight: bold;
	font-color:black;
	color:black;
}
a{
 display: block;
  display: inline-block;
  font-color:red;
}	
fieldset{
   display: block;
  display: inline-block;
    height: 200%;
      background-size:cover;
       
       background-color: green;
}

</style>
</head>

<body>


<form action="iwacu.php" method="POST">
	<fieldset>
<input type ="hidden" name="csrf_token" value="<?php echo $token; ?>">
<h3>&nbsp&nbsp&nbsp&nbsp
Login</h3>
		
	&nbsp&nbsp&nbsp&nbspusername: <input type="text" name="uname" value="<?php if(isset($_COOKIE["uname"])) { echo $_COOKIE["uname"]; } ?>" ><br><br>
	&nbsp&nbsp&nbsp&nbsppassword: <input type="password" name="pass" value="<?php if(isset($_COOKIE["pass"])) { echo $_COOKIE["pass"]; } ?>" ><br><br>
	
   &nbsp&nbsp&nbsp&nbsp <input type="checkbox" id="rememberMe" name="remember" <?php if(isset($_COOKIE["uname"])) { ?> checked <?php } ?>> 
	&nbsp&nbsp&nbsp&nbsp<label for="rememberMe">Remember me</label>
    &nbsp&nbsp&nbsp&nbsp<input type="submit" name="login" value="Login"><b><b><br><b><b><br><b><b><br>
    	
        </span>
&nbsp&nbsp&nbsp
          <a href="reset_password.php">Forgot your password</a><b><b><br><b><b><br><b><b><br>
    	
	<a href="signup.php">&nbspCreate New Account</a>

</fieldset>

</form>

</body>

</html>


















