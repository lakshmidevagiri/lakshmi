<!DOCTYPE html>
<html>
<head>
	<title>Shopping</title>
	<style>
		
		#one{
			position: absolute;
			width: 100%;
			height: 550px;
		}
		#two{
			position: absolute;
			padding-top: 0%;
			width: 45%;

		}
		#three{
			position: relative;
			padding-top: 0%;
			padding-left: 50%;
			width: 45%;
		}
		#c1{
			position: relative;

		}
		#c2{
			position: relative;
			padding-left: 50%;
		}
		#p1{
			color: white;
			position: absolute;
			font-size: 80px;
			padding-left: 40%;
			padding-top: 5%;
		}
		#p2{

			padding-top: 600px;
			font-size: 30px;
		}
		
		#p3{
			position: absolute;
			padding-top: 1px;
			font-size: 30px;
		}
		#p4{
			position: relative;
			padding-top: 1px;
			padding-left: 50%;
			font-size: 30px;
		}
		input.large{
			transform: scale(2);
		}


	</style>
</head>
<body>
	


<form action="address.php" method="POST">
	<div>
	<img id="one" src="head.jpeg"><br>
	<p id="p1">Choose Your Shirt</p>
	
	<p id="p2">Shirt Type <span style="color: red;background-color: white;">*</span></p>

	<img id="two" src="img1.jpeg">
	<span id="c1" ><input type="checkbox" name="shirt" class="large"  value="500"></span>
	<p id="p3">Shirt - Rs 500</p>
	<img id="three" src="img2.jpeg">
	<span id="c2"><input type="checkbox" name="shirt" class="large"  value="800"></span>
	<p id="p4">Shirt - Rs 800</p>
	</div><br><br><br><br>
	<p style="font-size: 30px;">Clothing Item <mark style="background-color: white;color: red">*</mark> </p><br>
	
	<div style="font-size: 20px;padding-left: 1%" >
		<input type="radio" name="cloth" required="" value="Womens shirt">Womens shirt<br>
		<input type="radio" name="cloth" required="" value="Mens shirt">Mens shirt<br>
		<input type="radio" name="cloth" required="" value="Childrens shirt">Childrens shirt
	</div><br>
	





	<div style="font-size: 30px;padding-left: 1%;">
			<div style="position: relative;">
			
				<span style="position: relative;">Quality<mark style="color: red;background-color: white">*</mark></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<span style="position: relative;">Size <mark style="color: red;background-color: white">*</mark></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<span>Colour <mark style="color: red;background-color: white">*</mark></span><br>

				<input type="text" name="quan" required size="10px;" style="height: 40px;font-weight: bold;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
				
				
				<select style="height: 40px;width: 60px;" required="">
					<option>S</option>
					<option>M</option>
					<option>L</option>
					<option>XL</option>
				</select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
				
				<select style="height: 40px;width: 80px;" required="">
					<option>RED</option>
					<option>GREEN</option>
					<option>BLACK</option>
					<option>WHITE</option>
				</select>

			</div>
	</div>
	<br><br><br><br><br><br>
<div>
<div style="text-align: center"><input style="font-size: 50px;padding-right: 25%;padding-left: 25%;background-color: grey;border-radius: 20px;" type="submit" name="submit" value="submit"></div>
</div>
</form>


	
</body>
</html>