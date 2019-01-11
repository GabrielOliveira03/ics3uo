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
		$weight = $_POST['weight'];
		$height = $_POST['height'];
		$error_message = "";

		if ($_POST['submit']) {
			if (empty($weight) || empty($height)) {
				$error_message .= "<p>All fields are mandatory!</p>";
			}
		}

		function bmi($weight, $height) {
			return round($weight / pow($height / 100, 2), 1);
		}

		function bmiCategory($bmi) {
			$result = "";

			if ($bmi < 18.5) {
				$result = "Underweight";
			} else if ($bmi <= 24.9) {
				$result = "Normal";
			} else if ($bmi <= 29.9) {
				$result = "Overweight";
			} else if ($bmi >= 30) {
				$result = "Obese";
			}

			return $result;
		}
	?>

	<nav>
  	<a class="home-button" href="./index.php"><i class="fa fa-home">&nbsp;Home</i></a>
	</nav>

  <div id="container">
    <header id="page-header">
      <h1>Body Mass Index</h1>
    </header>

    <h2>Background Information</h2>

    <p class="lead">
			Body mass index (BMI) is a measure of body fat based on your weight in relation to your height, and applies to most adult men and women aged 20 and over. For children aged 2 and over, BMI percentile is the best assessment of body fat.
		</p>

    <p class="lead">
			With the metric system, the formula for BMI is weight in kilograms divided by height in meters squared (kg/m<sup>2</sup>).
		</p>

		<div class="image-centered">
	    <img src="https://texasbariatricspecialists.com/wp-content/uploads/2014/03/Screen-shot-2011-04-12-at-1.14.16-PM.png" alt="bmi" title="BMI" />
		</div>

		<hr>

		<p class="mandatory-fields-note">
			<strong>Note:</strong> All fields are mandatory.
		</p>

    <form name="form" action="activity-2-6d-bmi.php" method="post" id="form">
			<div class="horizontal-controls">
      	<label for="weight">Weight (kg):</label>
				<input type="text" name="weight" value="<?= $weight ?>">

				<label for="height">Height (cm):</label>
				<input type="text" name="height" value="<?= $height ?>">
			</div>

			<div class="form-buttons">
      	<input type="submit" value="Submit" name="submit" class="submit-btn btn btn-pill">
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
						Your weight is <strong><?= $weight ?></strong> kg, and your height is <strong><?= $height ?></strong> metres.
					</p>

					<p>
						Therefore, your body mass index is <strong><?= bmi($weight, $height) ?></strong>
					</p>

					<p>
						According to the BMI Weight Categories you are: <strong><?= bmiCategory(bmi($weight, $height)) ?></strong>.
					</p>
				</div>
		 	<? }
		}?>
</body>
</html>
