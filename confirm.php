<!DOCTYPE html>
<html>
<head>
	<title>Confirm</title>
	<style>
		*{
			margin: 0px;
		}
	</style>
</head>
<body>
	<h1 style="text-align: center;background-color: grey;height: 125px;padding-top: 2%;font-size: 80px;">Order Summary</h1><br><br><br>
	<h2>Please take a moment to confirm your order</h2><br><br>

	<?php
	session_start();
	$a=$_POST['fname'];
	$b=$_POST['lname'];
	$c=$_POST['address'];
	$d=$_POST['address1'];
	$g=$_POST['zip'];
	$h=$_POST['number'];
	$i=$_POST['email'];
	$j=$_POST['ship'];
	

	echo "<h2>"."Name : "."Mr. ".$a." ".$b."</h2><br>";
	echo "<h2>"."Address : ".$c." , ".$d."<h2><br>";
	echo "<h2>"."ZipCode : ".$g."</h2><br>";
	echo "<h2>"."Phone Number : ".$h."</h2><br>";
	echo "<h2>"."Email : ".$i."</h2>";
	echo "<br><br><br>";
	echo "<div style='font-size:40px;background-color:grey;'><span style='padding-left:30px;'>Item</span>"."<span style='padding-left:250px;'>Item Description</span>"."<span style='padding-left:300px;'>Quantity</span>"."<span style='padding-left:500px;'>Amount</span></div><br>";
	

	$k=$_SESSION['shirt'];
	if ($k==500) {
		$l="Shirt - Rs 500";
	}
	elseif($k==800){
		$l="Shirt - Rs 800";
	}

	$m=$_POST['ship'];
	if ($m==200) {
		$n="Express (Rs:200)";
	}
	elseif ($m==50) {
		$n="Standard (Rs:50)";
	}

	$x=$_SESSION['shirt'];
	$y=$_SESSION['quan'];
	$z=($x)*($y);
	$w=($y)*($m);

	echo "<div style='font-size:20px;'><span style='padding-left:30px'>".$_SESSION['cloth']."</span>"."<span style='padding-left:300px'>".$l."</span>"."<span style='padding-left:400px'>".$y."</span>"."<span style='padding-left:600px'>".$z."</span></div><br> <hr><br>";

	echo "<div style='font-size:20px;'><span style='padding-left:30px'>"."Shipping"."</span>"."<span style='padding-left:300px'>".$n."</span>"."<span style='padding-left:400px'>".$y."</span>"."<span style='padding-left:600px'>".$w."</span></div><hr><br>";
	
	$o=$z+$w;
	echo "<div style='font-size:30px;'><span style='padding-left:30px'>"."Order Total"."</span>"."<span  style='padding-left:80%'>".$o."</span></div>";

	?>
	<div style="text-align: center;padding-top: 5%"><a style="text-decoration: none;font-size: 50px;padding-right: 25%;padding-left: 25%;background-color: grey;border-radius: 20px;color: white" href="val.php">Continue</a></div>
</body>
</html>