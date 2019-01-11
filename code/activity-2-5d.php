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
		$starting_temperature = $_POST['starting_temperature'];
		$ending_temperature = $_POST['ending_temperature'];
		$increment = $_POST['increment'];

		if ($_POST['submit']) {
			if (empty($starting_temperature) || empty($ending_temperature)) {
				$error_message .= "<p>Starting and ending termperatures are mandatory!</p>";
			} else if ($starting_temperature <= $ending_temperature) {
				$error_message .= "<p>Starting temperature must be higher than ending temperature!</p>";
			}

			if (empty($increment)) {
					$error_message .= "<p>Increment number is mandatory!</p>";
			}
		}

		function kelvin($temperatureInCelsius) {
			return $temperatureInCelsius + 273.15;
		}

		function fahrenheit($temperatureInCelsius) {
			return (($temperatureInCelsius * 1.8) + 32);
		}
	?>

	<nav>
  	<a class="home-button" href="./index.php"><i class="fa fa-home">&nbsp;Home</i></a>
  </nav>

  <div id="container">
    <header id="page-header">
      <h1>PHP Do While Loops</h1>
    </header>

    <h2>Background Information</h2>

    <p class="lead">This is a do while loop that will output temperatures starting from the starting temperature you input, and terminates at the ending temperature you input. You can set the amount that the list increments by, for example incrementing by 2 would skip over every other temperature. This script outputs celsius, fahrenheit and kelvin. If no increment is typed in the increment will be set to 1.
		</p>

		<hr>

		<p class="mandatory-fields-note">
			<strong>Note:</strong> 1. All fields are mandatory; 2. Starting temperature must be lower than ending temperature; 3. Temperatures are in Celsius.
		</p>

    <form id="form" name="form" action="activity-2-5d.php" method="post">
			<div class="horizontal-controls">
      	<label for="starting_temperature">Starting Temperature:</label>
				<input id="starting_temperature" type="text" name="starting_temperature" value="<?= $starting_temperature ?>">

				<label for="ending_temperature">Ending Temperature:</label>
				<input id="ending_temperature" type="text" name="ending_temperature" value="<?= $ending_temperature ?>">

				<label for="increment">Increment by:</label>
				<input id="increment" type="text" name="increment" value="<?= $increment ?>">
			</div>

			<div class="form-buttons">
      	<input type="submit" name="submit" class="submit-btn btn btn-pill" value="Submit" />
			</div>
    </form>

		<? if ($_POST['submit']) {
				if ($error_message) { ?>
					<div class="alert alert-danger">
						<?= $error_message  ?>
					</div>
			<? } else { ?>
				<div class="output-info">
					<table>
						<thead>
							<tr>
								<th>Celsius</th>
								<th>Kelvin</th>
								<th>Fahrenheit</th>
							</tr>
						</thead>
						<tbody>
						<? do { ?>
							<tr>
				        <td><?= round($starting_temperature) ?></td>
				        <td><?= round(kelvin($starting_temperature)) ?></td>
				        <td><?= round(fahrenheit($starting_temperature)) ?></td>
							</tr>
				      <?
							$starting_temperature -= $increment;
						} while ($starting_temperature>= $ending_temperature);
						?>
					</tbody>
				</table>
			</div>
			<? }
		} ?>
  </div>
</body>
</html>
