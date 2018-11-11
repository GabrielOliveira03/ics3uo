<!DOCTYPE html>
<html lang="en">
<head>
	<title>Lesson - HTML Forms</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link rel="shortcut icon" href="images/logo.ico">
	<style type="text/css">

body {
	padding: 0;
	margin: 0;
	font-family: Arial, Verdana;
	font-size: 1.0em;
	width: 100%;
	/* http://lea.verou.me/css3patterns/ */
	background:
	linear-gradient(45deg, #92baac 45px, transparent 45px)64px 64px,
	linear-gradient(45deg, #92baac 45px, transparent 45px,transparent 91px, #e1ebbd 91px, #e1ebbd 135px, transparent 135px),
	linear-gradient(-45deg, #92baac 23px, transparent 23px, transparent 68px,#92baac 68px,#92baac 113px,transparent 113px,transparent 158px,#92baac 158px);
	background-color:#e1ebbd;
	background-size: 128px 128px;
}
form {
		position: relative;
		padding: 20px;
		margin-left: auto;
		margin-right: auto;
		width: 50%;
		background: rgba(255,255,255,0.7);
}
input, select, textarea {
		font-size: 1.4em;
		border: 1px solid #999999;
		padding: 5px;
		border-radius: 0.5em;
		outline: none;
		margin: 5px;
}

	</style>
</head>
<body>
<h2>HTML Forms & Input - The Basics</h2>
<p>This simple site will show you how to create a simple form; there will be a PHP extension to this show how to work with the submitted data.</p>

<!-- PHP extension code goes below this -->
<?php
// only show the information if the button named "subButton" has been pressed
if ($_POST['subButton']) {
	// set the variable with the submitted value
		$firstname = $_POST['fname'];
    $password = $_POST['pwd'];
		$sex = $_POST['sex'];
		$fruit1 = $_POST['fruit1'];
		$fruit2 = $_POST['fruit2'];
		$car = $_POST['car'];
		$info = $_POST['info'];

	// display the name to the screen
	if (empty($firstname)) {
			echo nl2br ("You have no first name.\n\n");
	}	else {
			echo "<p>Your first name is " . $firstname . ".</p>";
		}

		if (empty($password)) {
				echo nl2br ("You do not have a password.\n\n");
		} else {
				echo "<p>Your password is $password.</p>";
		}

	if (empty($sex)) {
			echo nl2br ("You do not have a sex.\n\n");
	} else {
			echo "<p>You are a $sex.</p>";
	}

	if (empty($fruit1)) {
			echo '';
	} else {
			echo "<p>You have a $fruit1. </p>";
	}

	if (empty($fruit2)) {
			echo '';
	} else {
			echo "<p>You have an $fruit2. </p>";
	}

	if ($car == none ) {
			echo nl2br ("You do not own a car.\n\n");
	} else {
			echo "<p>Your car is a $car.</p>";
	}

	if (empty($info)) {
			echo 'You have written nothing.';
	} else {
			echo "<p>You have written: $info</p>";
	}

}
?>

<!-- there are two form methods: "get" and "post" ; "get" shows the values for the type variables and values, "post" hides the type variables and values //-->
<form name="form1" action="activity-1-9.php" method="post">
	<!-- text input //-->
	First Name: <input type="text" name="fname" value="" placeholder="FIRST NAME"></input>
	<hr size="1" />

	<!-- password input //-->
	Password: <input type="password" name="pwd" value=""></input>
	<hr size="1" />

	<!-- radio input //-->
	<input type="radio" name="sex" value="male"> Male</input><br />
	<input type="radio" name="sex" value="female"> Female</input>
	<hr size="1" />

	<!-- checkbox input //-->
	<input type="checkbox" name="fruit1" value="Pear"> I have a pear</input><br />
	<input type="checkbox" name="fruit2" value="Apple"> I have an apple</input>
	<hr size="1" />

	<!-- simple drop-down list //-->
	<select name="car">
		<option value="none">- Choose a Car -</option>
		<option value="Volvo">Volvo</option>
		<option value="Echo">Echo</option>
		<option value="Ferrari">Ferrari</option>
		<option value="Audi">Audi</option>
		<option value="Ford">Ford Truck</option>
	</select>
	<hr size="1" />

            <!-- hidden input -->
	<input type="hidden" name="hideme" value="42"></input>

	<!-- textarea input //-->
	<textarea name="info" rows="5" cols="50"></textarea>
	<hr size="1" />

	<!-- submit button //-->
	<input type="submit" name="subButton" value="Send"></input>
</form>
</body>
</html>
