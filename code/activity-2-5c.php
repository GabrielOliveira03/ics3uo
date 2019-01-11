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
		$num1 = $_POST['num1'];
		$num2 = $_POST['num2'];

		if ($_POST['submit']) {
			if (empty($num1) || empty($num2)) {
				$error_message .= "<p>There must be a first and second number!</p>";
			}

			if ($num1 <=0 || $num1 > 10 || $num2 <=0 || $num2 > 10) {
				$error_message .= "<p>Both numbers must be above 0 and under 10!</p>";
			}
		}
	?>

	<nav>
    <a class="home-button" href="./index.php"><i class="fa fa-home">&nbsp;Home</i></a>
  </nav>

  <div id="container">

		<header id="page-header">
	    <h1>PHP Nested For Loops</h1>
	  </header>

	  <h2>Background Information</h2>
	  <p class="lead">This is a script that will output many addition operations according to the two numbers input in the form. The first number will be the first operand, and will repeat itself until it reaches the highest number of the second number. For example, if the first number was 2, and the second number was 3, the output would be:<p>

	  <p>1 + 1 = 2</p>
	  <p>1 + 2 = 3</p>
	  <p>1 + 3 = 4</p>
	  <p>2 + 1 = 3</p>
	  <p>2 + 2 = 4</p>
	  <p>2 + 3 = 5</p>

		<hr>

		<p class="mandatory-fields-note">
			<strong>Note:</strong> Both numbers must be between 0 and 10
		</p>

    <form id="form" name="form" action="activity-2-5c.php" method="post">
			<div class="horizontal-controls">
	      <label for="num1">First Number:</label>
				<input id="num1" type="text" name="num1" value="<?= $num1 ?>">

	      <label for="num2">Second Number:</label>
				<input id="num2" type="text" name="num2" value="<?= $num2 ?>">
			</div>

			<div class="form-buttons">
	      <input type="submit" name="submit" value="Submit" class="submit-btn btn btn-pill" />
			</div>
    </form>

		<? if ($_POST['submit']) {
				if ($error_message) { ?>
					<div class="alert alert-danger">
						<?= $error_message  ?>
					</div>
			<? } else { ?>
				<div class="output-info">
				<? for ($x = $num1; $x <= $num2; $x++) {
						 for ($y = $num1; $y < $num2; $y++) { ?>
								<p><?= $x ?> + <?= $y?> = <strong><?= $x + $y?></strong></p>
					<? }
				} ?>
			</div>
			<? }
		} ?>

	</div>
</body>
</html>
