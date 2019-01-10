<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Gabriel Oliveira: ICS3UO - For Loops</title>

	<meta name="description" content="Gabriel Oliveira's webpage for 'for' loops, part of the ICS3UO course.">
	<meta name="author" content="Gabriel Oliveira">
	<link rel="shortcut icon" href="images/logo.ico">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="styles/gabriels_stylesheet.css" type="text/css">
</head>
<body>
	<?php
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];
		$increment = $_POST['increment'];
		$ghost = $_POST['ghost'];
		$error_message = "";

		if ($_POST['submit']) {
			if (empty($num1) || empty($num2)) {
				$error_message .= "<p>There must be a first and second number!</p>";
			}

			if ($num1 >= $num2) {
				$error_message .= "<p>The first number must be smaller than the second number!</p>";
			}

			if (empty($increment)) {
					$error_message .= "<p>Increment number is mandatory!</p>";
			}

			if (empty($ghost)) {
					$error_message .= "<p>Ghost number is mandatory!</p>";
			}

 			if ($ghost <= $num1 || $ghost >= $num2) {
				$error_message .= "<p>Ghost number must be between the first and the second number!</p>";
			}
		}
	?>

	<nav>
    <a class="home-button" href="./index.php"><i class="fa fa-home">&nbsp;Home</i></a>
  </nav>

	<div id="container">

		<header id="page-header">
		  <h1>PHP For Loops</h1>
		</header>

			<h2>Background Information</h2>
		  <p class="lead">
				This is a for loop that prints out numbers. Set the first number, the last number, how much the numbers increment by, and set a ghost number, which shows an image of a ghost beside the set number. The first number must be smaller than the last number, and the ghost number cannot be the first or last number. If no increment is entered, it will be set to 1.
			</p>
			<p class="mandatory-fields-note">
				<strong>Note:</strong> 1. All numbers are mandatory; 2. Second number must be higher than first number; 3. Ghost number must be between the first and the second number.
			</p>
			<hr>

		  <form id="form" name="form" action="activity-2-5b.php" method="post">
				<div class="horizontal-controls">
		    	<label for="num1">First Number:</label>
					<input id="num1" type="text" name="num1" value="<?= $num1 ?>">

		    	<label for="num2">Second Number:</label>
					<input id="num2" type="text" name="num2" value="<?= $num2 ?>">

		    	<label for="increment">Increment by:</label>
					<input id="increment" type="text" name="increment" value="<?= $increment ?>">

		    	<label for="ghost">GHOST number:</label>
					<input type="text" name="ghost" value="<?= $ghost ?>">
				</div>

				<div class="form-buttons">
						<input type="submit" name="submit" value="Submit" class="submit-btn btn btn-pill center">
				</div>
		  </form>

			<? if ($_POST['submit']) {
					if ($error_message) { ?>
						<div class="alert alert-danger">
							<?= $error_message  ?>
						</div>
				<? } else { ?>
					<div class="output-info">
						<? for ($x = $num1; $x <= $num2; $x = $x + $increment) {
								if ($x == $ghost) { ?>
									<p>
										<?= $x ?>
										<img src='images/Ghost - 480x679' class="ghost-image">
									</p>
						<? } else { ?>
									<p><?= $x ?></p>
						<? }
					} ?>
				</div>
				<? }
			} ?>
		</div>
</body>
</html>
