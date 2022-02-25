<?php  session_start()?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bus Ticketing System</title>

<link rel="stylesheet" type="text/css" href="semantic/semantic.min.css">
<script src="semantic/jquery.min.js"> </script>
<script src="semantic/semantic.min.js"></script>
<script src="order_validate.js"></script>

<style>
  
body{
background-color:92a8d1;
}
a{
	cursor:pointer;
}

</style>
</head>
<body>
    <?php 
      echo "<div align = 'center'</div>";
      ?>
    <div class="ui inverted huge borderless fixed fluid menu">
      <a class="header item">BUS TICKETING SYSTEM</a>
    </div><br>
<div class="ui text container" style="margin-top:90px">
<div id="err001" class="ui icon small attached message">
<i class="bus loading icon gload"></i>
<div class="content">
<div class="align=center; header">Getting Ready</div>
<p>Wait for a Moment</p>
<div id="proceed"></div>
</div>
</div>
<div class="ui attached bottom message">
<i class="bus icon"></i> <i class="bus icon"></i> <i class="bus icon"></i> <i class="bus icon"></i> <i class="bus icon"></i> 
<div class="ui horizontal divider">Bus Ticketing System</div>
<i class="bus icon"></i> <i class="bus icon"></i> <i class="bus icon"></i> <i class="bus icon"></i> <i class="bus icon"></i>  



<?php
function generate_order(){
	
//These are just Random Letters forming a transaction ID
$order_ref="";
$char=array('O','T','R','S','A','C','B','E');
$num=rand(11,99);
$num2=rand(12,89);
$num3=rand(13,92);
shuffle($char);
//now the final
$order_ref=$char[0].$char[3].$num.$char[1].$num2.$char[2].$num3.$char[4];
//assignming to user
$_SESSION['ORDERREF']=$order_ref;
	
}
generate_order();
?>

<script>
setTimeout(function(){$('#proceed').siblings().hide();$('.gload').hide();document.getElementById("proceed").innerHTML="<a href='booking.php' class='ui button small green'>Book a Ticket</a> <a href='../admin/login.php' class='ui button small blue'>Login as Admin</a> "},5000);
</script>

</body>
</html>