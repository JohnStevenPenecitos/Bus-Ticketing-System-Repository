<?php session_start()?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Group 1-Bus Ticketing System</title>

    <link href="static/dist/semantic-ui/semantic.min.css" rel="stylesheet" type="text/css" />
    <script src="static/dist/jquery/jquery.min.js"></script>
	<script src="admin.js"></script>
	<style>
    
body{
background-color:92a8d1;
}
<?php 
      echo "<div align = 'center'</div>";
      ?>
</style>
      <?php 
      echo "<div align = 'center'</div>";
      ?>
</head>
<body>
     <?php 
      echo "<div align = 'center'</div>";
      ?>
      
    <div class="align = center; ui white huge borderless fixed fluid menu">
    
          
      <a class="header item">BUS TICKETING SYSTEM</a>
      
 
</div><br>
	
<div class="ui container" id="dynamic" style="margin-top:100px">


<div class="ui green container">
<div class="ui attached message">
  <div class="header">Login Panel</div>
  
<?php
if( (isset($_POST['username'])) && (isset($_POST['password'])) ){
$username=$_POST['username'];
$password=$_POST['password'];

//validating no validation using admin admin as password	
if(($username=="admin") && ($password=="password")){
	$_SESSION['username']=$username;
	header("location: bookings.php");
}
else{
echo ("<p style='color:red;text-align:center'> Invalid Username or Password</p>");	
}	
}
?> 
</div>

<form class="ui form attached fluid loading segment" method="POST">
  	<input type="hidden" name="frmLogin" value="true">
  <div class="field">
    <label>Username</label>
    <input placeholder="Enter your Username" name="username" type="text" autofocus required>
  
  </div>
  <div class="field">
    <label>Password</label>
    <input type="password" placeholder="Enter your password" name="password" required>
  </div>

 <div style="text-align:center">
 <input type="submit" name="login" class="ui black submit button" tabindex=3 value="Login"> 
</div>
</form>

<div class="ui bottom attached warning message">
<i class="icon help"></i> Forgotten password? Just use Username as<a href="#0"> admin</a> and password as <a href="#">password</a> to access.
</div>





</div>
</div>
</body>
</html>
