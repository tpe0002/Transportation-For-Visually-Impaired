<?php
	if( isset( $_Post['clientName'] ) ) {
		define("HOST", "localhost");
		define("DATABASE", "db1");
		// magical
		define("U_R", "transMAGIC");
		define("P_R", "bFYRFWc2jupQ9xbK");
		$dbMAGIC = new PDO('mysql:host=localhost;dbname=db1', U_R, P_R);
		insert = dbMAGIC->prepare('INSERT INTO clients (fName, phone, disability) VALUES
		(:clientName, :clientNumber, :clientDisability'));
		$insert->bindParam(':clientName', $_POST['clientName']);
		$insert->bindParam(':clientPhone', $_POST['clientPhone']);
		$insert->bindParam(':clientDisability', $_POST['clientDisability']);
		$insert->execute();
	}
?>

<!DOCTYPE html>
<html>
<head>
	<script src="jscolor-2.0.4/jscolor.js"></script>

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
	.saveButton{
	    height:300px;
	    width: 50%;
	    float: left;
	    background: white;
	    background-size: contain;
	    background-repeat: no-repeat;
	    background-image: url(saveButton.png);
	}
	.cancelButton{
	    height:300px;
	    width: 50%;
	    float: left;
	    background: white;
	    background-size: contain;
	    background-repeat: no-repeat;
	    background-image: url(cancelButton.png);
	}
	#information {
		position: relative;
		float: left;
		width: 50%;
		height: 100%;
		display: inline;
	}
	#clientInfo {
		position: relative;
		height: 190px;
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
		height: 190px;
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
	img{
		position: absolute;
		left: 8px;
		top: 0px;
		width: 802px;
		height: 105px;
		z-index: -1;
	}
</style>
</body>

<head>
	<link rel="stylesheet" type="text/css" href="form.css">
	<img src="header2.png">
	<h2>New Client Form</h2>
</head>

<body>
	<form name = "driverForm" action="driverForm.php" method="post">
		<div id="information">
			<div id="clientInfo">
				<label for="clientName" id="firstLabel">Client Name:</label>	
				<input type="text" name="clientName" id="firstField">
				<p></p>
				<label for="clientAddress" id="firstLabel">Address:</label>	
				<input type="text" name="clientAddress"  id="firstField">
				<p></p>
				<label for="clientNumber" id="firstLabel">Phone Number:</label>	
				<input type="text" name="clientNumber" id="firstField">
				<p></p>
				<label for="clientDisability" id="firstLabel">Disability:</label>	
				<input type="text" name="clientDisability" id="firstField">
				<p></p>
				<label for="waiver" id="firstLabel">Waiver:</label>	
				<input type="text" name="waiver" id="firstField">	
			</div>
			--EMERGENCY CONTACT INFORMATION--
			<div id="clientInfo">
				<label for="emerName" id="firstLabel">Contact Name:</label>	
				<input type="text" name="emerName" id="firstField">
				<p></p>
				<label for="emerPhone" id="firstLabel">Contact Phone:</label>	
				<input type="text" name="emerPhone" id="firstField">
			</div>		
		</div>
		<div id="driverSave">
			<button class="saveButton" onclick="alert('New client added.');" type="submit"></button>
			<button class="cancelButton" onclick="location.href='calendarDemo.php';" type="button"></button>
		</div>
	</form>
</body>
</html>

