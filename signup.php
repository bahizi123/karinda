
<!DOCTYPE html>
<html>
<head>
  <h2>Bahizi Bank</h2>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {
	text-align: center;
	background-color: gray;
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background-image: url("baba.jpg");
 background-color:white;

  }
  fieldset{
   display: block;
  display: inline-block;
    height: 200%;
      background-size:cover;
       
       background-color: green;
}
.navbar {
  overflow: hidden;
  background-color: #333; 
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.subnav {
  float: left;
  overflow: hidden;
}

.subnav .subnavbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: none;
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: none;
  width: 100%;
  z-index: 1;
}

.subnav-content a {
  float: left;
  color: white;
  text-decoration: none;
}

.subnav-content a:hover {
  background-color: #eee;
  color: black;
}

.subnav:hover .subnav-content {
  display: block;
}
</style>
</head>
<body>


	
	<form action="ikaze.php" method="POST">
		<fieldset>
		<h2>Sign Up</h2>
		
		Firstname:<input type="text" name="fname"><br><br>
		Lastname:<input type="text" name="lname"><br><br>
		Email:&nbsp&nbsp&nbsp&nbsp&nbsp<input type="email" name="email" required=""><br><br>
        username:<input type="text" name="uname"><br><br>
        password:<input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{10,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 10 or more characters" name="psw" required><br><br>
          <button
          type="button"
          id="btn-google"
          class="btn btn-default btn-danger btn-block">
            Sign In with Google
        </button><br><b><b><br>
        
        <input type="submit" name="" value="Sign Up"><b><b><br><b><b><br>
        <a href="login.php">Already Have Account</a>
       
</fieldset>
	</form>
 
</body>
</html>
