<<?php
	function addVehicles(){
		define("HOST", "localhost");
		define("DATABASE", "db1");
		// magical
		define("U_R", "transMAGIC");
		define("P_R", "bFYRFWc2jupQ9xbK");
		$dbMAGIC = new PDO('mysql:host=localhost;dbname=db1', U_R, P_R);
		$insert = $dbMAGIC->prepare('INSERT INTO vehicleColor(vehicleType, seats, color) VALUES
		(:vehicleType, :vehicleSeats, :vehicleColor)');
		$insert->bindParam(':vehicleType', $_POST['vehicleType']);
		$insert->bindParam(':vehicleSeats', $_POST['vehicleSeats']);
		$insert->bindParam(':vehicleColor', $_POST['vehicleColor']);
		$insert->execute();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<script src="jscolor-2.0.4/jscolor.js"></script>
<script>
	function clicked(){
		if (confirm('Are your sure?')){
			var phpadd = <?php echo addVehicles();?>;
		}
	}	
</script>

<style>
	h2{
		position: relative;
		left: 10px;
		right: 10px;
		font-size: 32px;
		font-family: Zapf Chancery, cursive;	
	}
	img{
		position: absolute;
		top: 0px;
		width: 100%;
		height: 105px;
		z-index: -1;
	}
</style>
</head>
<body>
<style>
	html {
		height: 100%;
	}
	body{
		height: 100%;
		width: 100%;
	}
	.button{
	    background:white;
	    height:50%;
	    width: 100%;
	    font-size: 50px;
		font-family: Zapf Chancery, cursive;	
	}
	#driverInfo {
		position: relative;
		float: left;
		width: 50%;
		height: 100%;
		display: inline;
	}
	#driverSave {
		position: relative;
		float: right;
		width: 50%;
		height: 100%;
		display: inline;
	}
	#saveButton{
		width: 100%;
		height: inherit;
	}

	#firstLabel {
		position: relative;
		top: 20px;
		left: 10px;
	}
	#firstField {
		position: absolute;
		margin: 20px;
		left: 170px;
	}
</style>
</body>

<head>
	<link rel="stylesheet" type="text/css" href="form.css">
	<img src="header2.png">
	<h2>Driver Insertion Form</h2>
</head>

<body>
	<form name = "driverForm" action="driverForm.php" method="post">
		<div id="driverInfo">
			<label for="vehicleType" id="firstLabel">Vehicle ID:</label>	
			<input type="text" name="vehicleType"  id="firstField">
			<p></p>
			<label for="vehicleSeats" id="firstLabel">Seats:</label>	
			<input type="text" name="vehicleSeats"  id="firstField">
			<p></p>
			<label for="vehicleColor" id="firstLabel">Vehicle Color:</label>	
			<input name="vehicleColor" class="jscolor jscolor-active" id="firstField"value="ab2567" autocomplete="off" style="color: 
			rgb(255, 255, 255); background-image: none; background-color: rgb(171, 37, 103);">
		</div>
			<div id="driverSave">
			<button class="button" onclick="save();" type="button">Save</button>
		</div>
</body>
</html>
