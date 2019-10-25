<!DOCTYPE html>
<html>
<head>
	<title>Address</title>
	<style>
		*{
			margin: 0px;
		}
	</style>
</head>
<body>
	<div style="background-color: grey;height: 125px"><h1 style="text-align: center;font-size: 70px;color: white">Enter Your Shipping Address</h1><div><br><br><br><br><br>
	<div>
		<form action="confirm.php" method="POST"> 
		<span style="font-size: 25px;padding-left: 2%;">First Name<mark style="color: red;background-color: white">*</mark></span>
		<span style="font-size: 25px;padding-left: 14%;">Last Name<mark style="color: red;background-color: white">*</mark></span><br>	
		<span style="padding-left: 2%"><input type="text" name="fname" size="30" style="height: 30px;" required></span>
		<span style="padding-left: 10%;"><input type="text" name="lname" size="30" style="height: 30px;" required></span><br><br>
		<div style="padding-left: 2%;"><p style="font-size: 25px;">Street Address<mark style="color: red;background-color: white">*</mark></p><input type="text" name="address" size="100" style="height: 50px;" required=""></div><br><br>
		<div style="padding-left: 2%"><p style="font-size: 25px">Address Line 2</p><input type="text" name="address1" size="100" style="height: 50px;"></div><br>
		
		<span style="font-size: 25px;padding-left: 2%;">City<mark style="color: red;background-color: white">*</mark></span>
		<span style="padding-left: 20%;font-size: 25px;">State<mark style="color: red;background-color: white">*</mark></span><br>
		<span style="padding-left: 2%"><input style="height: 30px;" type="text" name="city" size="50" required=""></span>
		<span style="padding-left: 6%">
			<select style="height: 30px; width: 150px;" name="state" required="">
				<option>kerala</option>
				<option>tamilnadu</option>
				<option>karnataka</option>
				<option>andhra</option>
				<option>maharashtra</option>
				<option>goa</option>
			 </select>
		</span><br><br>
		<span style="font-size: 25px;padding-left: 2%">ZIP Code<mark style="color: red;background-color: white">*</mark></span>
		<span style="font-size: 25px;padding-left: 10%">Phone number<mark style="color: red;background-color: white">*</mark></span><br>
		<span style="padding-left: 2%"><input type="number" name="zip" style="height: 30px" required="" maxlength="6"></span>
		<span style="padding-left: 8%"><input type="text" name="number" style="height: 30px" size="50" required="" maxlength="10"></span><br><br>


		<span style="font-size: 25px;padding-left: 2%">Email Address <mark style="color: red;background-color: white"> *</mark></span><br>
		<span style="padding-left: 2%"><input type="Email" name="email" size="100" style="height: 30px" required=""></span><br><br>
		<span style="padding-left: 2%;font-size: 25px;">Shipping<mark style="color: red;background-color: white">*</mark></span><br>
		<span style="padding-left: 2%;font-size: 20px;"><input type="radio" name="ship" value="200" required="">Express (Rs:200)<br>
		<span style="padding-left: 2%;font-size: 20px;"><input type="radio" name="ship" value="50" required="">Standard (Rs:50)</span><br><br><br><br>

	</div>

	<div style="text-align: center;"><input style="font-size: 50px;padding-left: 25%;padding-right: 25%;background-color: grey;border-radius: 20px;" type="submit" name="submit" value="submit"></div>
	</form>

</span>
</span>

	<?php
	session_start();
	$a=$_POST['cloth'];
	$_SESSION['cloth']=$a;
	$b=$_POST['shirt'];
	$_SESSION['shirt']=$b;
	$z=$_POST['quan'];
	$_SESSION['quan']=$z;
	
	?>


</body>
</html>