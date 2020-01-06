,
<!DOCTYPE html>
<html>
<head>
	<title>kitchen menu</title>
	<style>
		#saman{
			margin-left: 180px;

		}
		.container{
			background: url(saam.png);
			background-size:cover; 
			width: 50%;
			height: 400px;
			margin: auto;	
			margin-top: 50px;
			text-align: center;	   
		}
		
		.sam{
			
			padding-top: 100px;
			
		}
		#php{
           color: red;
           font-size: 25px;
		}
		.p{
			color: red;
			font-size: 30px;
		}
		
		
	</style>
</head>
<body>
	<div class="container">
	<div class="sam"><h1 style="text-align: center;color: red;font-weight: 4px;">Food Menu</h1>
	<form action=""  method="post">
		<input type="text" name="day" placeholder="Enter the day" style="height: 40px;font-size: 20px;border-radius: 6px;"; background: black">
		<br><br>
		<input type="submit" name="submit" id="saman" style="background-color: red;color: white;height: 30px;border-radius: 6px;height: 35px;width: 70px;">
	</form>
	
	<p class="p">
		Menu is:
	</p>
	<div id="php">
		<?php
	if (isset($_POST['submit'])) {
		$day=$_POST['day']; 
			if ($day == "monday") {
				echo "Today is pasta";
		}
		elseif ($day == "tuesday") {
			echo "Today is qorma";
		}
		elseif ($day == "Wednesday") {
			 echo "Today is Karrhi chawal";
		}
		elseif ($day == "thursday") {
			echo "Today is baryani";
		}
		elseif ($day == "riday") {
			echo "Today is ";
		}
		elseif ($day == "aturday") {
			echo "Today is daal chawal";
		}
		else {
			echo "Today is mix sabzi";
		}
	}
?>
	</div>
	</div>
	</div>
	
</body>
</html>
