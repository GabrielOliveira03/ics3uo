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
		$height = $_POST['height'];
		$radius = $_POST['radius'];
		$error_message = "";

		if ($_POST['submit']) {
			if (empty($height) || empty($radius)) {
				$error_message .= "<p>All fields are mandatory!</p>";
			}
		}

		function coneVolume($height, $radius) {
			return round(($height * pi() * pow($radius, 2)) / 3);
		}

		function sphereVolume($radius) {
			return round(4 * (pi() * pow($radius, 3)) / 3);
		}

		function totalVolume($height, $radius) {
			return coneVolume($height, $radius) + (sphereVolume($radius) / 2);
		}
	?>

	<nav>
    <a class="home-button" href="./index.php"><i class="fa fa-home">&nbsp;Home</i></a>
  </nav>

	<div id="container">
		<header id="page-header">
			<h1>Volume of an Ice Cream Cone</h1>
		</header>

		<h2>Background Information</h2>

		<p class="lead">
			This is a function that calculates the volume of an ice cream cone by adding together the volume of the cone and the volume of the scoop, assuming that there is only one scoop and the radius of the scoop is the same as the cone. The ice cream inside the cone will not be counted as it is inside the cone, so only half of the scoop's volume and the cone's volume will be counted.
		</p>

		<div class="image-centered">
			<h3>Formulas</h3>
			<img src="https://ncalculators.com/images/formulas/sphere.jpg" alt="Volume of Sphere" title="Volume of Sphere" height="200px"; />
			<img src="https://www.onlinemathlearning.com/image-files/xvolume-of-cone.png.pagespeed.ic.2-YhHAnIvd.png" alt="Volume of Cone" title="Volume of Cone" height="200px"; />
		</div>

		<hr>

		<p class="mandatory-fields-note">
			<strong>Note:</strong> All fields are mandatory.
		</p>

		<form name="form" action="activity-2-6b-ice-cream-cone.php" method="post" id="form">
			<div class="horizontal-controls">
			  <label for"radius">Radius of Cone/Sphere: (cm)</label>
				<input type="text" name="radius" value="<?= $radius ?>">

			  <label for="height">Height of Cone: (cm)</label>
				<input type="text" name="height" value="<?= $height ?>">
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
						The volume of the cone is <strong><?= coneVolume($height, $radius) ?> cm<sup>3</sup></strong>.
					</p>
					<p>
						The volume of the scoop is <strong><?= sphereVolume($radius) ?> cm<sup>3</sup></strong>.
					</p>
					<p>
						Assuming the ice cream inside the cone is not counted, the total volume of the ice cream cone is <strong><?= totalVolume($height, $radius) ?> <strong>cm<sup>3</sup></strong>
					</p>
					<div class="image-centered">
						<img src="https://content.mycutegraphics.com/graphics/icecream/ice-cream-cone-clip-art.png" alt="icecreamcone" title="Ice Cream Cone" height="200px" />
					</div>
				</div>
		 	<? }
		}?>

	</div>
</body>
</html>
