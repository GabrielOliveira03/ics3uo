<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Gabriel Oliveira: ICS3UO</title>
	<meta name="description" content="Gabriel Oliveira's webpage for the ICS3UO course.">
	<meta name="author" content="Gabriel Oliveira">
	<link rel="shortcut icon" href="images/logo.ico">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/gabriels_stylesheet.css" type="text/css">
</head>
<body>
	<?php
		$mass = $_POST['mass'];
		$shape = $_POST['shape'];
		$area = $_POST['area'];
		$dragCoefficient = [
			"Flat Plate" => 1.28,
			"Prism" => 1.14,
			"Bullet" => 0.3,
			"Sphere" => 0.1,
			"Airfoil" => 0.05
		];
		$error_message = "";

		if ($_POST['submit']) {
			if (empty($mass) || empty($shape) || empty($area)) {
				$error_message .= "<p>All fields are mandatory!</p>";
			}
		}

		function terminalVelocity($mass, $dragCoefficient, $area) {
			return round(sqrt((19.6 * $mass) / ($dragCoefficient * 1.229 * $area)), 2);
		}
	?>

	<nav>
  	<a class="home-button" href="./index.php"><i class="fa fa-home">&nbsp;Home</i></a>
	</nav>

  <div id="container">
    <header id="page-header">
      <h1>Terminal Velocity</h1>
    </header>

    <h2>Background Information</h2>
    <p class="lead">
			The terminal velocity of an object is the maximum speed at which an object will fall through a fluid at.  Objects initially accelerate when falling in a fluid, as the object accelerates the upward resistive force of the fluid eventually equals the downward force of gravity causing the object to stop accelerating and to reach its terminal (maximum) speed.
		</p>

    <p>
			Terminal velocity is dependent on the weight of the object, drag coefficient, frontal surface area and density of the gas.<br />W = weight, Cd = drag coefficient,	A = frontal area,	P = gas density
		</p>

    <p>
			The formula for terminal velocity is: V=&#8730;19.6*mass/Cd*1.229*area
		</p>

		<hr>

		<p class="mandatory-fields-note">
			<strong>Note:</strong> All fields are mandatory.
		</p>

    <form name="form" id="form" method="post" action="activity-2-6c-terminal-velocity.php">
			<div class="horizontal-controls">

			  <label for="mass">Mass of Object (kg):</label>
				<input id="mass" type="text" name="mass" value="<?= $mass ?>">

	      <label for="shape">Shape:</label>
				<select id="shape" name="shape">
	        <option value="Flat Plate" <?= $shape == "Flat Plate" ? "selected" : ""?>>Flat Plate</option>
	        <option value="Prism" <?= $shape == "Prism" ? "selected" : ""?>>Prism</option>
	        <option value="Bullet" <?= $shape == "Bullet" ? "selected" : ""?>>Bullet</option>
	        <option value="Sphere" <?= $shape == "Sphere" ? "selected" : ""?>>Sphere</option>
	        <option value="Airfoil" <?= $shape == "Airfoil" ? "selected" : ""?>>Airfoil</option>
	      </select>

				<label for="area">Frontal Area (m<sup>2</sup>)</label>
				<input type="text" name="area" value="<?= $area ?>">

			</div>

			<div class="form-buttons">
      	<input type="submit" name="submit" value="Submit" class="submit-btn btn btn-pill">
			</div>

    </form>

		<? if ($_POST['submit']) {
				if ($error_message) { ?>
					<div class="alert alert-danger">
						<?= $error_message  ?>
					</div>
			<? } else { ?>
				<div class="output-info">
					<p>
						The mass is <?= $mass ?> kg, the area is <?= $area ?> m<sup>2</sup>, and the shape is <?= $shape ?>, which has a drag coefficient of <?= $dragCoefficient[$shape] ?>.
					</p>

					<p>
	        	Therefore, the terminal velocity is <strong> <?= terminalVelocity($mass, $dragCoefficient[$shape], $area) ?>m/s</strong>.";
					</p>
				</div>
		 	<? }
		}?>

  </div>
</body>
</html>
