</head>
<body>


<?php
//Create a two textbox that will output the sum, difference, product and quotient depend on the selected mathematical operators.
echo "Project Management";
echo "<p><center>Bus Ticketing System<br>";
?>

'<body style="background-color:lightblue">';

<form method="post">
<table border = 0 padding = "5" align="center">
	<tr><td>
<tr>
<td> <input type="text" name="num1" value="" placeholder="Enter your Name"/> </td>
</tr>
<tr>
<td> <input type="text" name="num2" value="" placeholder="Enter your Age"/> </td>
</tr>




<tr>
<td> 
	<?php
	 echo "<p><center> Are you Vaccinated?";
	?>
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="Yes") echo "checked";?>
value="yes">Yes
<input type="radio" name="gender"
<?php if (isset($gender) && $gender=="No") echo "checked";?>
value="no">No

</tr>
</table>
</form>





</body>
</html>
