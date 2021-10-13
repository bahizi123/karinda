<?php session_start(); if (!isset($_SESSION['user'],$_SESSION['pa'])) {
	header("location:login.php");
} ?>
<!DOCTYPE html>
<html>
<head>
	<h2>Bahizi Bank</h2>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mobile Banking</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
  background-color: gray;
  

}
 h2{margin-left: 450px;
       margin-top: 50px;
       margin-top: 10px;
   }
   h4{
   	color: black;
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
  background-color: red;
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color:none;
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

<div class="navbar">
  <a href="#home">Home</a>

  <div class="subnav">
    <button class="subnavbtn">News <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#company">Media</a>
      <a href="#team">Team</a>
      <a href="#careers">About</a>

    </div>

  </div> 
  <div class="subnav">
    <button class="subnavbtn">Services <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#bring">Bring</a>
      <a href="#deliver">Deliver</a>
      <a href="#package">Package</a>
      <a href="#express">Express</a>
    </div>
  </div> 

  <a href="#contact">Contact</a>
   <a href="logout.php">Logout</a>
</div>

<div style="padding:0 16px">
</div>
<br><br><br><br><br>
	<h3>
		Mobile Banking.</h3>
		<h4>Bank of Bahizi was incorporated in the Republic of Rwanda on December 22nd 1966 as a joint venture between the Government of Rwanda and Belgolaise, the subsidiary of Fortis Bank.

The public private partnership involved the ownership of 50% of the ordinary share capital. The bank commenced its operations in 1967, serving as one of the then market leader in banking sector.

Following Fortis Bank strategy of withdrawing its operations in Africa in 2005, the Government of Rwanda acquired the Belgolaise share in 2007, thus increasing its direct and indirect shareholding in the Bank to 100%.

In compliance with revised laws relating to private companies in Rwanda, in 2011 the Bank changed its name from Bank of Kigali S.A to Bank of Kigali Limited and to BK Group PLC in 2017 with 3 subsidiary companies namely BK General Insurance, BB TecHouse and BK Capital.

Bank of Bahizi’s growth over the last five decades is a true story of resilience, hard work and strong partnerships based on Rwandan values. Below are important milestones on the Bank’s history.
2013, 2015 & 2016: Best Bank in Rwanda
Bank of Bahizi got award as Best Bank in Rwanda in year 2013, 2015 & 2016 by EUROMONEY AWARDS FOR EXCELLENCY</h4>


</body>
</html>