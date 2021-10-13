<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
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
h3{
   margin-left: 50px;
       margin-top: 50px;
       margin-top: 10px;	
       color: blue;
}
</style>
<body>
	<h3>Account Not Verified!</h3>
<form action="verifynow.php" method="POST">
		<input type="text" name="email" placeholder="verification email" required=""><br><br>
		<input type="submit" name="btn" value="Verify">
</form>
</body>
</html>